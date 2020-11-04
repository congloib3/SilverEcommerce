<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Commodity;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;


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


        return view('admin.categories.categories')->with('categories', $categories);
    }
    public function create_category()
    {
        $commodities = Commodity::all();
        return view('admin.categories.create_category')->with('commodities', $commodities);
    }
    public function getCommodities($id)
    {
        //
        $categories = Category::where('commodity_id', $id)->get();

        $products = Product::where('status', 1)->inRandomOrder()->take(8)->get();

        return view('pages.commodity')->with('categories', $categories)->with('products', $products);
    }
    public function getWatchs()
    {
        //
        $categories = Category::where('commodity_id', 2)->get();

        $products = Product::where('status', 1)->inRandomOrder()->take(8)->get();

        return view('pages.watch')->with('categories', $categories)->with('products', $products);
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
            $request->validate([
                'name' => 'nullable',
                'image' => 'nullable'
            ]);

            $input = $request->all();

            $category_tmp = Category::create($input);

            $id = $category_tmp->id;
            if ($request->hasFile('image')) {
                $file = $request->file('image');


                $fileName = $file->getClientOriginalName();

                $uploadPath = public_path('/upload/categories/'.$id); // Thư mục upload

                $file->move($uploadPath, $fileName);


                // $filename = $file->getClientOriginalName();
                // $path = Storage::disk('public')->putFileAs('categories/'.$id, $file, $file->getClientOriginalName());
                $input['image'] = $fileName;

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

        $commodities = Commodity::all();

        return view('admin.categories.update_category')->with('category', $category)->with('commodities', $commodities);
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
            //
            $input = $request->all();

            $category = Category::findOrFail($id);


            if ($request->hasFile('image')) {
                if (isset($category->image)) {
                    $file_path = '/upload/categories/'.$category->id.'/'.$category->image;
                    File::delete(public_path($file_path));
                }
                $file = $request->file('image');

                $fileName = $file->getClientOriginalName();

                $uploadPath = public_path('/upload/categories/'.$id); // Thư mục upload

                $file->move($uploadPath, $fileName);

                $input['image'] = $fileName;
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
