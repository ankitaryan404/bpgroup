<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Admin\warehouse;
use App\Models\Admin\total_property;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin\prop_image;
use Illuminate\Support\Facades\Storage;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = warehouse::all();
        return view('admin/warehouse/property_list', ['data' => $data]);
    }
    public function manage(Request $req, $id = '')
    {
        if ($id > 0) {
            $arr = warehouse::where('id', $id)->get();
            $result['building_name'] = $arr['0']->building_name;
            $result['builder_name'] = $arr['0']->builder_name;
            $result['owner_name'] = $arr['0']->owner_name;
            $result['contact_number'] = $arr['0']->contact_number;
            $result['address'] = $arr['0']->address;
            $result['city_name'] = $arr['0']->city_name;
            $result['slug'] = $arr['0']->slug;
            $result['structure'] = $arr['0']->structure;
            $result['total_area'] = $arr['0']->total_area;
            $result['floor_offered'] = $arr['0']->floor_offered;
            $result['rent_p_sq_ft'] = $arr['0']->rent_p_sq_ft;
            $result['sec_deposit'] = $arr['0']->sec_deposit;
            $result['side_height'] = $arr['0']->side_height;
            $result['docks'] = $arr['0']->docks;
            $result['dock_level'] = $arr['0']->dock_level;
            $result['flooring'] = $arr['0']->flooring;
            $result['roof'] = $arr['0']->roof;
            $result['washroom'] = $arr['0']->washroom;
            $result['electricity_availability'] = $arr['0']->electricity_availability;
            $result['water_supply_availability'] = $arr['0']->water_supply_availability;
            $result['security_gate_office'] = $arr['0']->security_gate_office;
            $result['escalation'] = $arr['0']->escalation;
            $result['possession'] = $arr['0']->possession;
            $result['vehicle_parking'] = $arr['0']->vehicle_parking;
            $result['notice_period'] = $arr['0']->notice_period;
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
            $result['structure'] = '';
            $result['total_area'] = '';
            $result['floor_offered'] = '';
            $result['rent_p_sq_ft'] = '';
            $result['sec_deposit'] = '';
            $result['side_height'] = '';
            $result['docks'] = '';
            $result['dock_level'] = '';
            $result['flooring'] = '';
            $result['roof'] = '';
            $result['washroom'] = '';
            $result['electricity_availability'] = '';
            $result['water_supply_availability'] = '';
            $result['security_gate_office'] = '';
            $result['escalation'] = '';
            $result['possession'] = '';
            $result['vehicle_parking'] = '';
            $result['notice_period'] = '';
            $result['id'] = 0;
            $result['status'] = '';
        }
        return view('admin/warehouse/add_property', $result);
    }
    public function manage_warehouse(Request $req)
    {
        $req->validate([
            'slug' => 'required|unique:warehouses,slug,' . $req->post('id'),
        ]);


        if ($req->id > 0) {
            $data = warehouse::find($req->id);
            $msg = "Property Updated";
        } else {
            $data = new warehouse;
            $msg = "Property Added ";
        }
        if ($req->hasfile('banner_pic')) {
            if ($req->post('id') > 0) {
                $arrImage = DB::table('warehouses')->where(['id' => $req->post('id')])->get();
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


        $data->category_id = 5;
        $data->building_name = $req->building_name;
        $data->builder_name = $req->builder_name;
        $data->owner_name = $req->owner_name;
        $data->contact_number = $req->contact_number;
        $data->address = $req->address;
        $data->city_name = $req->city_name;
        $data->slug = $req->slug;
        $data->structure = $req->structure;
        $data->total_area = $req->total_area;
        $data->floor_offered = $req->floor_offered;
        $data->rent_p_sq_ft = $req->rent_p_sq_ft;
        $data->sec_deposit = $req->sec_deposit;
        $data->side_height = $req->side_height;
        $data->docks = $req->docks;
        $data->dock_level = $req->dock_level;
        $data->flooring = $req->flooring;
        $data->roof = $req->roof;
        $data->washroom = $req->washroom;
        $data->electricity_availability = $req->electricity_availability;
        $data->water_supply_availability = $req->water_supply_availability;
        $data->security_gate_office = $req->security_gate_office;
        $data->escalation = $req->escalation;
        $data->possession = $req->possession;
        $data->vehicle_parking = $req->vehicle_parking;
        $data->notice_period = $req->notice_period;
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
            $property->category_id = 5;
            $property->property_id = $pid;
            $property->save();
        }


        if ($req->hasFile("building_photos")) {
            foreach ($req->building_photos as $key => $val) {
                if ($req->hasFile("building_photos.$key")) {
                    $productImageArr['property_id'] = $pid;
                    $productImageArr['category_id'] = 5;
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
        return redirect('admin/warehouse');
    }
    public function status(Request $req, $status, $id)
    {
        $data = warehouse::find($id);
        $data->status = $status;
        $data->save();
        $req->session()->flash('message', 'Property status changed');
        return redirect('admin/warehouse');
    }
    public function delete($id)
    {
        $data = warehouse::find($id);
        $data->delete();
        $arrImage = DB::table('prop_images')->where('property_id', $id)->get();
        foreach ($arrImage as $arrImage) {
            if (Storage::exists('/public/media/' . $arrImage->images)) {
                Storage::delete('/public/media/' . $arrImage->images);
            }
        }
        prop_image::where('property_id', $id)->delete();
        session()->flash('message', 'Property deleted Successfully');
        return redirect('admin/warehouse');
    }
    public function detail($id)
    {
        $data = warehouse::find($id);
        $data2 = prop_image::where('property_id', $id)->where('category_id',5)->get();
        return view('admin/warehouse/detail', ['data' => $data, 'data2' => $data2]);
    }
    public function search($str)
    {
        $data = DB::table('warehouses')
            ->where('building_name', 'like', "%$str%")
            ->orwhere('builder_name', 'like', "%$str%")
            ->orwhere('owner_name', 'like', "%$str%")
            ->orwhere('address', 'like', "%$str%")
            ->get();


        session()->flash('message', 'Search results of ' . $str);
        return view('admin/warehouse/property_list', ['data' => $data]);
    }
}
