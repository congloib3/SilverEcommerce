<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::with('category')->orderBy('id', 'desc')->paginate(8);

        return view('admin.products.products')->with('products', $products);
    }
    public function getProducts($id)
    {
        //
        $products = Product::where('category_id', $id)->orderBy('id', 'desc')->paginate(8);

        $category = Category::findOrFail($id);


        return view('pages.product')->with('products', $products)->with('category', $category);
    }
    public function search(){
        $key = Input::get('key');

        // dd($key);
        if($key!=""){
            $products = Product::where('name', 'like', "%$key%")
                                ->orWhere('description', 'like', "%$key%")
                                ->take(30)
                                ->paginate(8);
            $products->appends(['key' => $key]);
        }
        return view('pages.search')->with('products', $products)->with('key', $key);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }
    public function create_product(){

        $categories = Category::all();

        return view('admin.products.create_product')->with('categories', $categories);
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

            $product_tmp = Product::create($input);

            $id = $product_tmp->id;
            if ($request->hasFile('image')) {
                $file = $request->file('image');


                $fileName = $file->getClientOriginalName();

                $uploadPath = public_path('/upload/products/'.$id); // Thư mục upload

                $file->move($uploadPath, $fileName);

                $input['image'] = $fileName;

            }

            $product = $product_tmp->findOrFail($id);

            $product->fill($input);

            $product->save();

            // DB::commit();
            Session::put('message', 'Thêm sản phẩm thành công');
            return redirect('admin/create-product');
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
        $product = Product::where('id', $id)->with('thumbnails', 'category')->first();

        $related_products = Product::where('category_id', $product->category_id)->whereNotIn('id', [$product->id])->inRandomOrder()->take(10)->get();

        return view('pages.detail')->with('product', $product)->with('related_products', $related_products);
    }
    public function detail($id){
        $product = Product::where('id', $id)->first();

        $categories = Category::all();

        return view('admin.products.update_product')->with('product', $product)->with('categories', $categories);
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

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            if (isset($product->image)) {
                $file_path = '/upload/products/'.$product->id.'/'.$product->image;
                File::delete(public_path($file_path));
            }
            $file = $request->file('image');

            $fileName = $file->getClientOriginalName();

            $uploadPath = public_path('/upload/products/'.$id); // Thư mục upload

            $file->move($uploadPath, $fileName);

            $input['image'] = $fileName;
        }

        $product->fill($input);

        $product->save();

        Session::put('message', 'Sửa sản phẩm thành công');
        return redirect('admin/update_product/'.$id);
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
        $product = Product::findOrFail($id);
        $product->delete();

        Session::put('message_dashboard', 'Xóa sản phẩm thành công');
        return redirect('/admin/products');
    }
}
