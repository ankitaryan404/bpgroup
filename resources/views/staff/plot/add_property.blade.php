@extends('staff.master.layout')
@section('title','Add Plot')
@section('small','Plot')
@section('plot','active')
@section('section')

                        <form enctype="multipart/form-data" method="POST" action="{{url('marketing-staff/plot/manage-plot')}}">
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
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Total Floor</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number"  class="form-control" name="total_floor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Number of open sides</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number"  class="form-control" name="no_of_open_sides">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Width of road facing the plot</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input  type="text" class="form-control" name="width_fac_road">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Any Construction done</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="form-control" name="construction_done">
                                     <option value="">Select Value</option>
                                     <option value="1">Yes</option>
                                     <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Boundary wall made</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="form-control" name="boundary_made">
                                      
                                     <option value="">Select Value</option>
                                     <option value="1">Yes</option>
                                     <option value="0">No</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Is in a gated colony</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="form-control" name="gated_colony">
                
                                     <option value="">Select Value</option>
                                     <option value="1">Yes</option>
                                     <option value="0">No</option>
 
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Number of Room</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number"  class="form-control" name="no_of_room">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Plot area</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" class="form-control" name="plot_area">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Plot Length</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" class="form-control" name="plot_length">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Plot Breadth</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" class="form-control" name="plot_breadth">
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
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Security deposit</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="sec_deposit">
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
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Number of Lift</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number"  class="form-control" name="no_lift">
                                </div>
                            </div>           
                           
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Number of Washroom</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  class="form-control" name="no_toilet">
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