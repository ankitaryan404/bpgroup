<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('ADMIN_LOGIN'))
        {
            return redirect('admin/dashboard');
        }
        else{
            return view('admin.login');
        }
    }
    public function admin_auth(Request $req)
    {
        $data=Admin::where('username',$req->username)->first();
        if(!$data || !Hash::check($req->password,$data->password))
        {
            $req->session()->flash('error','Please Enter valid email and password');
            return redirect ('admin');
        }
        else {
            $req->session()->put('ADMIN_LOGIN',true);
            $req->session()->put('ADMIN_ID',$data['username']);
            return redirect ('admin/dashboard');
        }
    }

}
