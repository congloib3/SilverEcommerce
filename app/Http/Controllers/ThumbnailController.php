<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Thumbnail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class ThumbnailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function create_thumbnail($id){
        $product = Product::findOrFail($id);

        return view('admin.thumbnails.create_thumbnail')->with('product', $product);
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

            $thumbnail_tmp = Thumbnail::create($input);

            $id = $thumbnail_tmp->id;
            if ($request->hasFile('img_path')) {
                $file = $request->file('img_path');


                $fileName = $file->getClientOriginalName();

                $uploadPath = public_path('/upload/thumbnails/'.$id); // Thư mục upload

                $file->move($uploadPath, $fileName);

                $input['img_path'] = $fileName;

            }

            $thumbnail = $thumbnail_tmp->findOrFail($id);

            $thumbnail->fill($input);

            $thumbnail->save();

            // DB::commit();
            Session::put('message', 'Thêm thumbnail thành công');
            return redirect('/admin/create-thumbnail/'.$thumbnail->product_id);
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
    public function showThumbnails($id){
        $product = Product::where('id', $id)->with('thumbnails', 'category')->first();


        return view('admin.thumbnails.thumbnails')->with('product', $product);
    }
    public function show($id)
    {
        //
        $thumbnail = Thumbnail::findOrFail($id);

        return view('admin.thumbnails.update_thumbnail')->with('thumbnail', $thumbnail);
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
        //
        $input = $request->all();

        $thumbnail = Thumbnail::findOrFail($id);

        if ($request->hasFile('img_path')) {
            if (isset($thumbnail->img_path)) {
                $file_path = '/upload/thumbnails/'.$thumbnail->id.'/'.$thumbnail->img_path;
                File::delete(public_path($file_path));
            }
            $file = $request->file('img_path');

            $fileName = $file->getClientOriginalName();

            $uploadPath = public_path('/upload/thumbnails/'.$id); // Thư mục upload

            $file->move($uploadPath, $fileName);

            $input['img_path'] = $fileName;
        }

        $thumbnail->fill($input);

        $thumbnail->save();

        Session::put('message', 'Sửa sản phẩm thành công');
        return redirect('admin/update_thumbnail/'.$id);
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
    }
}
