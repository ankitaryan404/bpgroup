@extends('staff.master.layout')
@section('title','Manage Retail')
@section('small','Retail')
@section('retail','active')
@section('section')


<form enctype="multipart/form-data" method="POST" action="{{url('marketing-staff/retail/manage-retail')}}">
    @csrf
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Banner Pic</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="file"  class="form-control" name="banner_pic" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Building Name</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text" required  class="form-control" name="building_name">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Builder Name</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text" required class="form-control" name="builder_name">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Owner Name</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text" required class="form-control" name="owner_name">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Contact Number</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="tel" maxlength="10" minlength="10"  class="form-control" name="contact_number">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Address</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <textarea required class="form-control" name="address"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">City Name</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text" required class="form-control" name="city_name" value="{{$city_name}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Slug</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text" required class="form-control" name="slug" >
            @error('slug')
            <div class="alert alert-danger" role="alert">
                {{$message}}		
            </div>
            @enderror
        </div>
       
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Total Floor</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="number"  class="form-control" name="total_floor">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Floors offer</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="number"  class="form-control" name="floor_offer">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Approx. Super Built Up Area</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input  type="text" class="form-control" name="sup_b_area">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Carpet Area</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="carpet_area">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Time frame for ava­ilability</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="time_ava">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">State of Handover</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <select class="form-control" name="state_handover">
               
             <option value="">Select Furnished/UnFurnished</option>
             <option value="1">Furnished</option>
             <option value="0">UnFurnished</option>

                
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Quoted Rent in Rs. sqft/month</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" placeholder="Rs../- per sqft per month" name="rent_p_month">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right"> CAM</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" placeholder="Rs../- per sqft per month" name="cam">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Car Parking</label>
        <div class="col-12 col-sm-8 col-lg-6">
           <select class="form-control" name="car_parking">
             
            <option value="">Parking including in rent</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
               
           </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Completion & Occupancy Certificate</label>
        <div class="col-12 col-sm-8 col-lg-6">
           <select class="form-control" name="comp_occ_cert">
             
            <option value="">Select Ava­ilability</option>
            <option value="1">Available</option>
            <option value="0">Not Available</option>
               
           </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Power back up</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="power_back">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Lease Term</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="lease_term">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Security deposit</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="sec_deposit">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Power Load</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="power_load">
        </div>
    </div>
   
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Escalation</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="escalation">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Locking</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="locking">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">CC/OC</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="cc">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Fire NOC</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="fire_noc">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Floor Height</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="floor_height">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Flooring</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="flooring">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Notice Period</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="notice_period">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Rent Free Period</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="rent_free_period">
        </div>
    </div>
   
   
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Stamp Duty</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="text"  class="form-control" name="stamp_duty">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">Builidng Photos</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input type="file"  class="form-control" multiple name="building_photos[]">
        </div>
    </div>
    <div class="form-group row text-right">
        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
            <button type="submit" class="btn btn-space btn-primary">Submit</button>
            <button class="btn btn-space btn-secondary">Cancel</button>
        </div>
    </div>
</form>
                   
@endsection