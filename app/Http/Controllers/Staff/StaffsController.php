<?php

namespace App\Http\Controllers\Staff;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Admin\staff;
use Illuminate\Support\Facades\Hash;

class StaffsController extends Controller
{
    public function index()
    {
        if(session()->has('STAFF_LOGIN'))
        {
            return redirect ('marketing-staff/retail/add');
           
        }
        else{
            return view('staff.login');
        }
    }
    public function staff_auth(Request $req)
    {
        $data=staff::where('email',$req->username)->first();
        if(!$data || !Hash::check($req->password,$data->password))
        {
            $req->session()->flash('error','Please Enter valid email and password');
            return redirect ('marketing-staff');
        }
        else {
            $req->session()->put('STAFF_LOGIN',true);
            $req->session()->put('STAFF_ID',$data->id);
            return redirect ('marketing-staff/retail/add');
        }
    }
}
