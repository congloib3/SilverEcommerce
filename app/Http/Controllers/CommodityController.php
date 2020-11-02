<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commodity;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class CommodityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $commodities = Commodity::all();
        return view('admin.commodities.commodities')->with('commodities', $commodities);
    }
    public function getCommodities(){
        $commodities = Commodity::all();
        return view('pages.home')->with('commodities', $commodities);
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
    public function create_commodity(){
        return view('admin.commodities.create_commodity');
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

            $commodity_tmp = Commodity::create($input);

            $id = $commodity_tmp->id;
            if ($request->hasFile('image')) {
                $file = $request->file('image');


                $fileName = $file->getClientOriginalName();

                $uploadPath = public_path('/upload/commodities/'.$id); // Thư mục upload

                $file->move($uploadPath, $fileName);

                $input['image'] = $fileName;

            }

            $commodity = $commodity_tmp->findOrFail($id);

            $commodity->fill($input);

            $commodity->save();

            // DB::commit();
            Session::put('message', 'Thêm loại sản phẩm thành công');
            return redirect('admin/create-commodity');
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
        $commodity = Commodity::findOrFail($id);

        return view('admin.commodities.update_commodity')->with('commodity', $commodity);
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


        $commodity = Commodity::findOrFail($id);


        if ($request->hasFile('image')) {
            if (isset($commodity->image)) {
                $file_path = '/upload/commodities/'.$commodity->id.'/'.$commodity->image;
                File::delete(public_path($file_path));
            }
            $file = $request->file('image');

            $fileName = $file->getClientOriginalName();

            $uploadPath = public_path('/upload/commodities/'.$id); // Thư mục upload

            $file->move($uploadPath, $fileName);

            $input['image'] = $fileName;
        }

        $commodity->fill($input);

        $commodity->save();

        Session::put('message', 'Sửa loại sản phẩm thành công');
        return redirect('admin/update_commodity/'.$id);
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
        $commodity = Commodity::findOrFail($id);
        $commodity->delete();

        Session::put('message_dashboard', 'Xóa loại sản phẩm thành công');
        return redirect('/admin/commodities');
    }
}
