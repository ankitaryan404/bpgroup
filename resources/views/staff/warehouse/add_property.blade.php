@extends('staff.master.layout')
@section('title','Add Warehouse')
@section('small','warehouse')
@section('warehouse','active')
@section('section')

                        <form enctype="multipart/form-data" method="POST" action="{{url('marketing-staff/warehouse/manage-warehouse')}}">
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
                                    <input type="text" required class="form-control" name="slug">
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
                                    <input type="text"  class="form-control" name="total_area">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Structure</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="structure">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Quoted Rent (Per sq. ft)</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="rent_p_sq_ft">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Floor Offered</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input  type="text" class="form-control" name="floor_offered">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Security deposit</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="sec_deposit">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Side Height</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="side_height">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Docks</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="docks">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Docks Level</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="dock_level">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Flooring</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="flooring">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Roof</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="roof">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Washroom</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="form-control" name="washroom">
                                     <option value="">Select Availability</option>
                                     <option value="1">Yes</option>
                                     <option value="0">No</option>
                                        
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Electricity Availability </label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <select class="form-control" name="electricity_availability">
                                    <option value="">Select Ava­ilability</option>
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                       
                                   </select>
                                </div>
                            </div>
                              <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Water Supply Availability</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <select class="form-control" name="water_supply_availability">
                                      
                                    <option value="">Select Ava­ilability</option>
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                       
                                   </select>
                                </div>
                            </div>

                              <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Security Gate Office</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <select class="form-control" name="security_gate_office">
                                      
                                    <option value="">Select Ava­ilability</option>
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                       
                                   </select>
                                </div>
                            </div>
                          
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Notice Period</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="notice_period">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Vehicle Parking</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                   <select class="form-control" name="vehicle_parking">
                                     
                                    <option value="">Parking including in rent</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                        
                                       
                                   </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Escalation</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="escalation">
                                </div>
                            </div>
                         
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Possession</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="possession">
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