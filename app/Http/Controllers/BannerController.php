<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Commodity;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;



class BannerController extends Controller
{
    public function testSlug(Product $product){
        $commodities = Product::find($product);

        return $commodities;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = Banner::all();
        return view('admin.banners.banners')->with('banners', $banners);
    }
    public function getBanners(){
        $banners = Banner::all();
        $commodities = Commodity::all();
        return view('pages.home')->with('banners', $banners)->with('commodities', $commodities);
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
    public function create_banner(){
        return view('admin.banners.create_banner');
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

            $banner_tmp = Banner::create($input);

            $id = $banner_tmp->id;
            if ($request->hasFile('image')) {
                $file = $request->file('image');


                $fileName = $file->getClientOriginalName();

                $uploadPath = public_path('/upload/banners/'.$id); // Thư mục upload

                $file->move($uploadPath, $fileName);

                $input['image'] = $fileName;

            }

            $banner = $banner_tmp->findOrFail($id);

            $banner->fill($input);

            $banner->save();

            // DB::commit();
            Session::put('message', 'Thêm banner thành công');
            return redirect('admin/create-banner');
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
        $banner = Banner::findOrFail($id);

        return view('admin.banners.update_banner')->with('banner', $banner);
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


        $banner = Banner::findOrFail($id);


        if ($request->hasFile('image')) {
            if (isset($banner->image)) {
                $file_path = '/upload/banners/'.$banner->id.'/'.$banner->image;
                File::delete(public_path($file_path));
            }
            $file = $request->file('image');

            $fileName = $file->getClientOriginalName();

            $uploadPath = public_path('/upload/banners/'.$id); // Thư mục upload

            $file->move($uploadPath, $fileName);

            $input['image'] = $fileName;
        }

        $banner->fill($input);

        $banner->save();

        Session::put('message', 'Sửa banner thành công');
        return redirect('admin/update_banner/'.$id);
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
        $banner = Banner::findOrFail($id);
        $banner->delete();

        Session::put('message_dashboard', 'Xóa banner thành công');
        return redirect('/admin/banners');
    }
}
