<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Feeship;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class DeliveryController extends Controller
{
    //
    public function delivery(){
        $city = City::orderBy('matp', 'asc')->get();
        return view('admin.delivery.create_delivery')->with(compact('city'));
    }
    public function select_feeship(){
        $fee_ship = Feeship::orderBy('fee_id', 'desc')->get();
        $output = '';
        $output.='<div class="table-reponsive">
            <table class="table table-bordered">
                <thread>
                    <tr>
                        <th>Tên thành phố</th>
                        <th>Tên quận huyện</th>
                        <th>Phí ship</th>
                        <th></th>
                    </tr>
                </thread>
                <tbody>';
                foreach($fee_ship as $key => $value){
                    $output.='
                    <tr>
                        <td>'.$value->city->name_city.'</td>
                        <td>'.$value->province->name_quanhuyen.'</td>
                        <td contenteditable data-feeship_id="'.$value->fee_id.'" class="fee_feeship_edit">'.number_format($value->fee_feeship).'</td>
                        <td>
                            <a class="btn btn-danger" href="'.URL::to("admin/delete-delivery/".$value->fee_id).'">Xóa</a>
                        </td>
                    </tr>
                    ';
                }
                $output.='
                </tbody></table></div>';
                echo $output;

    }
    public function select_delivery(Request $request){
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=='city'){
                $select_province = Province::where('matp', $data['matp'])->orderBy('maqh', 'ASC')->get();
                $output.='<option value="">---Chọn quận huyện---</option>';
                foreach($select_province as $key => $value){
                    $output.= '<option value="'.$value->maqh.'">'.$value->name_quanhuyen.'</option>';
                };
            }
        }
        echo $output;
    }
    public function insert_delivery(Request $request){
        $data = $request->all();
        $fee_ship = new Feeship();
        $fee_ship->fee_matp = $data['city'];
        $fee_ship->fee_maqh = $data['province'];
        $fee_ship->fee_feeship = $data['fee_ship'];

        $fee_ship->save();
    }
    public function update_delivery(Request $request){
        $data = $request->all();

        $fee_ship = Feeship::find($data['feeship_id']);
        $fee_value = rtrim($data['fee_value'],',');
        $fee_ship->fee_feeship = $fee_value;

        $fee_ship->save();
    }
    public function delete_delivery($id){
        //
        $fee_ship = Feeship::findOrFail($id);
        $fee_ship->delete();

        return redirect('/admin/delivery');
    }
}
