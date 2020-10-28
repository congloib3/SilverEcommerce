<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();

        $products = Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get();

        return view('admin.categories')->with('categories', $categories)->with('products', $products);
    }
    public function create_category()
    {
        return view('admin.create_category');
    }
    public function getCategories()
    {
        //
        $categories = Category::all();

        $products = Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get();

        return view('pages.silver')->with('categories', $categories)->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // // DB::beginTransaction();
        // try {

            $input = $request->all();

            $category_tmp = Category::create($input);

            $id = $category_tmp->id;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                // $filename = $file->getClientOriginalName();
                $path = Storage::disk('public')->putFileAs('categories/'.$id, $file, $file->getClientOriginalName());
                $input['image'] = $path;

            }

            $category = $category_tmp->findOrFail($id);

            $category->fill($input);

            $category->save();

            // DB::commit();
            Session::put('message', 'Thêm danh mục sản phẩm thành công');
            return redirect('admin/create-category');
        // } catch (\Exception $e) {
        //     DB::rollback();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category = Category::findOrFail($id);

        return view('admin.update_category')->with('category', $category);
    }

    public function getProducts($id)
    {
        //
        $products = Product::where('category_id', $id)->orderBy('id', 'desc')->paginate(8);

        // $products;

        return view('pages.product')->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            // dd($request->all());
            //
            $input = $request->all();


            $category = Category::findOrFail($id);


            if ($request->hasFile('image')) {
                if (isset($category->image)) {
                    Storage::delete($category->image);
                }
                $file = $request->file('image');
                // $filename = $file->getClientOriginalName();
                $path = Storage::disk('public')->putFileAs('categories/'.$id, $file, $file->getClientOriginalName());
                $input['image'] = $path;
            }

            $category->fill($input);

            $category->save();

            Session::put('message', 'Sửa danh mục sản phẩm thành công');
            return redirect('admin/update_categories/'.$id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id);
        $category->delete();

        Session::put('message_dashboard', 'Xóa danh mục sản phẩm thành công');
        return redirect('/admin/categories');
    }
}
