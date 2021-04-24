@extends('admin.master.layout')
@section('title','Manage Retail')
@section('retail','active')
@section('section')
@if($id>0)
   @php
      $image_required="";
   @endphp
   @else
   @php
      $image_required="required";
   @endphp
@endif
<div class="container-fluid  dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Add Property </h2>
      
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                            <li class="breadcrumb-item"><a href="{{url('admin/retail')}}" class="breadcrumb-link">Retail</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Property</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- valifation types -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Fill Property Details</h5>
                    <div class="card-body">
                        <form enctype="multipart/form-data" method="POST" action="{{url('admin/retail/manage-retail')}}">
                            @csrf
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Banner Pic</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="file"  class="form-control" name="banner_pic" {{$image_required}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Building Name</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required  class="form-control" name="building_name" value="{{$building_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Builder Name</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required class="form-control" name="builder_name" value="{{$builder_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Owner Name</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required class="form-control" name="owner_name" value="{{$owner_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Contact Number</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="tel" maxlength="10" minlength="10"  class="form-control" name="contact_number" value="{{$contact_number}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Address</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea required class="form-control" name="address">{{$address}}</textarea>
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
                                    <input type="text" required class="form-control" name="slug" value="{{$slug}}">
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
                                    <input type="number"  class="form-control" name="total_floor" value="{{$total_floor}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Floors offer</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number"  class="form-control" name="floor_offer" value="{{$floor_offer}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Approx. Super Built Up Area</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input  type="text" class="form-control" name="sup_b_area" value="{{$sup_b_area}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Carpet Area</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="carpet_area" value="{{$carpet_area}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Time frame for ava­ilability</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="time_ava" value="{{$time_ava}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">State of Handover</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="form-control" name="state_handover">
                                        @if($state_handover=='1')
                                        <option value="1" selected>Furnished</option>
                                        <option value="0">UnFursnished</option>
                                     @elseif($state_handover=='0')
                                     <option value="0" selected>UnFurnished</option>
                                     <option value="1">Furnished</option>
                                     @else
                                     <option value="">Select Furnished/UnFurnished</option>
                                     <option value="1">Furnished</option>
                                     <option value="0">UnFurnished</option>
                                     @endif
 
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Quoted Rent in Rs. sqft/month</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" placeholder="Rs../- per sqft per month" name="rent_p_month" value="{{$rent_p_month}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right"> CAM</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" placeholder="Rs../- per sqft per month" name="cam" value="{{$cam}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Car Parking</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <select class="form-control" name="car_parking">
                                       @if($car_parking=='1')
                                       <option value="1" selected>Yes</option>
                                       <option value="0">No</option>
                                    @elseif($car_parking=='0')
                                    <option value="0" selected>No</option>
                                    <option value="1">Yes</option>
                                    @else
                                    <option value="">Parking including in rent</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    @endif

                                       
                                   </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Completion & Occupancy Certificate</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <select class="form-control" name="comp_occ_cert">
                                       @if($comp_occ_cert=='1')
                                       <option value="1" selected>Available</option>
                                       <option value="0">Not Available</option>
                                    @elseif($comp_occ_cert=='0')
                                    <option value="0" selected>Not Available</option>
                                    <option value="1">Available</option>
                                    @else
                                    <option value="">Select Ava­ilability</option>
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                    @endif

                                       
                                   </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Power back up</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="power_back" value="{{$power_back}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Lease Term</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="lease_term" value="{{$lease_term}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Security deposit</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="sec_deposit" value="{{$sec_deposit}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Power Load</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="power_load" value="{{$power_load}}">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Escalation</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="escalation" value="{{$escalation}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Locking</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="locking" value="{{$locking}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">CC/OC</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="cc" value="{{$cc}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Fire NOC</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="fire_noc" value="{{$fire_noc}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Floor Height</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="floor_height" value="{{$floor_height}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Flooring</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="flooring" value="{{$flooring}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Notice Period</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="notice_period" value="{{$notice_period}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Rent Free Period</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="rent_free_period" value="{{$rent_free_period}}">
                                </div>
                            </div>
                           
                           
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Stamp Duty</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="stamp_duty" value="{{$stamp_duty}}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Builidng Photos</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="file"  class="form-control" multiple name="building_photos[]">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$id}}"/>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end valifation types -->
            <!-- ============================================================== -->
        </div>

</div>
@endsection