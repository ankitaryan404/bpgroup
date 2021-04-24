<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;

use App\Models\Admin\retail;
use App\Models\Admin\warehouse;
use App\Models\Admin\residential;
use App\Models\Admin\officespace;
use App\Models\Admin\plot;
use App\Models\Admin\total_property;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class StaffPropertyController extends Controller
{
    public function retail()
    {
        return view('staff/retail/add_property');
    }
    public function warehouse()
    {
        return view('staff/warehouse/add_property');
    }
    public function residential()
    {
        return view('staff/residential/add_property');
    }
    public function officespace()
    {
        return view('staff/officespace/add_property');
    }
    public function plot()
    {
        return view('staff/plot/add_property');
    }

    public function manage_retail(Request $req)
    {
        $req->validate([
            'slug' => 'required|unique:retails,slug',
        ]);


        $data = new retail;
        $staff_msg= "Property Added ";

        if ($req->hasfile('banner_pic')) {
            $image = $req->file('banner_pic');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $data->banner_pic = $image_name;
        }


        $data->category_id = 1;
        $data->building_name = $req->building_name;
        $data->builder_name = $req->builder_name;
        $data->owner_name = $req->owner_name;
        $data->contact_number = $req->contact_number;
        $data->address = $req->address;
        $data->city_name = $req->city_name;
        $data->slug = $req->slug;
        $data->total_floor = $req->total_floor;
        $data->floor_offer = $req->floor_offer;
        $data->sup_b_area = $req->sup_b_area;
        $data->carpet_area = $req->carpet_area;
        $data->time_ava = $req->time_ava;
        $data->state_handover = $req->state_handover;
        $data->rent_p_month = $req->rent_p_month;
        $data->cam = $req->cam;
        $data->lease_term = $req->lease_term;
        $data->car_parking = $req->car_parking;
        $data->power_back = $req->power_back;
        $data->power_load = $req->power_load;
        $data->sec_deposit = $req->sec_deposit;
        $data->flooring = $req->flooring;
        $data->escalation = $req->escalation;
        $data->locking = $req->locking;
        $data->cc = $req->cc;
        $data->fire_noc = $req->fire_noc;
        $data->floor_height = $req->floor_height;
        $data->comp_occ_cert = $req->comp_occ_cert;
        $data->power_back = $req->power_back;
        $data->stamp_duty = $req->stamp_duty;
        $data->rent_free_period = $req->rent_free_period;
        $data->added_by = $req->session()->get('STAFF_ID');
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

        $property = new total_property;
        $property->category_id = 1;
        $property->property_id = $pid;
        $property->staff_id=$req->session()->get('STAFF_ID');
        $property->save();



        if ($req->hasFile("building_photos")) {
            foreach ($req->building_photos as $key => $val) {
                if ($req->hasFile("building_photos.$key")) {
                    $productImageArr['property_id'] = $pid;
                    $productImageArr['category_id'] = 1;
                    $rand = time() . rand('111111111', '999999999');
                    $images = $req->file("building_photos.$key");
                    $ext = $images->extension();
                    $image_name = $rand . '.' . $ext;
                    $req->file("building_photos.$key")->storeAs('/public/media', $image_name);
                    $productImageArr['images'] = $image_name;

                    DB::table('prop_images')->insert($productImageArr);
                }
            }
        }

        $req->session()->flash('staff_message', $staff_msg);
        return redirect('marketing-staff/retail/add');
    }

    public function manage_residential(Request $req)
    {
        $req->validate([
            'slug' => 'required|unique:residentials,slug',
        ]);

        $data = new residential;
        $staff_msg = "Property Added ";

        if ($req->hasfile('banner_pic')) {
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
        $data->added_by = $req->session()->get('STAFF_ID');
        $data->tenants = $req->tenants;
        $data->status = 1;

        $data->added_by = $req->session()->get('STAFF_ID');
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


        $property = new total_property;
        $property->staff_id =  $req->session()->get('STAFF_ID');
        $property->category_id = 2;
        $property->property_id = $pid;
        $property->save();



        if ($req->hasFile("building_photos")) {
            foreach ($req->building_photos as $key => $val) {
                if ($req->hasFile("building_photos.$key")) {
                    $productImageArr['property_id'] = $pid;
                    $productImageArr['category_id'] = 1;
                    $rand = time() . rand('111111111', '999999999');
                    $images = $req->file("building_photos.$key");
                    $ext = $images->extension();
                    $image_name = $rand . '.' . $ext;
                    $req->file("building_photos.$key")->storeAs('/public/media', $image_name);
                    $productImageArr['images'] = $image_name;

                    DB::table('prop_images')->insert($productImageArr);
                }
            }
        }

        $req->session()->flash('staff_message', $staff_msg);
        return redirect('marketing-staff/residential/add');
    }

    public function manage_officespace(Request $req)
    {
        $req->validate([
            'slug' => 'required|unique:officespaces,slug,' . $req->post('id'),
        ]);


        $data = new officespace;
        $staff_msg = "Property Added ";

        if ($req->hasfile('banner_pic')) {
            $image = $req->file('banner_pic');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $data->banner_pic = $image_name;
        }


        $data->category_id = 3;
        $data->building_name = $req->building_name;
        $data->builder_name = $req->builder_name;
        $data->owner_name = $req->owner_name;
        $data->contact_number = $req->contact_number;
        $data->address = $req->address;
        $data->city_name = $req->city_name;
        $data->slug = str_replace(' ', '', $req->slug);
        $data->total_floor = $req->total_floor;

        $data->floor_offer = $req->floor_offer;
        $data->sup_b_area = $req->sup_b_area;
        $data->ideal_for_business = $req->ideal_for_business;
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
        $data->personal_washroom = $req->personal_washroom;
        $data->floor_plan = $req->floor_plan;
        $data->added_by = $req->session()->get('STAFF_ID');
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


        $property = new total_property;
        $property->staff_id =  $req->session()->get('STAFF_ID');
        $property->category_id = 3;
        $property->property_id = $pid;
        $property->save();



        if ($req->hasFile("building_photos")) {
            foreach ($req->building_photos as $key => $val) {
                if ($req->hasFile("building_photos.$key")) {
                    $productImageArr['property_id'] = $pid;
                    $productImageArr['category_id'] = 3;
                    $rand = time() . rand('111111111', '999999999');
                    $images = $req->file("building_photos.$key");
                    $ext = $images->extension();
                    $image_name = $rand . '.' . $ext;
                    $req->file("building_photos.$key")->storeAs('/public/media', $image_name);
                    $productImageArr['images'] = $image_name;


                    DB::table('prop_images')->insert($productImageArr);
                }
            }
        }

        $req->session()->flash('staff_message', $staff_msg);
        return redirect('marketing-staff/officespace/add');
    }

    public function manage_plot(Request $req)
    {
        $req->validate([
            'slug' => 'required|unique:plots,slug,' . $req->post('id'),
        ]);

        $data = new plot;
        $staff_msg = "Property Added ";
        if ($req->hasfile('banner_pic')) {
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
        $data->added_by = $req->session()->get('STAFF_ID');
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

        $property = new total_property;
        $property->staff_id =  $req->session()->get('STAFF_ID');
        $property->category_id = 4;
        $property->property_id = $pid;
        $property->save();



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

                    DB::table('prop_images')->insert($productImageArr);
                }
            }
        }

        $req->session()->flash('staff_message', $staff_msg);
        return redirect('marketing-staff/plot/add');
    }

    public function manage_warehouse(Request $req)
    {
        $req->validate([
            'slug' => 'required|unique:warehouses,slug'
        ]);


        $data = new warehouse;
        $staff_msg = "Property Added ";

        if ($req->hasfile('banner_pic')) {
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
        $data->added_by = $req->session()->get('STAFF_ID');
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


        $property = new total_property;
        $property->category_id = 5;
        $property->property_id = $pid;
        $property->staff_id = $req->session()->get('STAFF_ID');
        $property->save();



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

                    DB::table('prop_images')->insert($productImageArr);
                }
            }
        }

        $req->session()->flash('staff_message', $staff_msg);
        return redirect('marketing-staff/warehouse/add');
    }
}
