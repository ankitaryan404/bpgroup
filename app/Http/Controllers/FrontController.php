<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\retail;
use App\Models\Admin\officespace;
use App\Models\Admin\plot;
use App\Models\Admin\residential;
use App\Models\Admin\warehouse;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $data['retail'] = retail::where('status',1)->get();
        $data['residential'] = residential::where('status',1)->get();
        $data['officespace'] = officespace::where('status',1)->get();
        $data['plot'] = plot::where('status',1)->get();
        $data['warehouse'] = warehouse::where('status',1)->get();
        return view('index', $data);
    }
    public function list(Request $req,$str)
    {
        $sort="";
        if($req->get('sort')!==null){
            $sort=$req->get('sort');
        } 
        $data['sort']=$sort;
        if ($str == "commercial") {
            $query= DB::table('officespaces');
        } else if ($str == "officespace" || $str == "plot" || $str == "retail" || $str == "residential" || $str == "warehouse") {
            $query= DB::table($str . 's');
        } else {
            return redirect('404');
        }
         $query=$query->where('status',1);

        if($sort=='price_low_to_high'){
            $query=$query->orderBy('rent_p_month','asc');
        }
        if($sort=='price_high_to_low'){
            $query=$query->orderBy('rent_p_month','desc');
        }
        if($sort=='most_recent'){
            $query=$query->orderBy('id','desc');
        }
        $query=$query->get();
        $data['property']=$query;

        foreach ($data['property'] as $list) {
            $data['property_photos'][$list->id] =
                DB::table('prop_images')
                ->where('property_id', '=', $list->id)
                ->where('category_id', '=', $list->category_id)
                ->get();
        }
        return view('proplist', $data);
    }
    public function detail($cat, $slug)
    {
        if ($cat == "commercial") {
            $data['detail'] = DB::table('officespaces')->where('slug', $slug)->where('status', 1)->first();
        } else {
            $data['detail'] = DB::table($cat . 's')->where('slug', $slug)->where('status', 1)->first();
        }
        // echo "<pre>";
        // print_r($data);
        // die();
        $data['prop_id']=DB::table('total_properties')
                        ->where('category_id',$data['detail']->category_id) 
                        ->where('property_id',$data['detail']->id)
                        ->select('id')
                        ->first();

        return view('propdetail', $data);
    }
}
