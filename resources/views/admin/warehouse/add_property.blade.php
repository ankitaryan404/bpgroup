@extends('admin.master.layout')
@section('title','Manage WareHouse')
@section('warehouse','active')
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
                            <li class="breadcrumb-item"><a href="{{url('admin/warehouse')}}" class="breadcrumb-link">Warehouse</a></li>
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
                        <form enctype="multipart/form-data" method="POST" action="{{url('admin/warehouse/manage-warehouse')}}">
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
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Total Area(Sq.Ft)</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="total_area" value="{{$total_area}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Structure</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="structure" value="{{$structure}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Quoted Rent (Per sq. ft)</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="rent_p_sq_ft" value="{{$rent_p_sq_ft}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Floor Offered</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input  type="text" class="form-control" name="floor_offered" value="{{$floor_offered}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Security deposit</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="sec_deposit" value="{{$sec_deposit}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Side Height</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="side_height" value="{{$side_height}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Docks</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="docks" value="{{$docks}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Docks Level</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="dock_level" value="{{$dock_level}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Flooring</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="flooring" value="{{$flooring}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Roof</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="roof" value="{{$roof}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Washroom</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="form-control" name="washroom">
                                        @if($washroom=='1')
                                        <option value="1" selected>Yes</option>
                                        <option value="0">No</option>
                                     @elseif($washroom=='0')
                                     <option value="0" selected>No</option>
                                     <option value="1">Yes</option>
                                     @else
                                     <option value="">Select Availability</option>
                                     <option value="1">Yes</option>
                                     <option value="0">No</option>
                                     @endif
 
                                        
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Electricity Availability </label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <select class="form-control" name="electricity_availability">
                                       @if($electricity_availability=='1')
                                       <option value="1" selected>Available</option>
                                       <option value="0">Not Available</option>
                                    @elseif($electricity_availability=='0')
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
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Water Supply Availability</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <select class="form-control" name="water_supply_availability">
                                       @if($water_supply_availability=='1')
                                       <option value="1" selected>Available</option>
                                       <option value="0">Not Available</option>
                                    @elseif($water_supply_availability=='0')
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
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Security Gate Office</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <select class="form-control" name="security_gate_office">
                                       @if($security_gate_office=='1')
                                       <option value="1" selected>Available</option>
                                       <option value="0">Not Available</option>
                                    @elseif($security_gate_office=='0')
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
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Notice Period</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="notice_period" value="{{$notice_period}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Vehicle Parking</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <select class="form-control" name="vehicle_parking">
                                       @if($vehicle_parking=='1')
                                       <option value="1" selected>Yes</option>
                                       <option value="0">No</option>
                                    @elseif($vehicle_parking=='0')
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
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Escalation</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="escalation" value="{{$escalation}}">
                                </div>
                            </div>
                         
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Possession</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="possession" value="{{$possession}}">
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