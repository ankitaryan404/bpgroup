<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\staff;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin\total_property;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['staff'] = staff::all();
    
        return view('admin/marketing_staff/staff_list',$data);
    }
    public function manage($id = '')
    {
        if ($id > 0) {
            $arr = staff::where('id', $id)->get();
            $result['name'] = $arr['0']->name;
            $result['slug'] = $arr['0']->slug;
            $result['contact_no'] = $arr['0']->contact_no;
            $result['address'] = $arr['0']->address;
            $result['email'] = $arr['0']->email;
            $result['password'] = $arr['0']->password;
            $result['id'] = $arr['0']->id;
            $result['status'] = $arr['0']->status;
        } else {
            $result['name'] ='';
            $result['slug'] ='';
            $result['contact_no'] ='';
            $result['address'] ='';
            $result['email'] ='';
            $result['password'] ='';
            $result['id'] =0;
            $result['status'] ='';
        }
        return view('admin/marketing_staff/add_staff', $result);
    }
    public function manage_staff(Request $req)
    {   
        $req->validate([
            'slug'=>'required|unique:staff,slug,'.$req->post('id'), 
        ]);

        if ($req->id > 0) {
            $data = staff::find($req->id);
            $msg = "Marketing staff details Updated";
        } else {
            $data = new staff;
            $msg = "New Marketing staff added ";
        }
        if ($req->hasfile('images')) {
            if ($req->post('id') > 0) {
                $arrImage = DB::table('staff')->where(['id' => $req->post('id')])->get();
                if (Storage::exists('/public/media/' . $arrImage[0]->images)) {
                    Storage::delete('/public/media/' . $arrImage[0]->images);
                }
            }
            $image = $req->file('images');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $data->images = $image_name;
        }


        $data->name= $req->name;
            $data->slug =str_replace(' ','',$req->slug);
            $data->contact_no = $req->contact_no;
            $data->address = $req->address;
            $data->email = $req->email;
            $data->password =Hash::make($req->password);
        $data->status = 1;
        $data->save();



        $req->session()->flash('message', $msg);
        return redirect('admin/marketing-staff');
    }
    public function status(Request $req, $status, $id)
    {
        $data = staff::find($id);
        $data->status = $status;
        $data->save();
        $req->session()->flash('message', 'Property status changed');
        return redirect('admin/marketing-staff');
    }
    public function delete($id)
    {
        $data = staff::find($id);
        $data->delete();
        session()->flash('message', 'Marketing staff deleted Successfully');
        return redirect('admin/marketing-staff');
    }
    public function detail($id)
    {
        $data['detail'] = staff::find($id);
        $data['sum']=total_property::where('staff_id',$id)->count();
        $data['retail']=DB::table('retails')->where('added_by',$id)->get();
        $data['residential']=DB::table('residentials')->where('added_by',$id)->get();
        $data['officespace']=DB::table('officespaces')->where('added_by',$id)->get();
        $data['plot']=DB::table('plots')->where('added_by',$id)->get();
        $data['warehouse']=DB::table('warehouses')->where('added_by',$id)->get();
        return view('admin/marketing_staff/staff_profile',$data);
    }
}
