<?php
 
 namespace App\Http\Controllers\Admin;
 use App\Http\Controllers\Controller;

use App\Models\Admin\plot;
use App\Models\Admin\total_property;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin\prop_image;
use Illuminate\Support\Facades\Storage;

class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = plot::all();
        return view('admin/plot/property_list', ['data' => $data]);
    }
    public function manage(Request $req, $id = '')
    {
        if ($id > 0) {
            $arr = plot::where('id', $id)->get();
            $result['building_name'] = $arr['0']->building_name;
            $result['builder_name'] = $arr['0']->builder_name;
            $result['owner_name'] = $arr['0']->owner_name;
            $result['contact_number'] = $arr['0']->contact_number;
            $result['address'] = $arr['0']->address;
            $result['city_name'] = $arr['0']->city_name;
            $result['slug'] = $arr['0']->slug;
            $result['total_floor'] = $arr['0']->total_floor;
            $result['no_of_open_sides'] = $arr['0']->no_of_open_sides;
            $result['width_fac_road'] = $arr['0']->width_fac_road;
            $result['construction_done'] = $arr['0']->construction_done;
            $result['boundary_made'] = $arr['0']->boundary_made;
            $result['gated_colony'] = $arr['0']->gated_colony;
            $result['no_of_room'] = $arr['0']->no_of_room;
            $result['plot_area'] = $arr['0']->plot_area;
            $result['plot_length'] = $arr['0']->plot_length;
            $result['plot_breadth'] = $arr['0']->plot_breadth;
            $result['state_handover'] = $arr['0']->state_handover;
            $result['rent_p_month'] = $arr['0']->rent_p_month;
            $result['cam'] = $arr['0']->cam;
            $result['car_parking'] = $arr['0']->car_parking;
            $result['sec_deposit'] = $arr['0']->sec_deposit;
            $result['escalation'] = $arr['0']->escalation;
            $result['locking'] = $arr['0']->locking;
            $result['cc'] = $arr['0']->cc;
            $result['fire_noc'] = $arr['0']->fire_noc;
            $result['floor_height'] = $arr['0']->floor_height;
            $result['no_lift'] = $arr['0']->no_lift;
            $result['no_toilet'] = $arr['0']->no_toilet;
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
            $result['no_of_open_sides'] = '';
            $result['width_fac_road'] = '';
            $result['construction_done'] = '';
            $result['boundary_made'] = '';
            $result['gated_colony'] = '';
            $result['no_of_room'] = '';
            $result['plot_area'] = '';
            $result['plot_length'] = '';
            $result['plot_breadth'] = '';
            $result['state_handover'] = '';
            $result['rent_p_month'] = '';
            $result['cam'] = '';
            $result['car_parking'] = '';
            $result['sec_deposit'] = '';
            $result['escalation'] = '';
            $result['locking'] = '';
            $result['cc'] = '';
            $result['fire_noc'] = '';
            $result['floor_height'] = '';
            $result['no_lift'] = '';
            $result['no_toilet'] = '';
            $result['id'] = 0;
            $result['status'] = '';
        }
        return view('admin/plot/add_property', $result);
    }
    public function manage_plot(Request $req)
    {
        $req->validate([
            'slug' => 'required|unique:commercials,slug,' . $req->post('id'),
        ]);


        if ($req->id > 0) {
            $data = plot::find($req->id);
            $msg = "Property Updated";
        } else {
            $data = new plot;
            $msg = "Property Added ";
        }
        if ($req->hasfile('banner_pic')) {
            if ($req->post('id') > 0) {
                $arrImage = DB::table('plots')->where(['id' => $req->post('id')])->get();
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


        $data->category_id = 4;
        $data->building_name = $req->building_name;
        $data->builder_name = $req->builder_name;
        $data->owner_name = $req->owner_name;
        $data->contact_number = $req->contact_number;
        $data->address = $req->address;
        $data->city_name = $req->city_name;
        $data->slug = str_replace(' ', '', $req->slug);
        $data->total_floor = $req->total_floor;
        $data->no_of_open_sides = $req->no_of_open_sides;
        $data->width_fac_road = $req->width_fac_road;
        $data->construction_done = $req->construction_done;
        $data->boundary_made = $req->boundary_made;
        $data->gated_colony = $req->gated_colony;
        $data->no_of_room = $req->no_of_room;
        $data->plot_area = $req->plot_area;
        $data->plot_length = $req->plot_length;
        $data->plot_breadth = $req->plot_breadth;
        $data->state_handover = $req->state_handover;
        $data->rent_p_month = $req->rent_p_month;
        $data->cam = $req->cam;
        $data->car_parking = $req->car_parking;
        $data->sec_deposit = $req->sec_deposit;
        $data->escalation = $req->escalation;
        $data->locking = $req->locking;
        $data->cc = $req->cc;
        $data->fire_noc = $req->fire_noc;
        $data->floor_height = $req->floor_height;
        $data->no_lift = $req->no_lift;
        $data->no_toilet = $req->no_toilet;
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
            $property->category_id =4;
            $property->property_id = $pid;
            $property->save();
        }
        

        if ($req->hasFile("building_photos")) {
            foreach ($req->building_photos as $key => $val) {
                if ($req->hasFile("building_photos.$key")) {
                    $productImageArr['property_id'] = $pid;
                    $productImageArr['category_id'] = 4;
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
        return redirect('admin/plot');
    }
    public function status(Request $req, $status, $id)
    {
        $data = plot::find($id);
        $data->status = $status;
        $data->save();
        $req->session()->flash('message', 'Property status changed');
        return redirect('admin/plot');
    }
    public function delete($id)
    {
        $data = plot::find($id);
        $data->delete();
        $arrImage = DB::table('prop_images')->where('property_id', $id)->get();
        foreach ($arrImage as $arrImage) {
            if (Storage::exists('/public/media/' . $arrImage->images)) {
                Storage::delete('/public/media/' . $arrImage->images);
            }
        }
        prop_image::where('property_id', $id)->delete();
        session()->flash('message', 'Property deleted Successfully');
        return redirect('admin/plot');
    }
    public function detail($id)
    {
        $data = plot::find($id);
        $data2 = prop_image::where('property_id', $id)->get();
        return view('admin/plot/detail', ['data' => $data, 'data2' => $data2]);
    }
    public function search($str)
    {
        $data = DB::table('plots')
            ->where('building_name', 'like', "%$str%")
            ->orwhere('builder_name', 'like', "%$str%")
            ->orwhere('owner_name', 'like', "%$str%")
            ->orwhere('address', 'like', "%$str%")
            ->get();


        session()->flash('message', 'Search results of ' . $str);
        return view('admin/plot/property_list', ['data' => $data]);
    }
}
