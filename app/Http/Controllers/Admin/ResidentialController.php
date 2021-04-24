<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\residential;
use App\Models\Admin\total_property;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin\prop_image;
use Illuminate\Support\Facades\Storage;

class ResidentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = residential::all();
        return view('admin/residential/property_list', ['data' => $data]);
    }
    public function manage(Request $req, $id = '')
    {
        if ($id > 0) {
            $arr = residential::where('id', $id)->get();
            $result['building_name'] = $arr['0']->building_name;
            $result['builder_name'] = $arr['0']->builder_name;
            $result['owner_name'] = $arr['0']->owner_name;
            $result['contact_number'] = $arr['0']->contact_number;
            $result['address'] = $arr['0']->address;
            $result['city_name'] = $arr['0']->city_name;
            $result['slug'] = $arr['0']->slug;
            $result['total_floor'] = $arr['0']->total_floor;
            $result['no_of_room'] = $arr['0']->no_of_room;
            $result['floor_offer'] = $arr['0']->floor_offer;
            $result['sup_b_area'] = $arr['0']->sup_b_area;
            $result['carpet_area'] = $arr['0']->carpet_area;
            $result['time_ava'] = $arr['0']->time_ava;
            $result['state_handover'] = $arr['0']->state_handover;
            $result['rent_p_month'] = $arr['0']->rent_p_month;
            $result['cam'] = $arr['0']->cam;
            $result['car_parking'] = $arr['0']->car_parking;
            $result['power_back'] = $arr['0']->power_back;
            $result['sec_deposit'] = $arr['0']->sec_deposit;
            $result['pow_by_lessee'] = $arr['0']->pow_by_lessee;
            $result['escalation'] = $arr['0']->escalation;
            $result['locking'] = $arr['0']->locking;
            $result['cc'] = $arr['0']->cc;
            $result['fire_noc'] = $arr['0']->fire_noc;
            $result['floor_height'] = $arr['0']->floor_height;
            $result['no_lift'] = $arr['0']->no_lift;
            $result['pantry'] = $arr['0']->pantry;
            $result['no_toilet'] = $arr['0']->no_toilet;
            $result['floor_plan'] = $arr['0']->floor_plan;
            $result['tenants'] = $arr['0']->tenants;
            $result['id'] = $arr['0']->id;
            $result['status'] = $arr['0']->status;
        } else {
            $result['building_name'] = '';
            $result['builder_name'] = '';
            $result['owner_name'] = '';
            $result['contact_number'] = '';
            $result['address'] = '';
            $result['city_name'] = '';
            $result['slug'] = '';
            $result['total_floor'] = '';
            $result['no_of_room'] = '';
            $result['floor_offer'] = '';
            $result['sup_b_area'] = '';
            $result['carpet_area'] = '';
            $result['time_ava'] = '';
            $result['state_handover'] = '';
            $result['rent_p_month'] = '';
            $result['cam'] = '';
            $result['car_parking'] = '';
            $result['power_back'] = '';
            $result['sec_deposit'] = '';
            $result['pow_by_lessee'] = '';
            $result['escalation'] = '';
            $result['locking'] = '';
            $result['cc'] = '';
            $result['fire_noc'] = '';
            $result['floor_height'] = '';
            $result['no_lift'] = '';
            $result['pantry'] = '';
            $result['no_toilet'] = '';
            $result['floor_plan'] = '';
            $result['tenants'] = '';
            $result['id'] = 0;
            $result['status'] = '';
        }
        return view('admin/residential/add_property', $result);
    }
    public function manage_residential(Request $req)
    {
        $req->validate([
            'slug' => 'required|unique:commercials,slug,' . $req->post('id'),
        ]);


        if ($req->id > 0) {
            $data = residential::find($req->id);
            $msg = "Property Updated";
        } else {
            $data = new residential;
            $msg = "Property Added ";
        }
        if ($req->hasfile('banner_pic')) {
            if ($req->post('id') > 0) {
                $arrImage = DB::table('commercials')->where(['id' => $req->post('id')])->get();
                if (Storage::exists('/public/media/' . $arrImage[0]->banner_pic)) {
                    Storage::delete('/public/media/' . $arrImage[0]->banner_pic);
                }
            }
            $image = $req->file('banner_pic');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $data->banner_pic = $image_name;
        }


        $data->category_id = 2;
        $data->building_name = $req->building_name;
        $data->builder_name = $req->builder_name;
        $data->owner_name = $req->owner_name;
        $data->contact_number = $req->contact_number;
        $data->address = $req->address;
        $data->city_name = $req->city_name;
        $data->slug = str_replace(' ', '', $req->slug);
        $data->total_floor = $req->total_floor;
        $data->no_of_room = $req->no_of_room;
        $data->floor_offer = $req->floor_offer;
        $data->sup_b_area = $req->sup_b_area;
        $data->carpet_area = $req->carpet_area;
        $data->time_ava = $req->time_ava;
        $data->state_handover = $req->state_handover;
        $data->rent_p_month = $req->rent_p_month;
        $data->cam = $req->cam;
        $data->car_parking = $req->car_parking;
        $data->power_back = $req->power_back;
        $data->sec_deposit = $req->sec_deposit;
        $data->pow_by_lessee = $req->pow_by_lessee;
        $data->escalation = $req->escalation;
        $data->locking = $req->locking;
        $data->cc = $req->cc;
        $data->fire_noc = $req->fire_noc;
        $data->floor_height = $req->floor_height;
        $data->no_lift = $req->no_lift;
        $data->pantry = $req->pantry;
        $data->no_toilet = $req->no_toilet;
        $data->floor_plan = $req->floor_plan;
        $data->tenants = $req->tenants;
        $data->status = 1;
        date_default_timezone_set('Asia/Kolkata');
        $data->created_at = date("d-m-Y");
        if ($req->hasfile('banner_pic')) {
            $image = $req->file('banner_pic');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $data->banner_pic = $image_name;
        }
        $data->save();
        $pid = $data->id;
        
        if ($req->post('id') == 0) {
            $property = new total_property;
            $property->category_id =2;
            $property->property_id = $pid;
            $property->save();
        }
        

        if ($req->hasFile("building_photos")) {
            foreach ($req->building_photos as $key => $val) {
                if ($req->hasFile("building_photos.$key")) {
                    $productImageArr['property_id'] = $pid;
                    $productImageArr['category_id'] = 2;
                    $rand = time() . rand('111111111', '999999999');
                    $images = $req->file("building_photos.$key");
                    $ext = $images->extension();
                    $image_name = $rand . '.' . $ext;
                    $req->file("building_photos.$key")->storeAs('/public/media', $image_name);
                    $productImageArr['images'] = $image_name;
                    if ($req->post('id') > 0) {
                        DB::table('prop_images')->where('property_id', $req->post('id'))->update($productImageArr);
                    } else {
                        DB::table('prop_images')->insert($productImageArr);
                    }
                }
            }
        }

        $req->session()->flash('message', $msg);
        return redirect('admin/residential');
    }
    public function status(Request $req, $status, $id)
    {
        $data = residential::find($id);
        $data->status = $status;
        $data->save();
        $req->session()->flash('message', 'Property status changed');
        return redirect('admin/residential');
    }
    public function delete($id)
    {
        $data = residential::find($id);
        $data->delete();
        $arrImage = DB::table('prop_images')->where('property_id', $id)->get();
        foreach ($arrImage as $arrImage) {
            if (Storage::exists('/public/media/' . $arrImage->images)) {
                Storage::delete('/public/media/' . $arrImage->images);
            }
        }
        prop_image::where('property_id', $id)->delete();
        session()->flash('message', 'Property deleted Successfully');
        return redirect('admin/residential');
    }
    public function detail($id)
    {
        $data = residential::find($id);
        $data2 = prop_image::where('property_id', $id)->get();
        return view('admin/residential/detail', ['data' => $data, 'data2' => $data2]);
    }
    public function search($str)
    {
        $data = DB::table('residentials')
            ->where('building_name', 'like', "%$str%")
            ->orwhere('builder_name', 'like', "%$str%")
            ->orwhere('owner_name', 'like', "%$str%")
            ->orwhere('address', 'like', "%$str%")
            ->get();


        session()->flash('message', 'Search results of ' . $str);
        return view('admin/residential/property_list', ['data' => $data]);
    }
}
