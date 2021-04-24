@extends('admin.master.layout')
@section('title','warehouse Property Details')
@section('warehouse','active')
@section('section')
<div class="dashboard-influence">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h3 class="mb-2">{{$data->building_name}} </h3>
                   
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/warehouse')}}" class="breadcrumb-link">warehouse</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$data->building_name}} </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card influencer-profile-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="text-center">
                                    <img src="{{ asset('storage/media/'.$data->banner_pic) }}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                    <div class="user-avatar-info">
                                        <div class="m-b-20">
                                            <div class="user-avatar-name">
                                                <h2 class="mb-1">{{$data->building_name}}</h2>
                                            </div>
                                            <div class="rating-star  d-inline-block">
                                                
                                                <p class="d-inline-block text-dark"> {{$data->owner_name}} &nbsp;&nbsp;&nbsp; </p>
                                            </div>
                                        </div>
                                       
                                        <div class="user-avatar-address">
                                            <p class="border-bottom pb-3">
                                                <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i>{{$data->address}}</span>
                                                <span class="mb-2 ml-xl-5 d-xl-inline-block d-block">Property added date : {{date("d-m-Y", strtotime($data->created_at))}} </span>
                                               
                                            </p>
                                            <div class="mt-3">
                                                <a href="#" class="badge badge-light mr-2">Contact Number : {{$data->contact_number}}</a> <a href="#" class="badge badge-light">Builder name : {{$data->builder_name}}</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top user-social-box">
                            <div class="user-social-media d-xl-inline-block"><span class="mr-2 twitter-color">Total Floor : </span><span>{{$data->total_floor}}</span></div>
                            <div class="user-social-media d-xl-inline-block"><span class="mr-2  pinterest-color">Floor Offer : </span><span>{{$data->floor_offer}}</span></div>
                            <div class="user-social-media d-xl-inline-block"><span class="mr-2 instagram-color">Approximate super built up Area :</span><span>{{$data->sup_b_area}}</span></div>
                            <div class="user-social-media d-xl-inline-block"><span class="mr-2  facebook-color"> Carpet Area : </span><span>{{$data->carpet_area}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <div class="row">
                <!-- ============================================================== -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">CAM    </h5>
                                <h2 class="mb-0">&#8377;{{$data->cam}}</h2>
                            </div>
                            <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Time frame for ava­ilability</h5>
                                <h2 class="mb-0">{{$data->time_ava}}</h2>
                            </div>
                            <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                <i class="fa fa-clock fa-fw fa-sm text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Quoted Rent in Rs. sqft/month</h5>
                                <h2 class="mb-0">&#8377;{{$data->rent_p_month}}</h2>
                            </div>
                            <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end total earned   -->
                <!-- ============================================================== -->
            </div>
         
           
            <div class="row">
                <!-- ============================================================== -->
                <!-- campaign activities   -->
                <!-- ============================================================== -->
                <div class="col-lg-12">
                    
                    <div class="card">
                        <div class="campaign-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0">Vehicle Parking</th>
                                        <th class="border-0">Structure</th>
                                       
                                        <th class="border-0">Power back up</th>
                                        <th class="border-0">Security deposit</th>
                                        <th class="border-0">Status</th>
                                        <th class="border-0">Added Date</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>@if($data->vehicle_parking=='0') 
                                            No
                                        @else Yes
                                    @endif </td>
                                        <td>
                                        {{$data->structure}}
                                        </td>
                                     
                                        <td>
                                            {{$data->power_back}}
                                        </td>
                                        <td>{{$data->sec_deposit}}</td>
                                        <td>@if($data->status=='0') 
                                            Deactive
                                        @else Active
                                    @endif</td>
                                        <td>{{date("d-m-Y", strtotime($data->created_at))}} </td>
                                     
                                    </tr>

                                </tbody>
                            </table>
                            <br>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->

            <div class="row">
              
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Security deposit </h5>
                                <h2 class="mb-0">&#8377;{{$data->sec_deposit}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Floor Height</h5>
                                <h2 class="mb-0">{{$data->floor_height}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Number of lift</h5>
                                <h2 class="mb-0">{{$data->no_lift}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            
            
           
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Number of Washroom</h5>
                                <h2 class="mb-0">{{$data->no_toilet}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
       
            <div class="row">
                <!-- ============================================================== -->
                <div class="col-lg-12">
                    
                    <div class="card">
                        <div class="campaign-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0">Power born by Lessee only</th>
                                        <th class="border-0">Escalation
                                        </th>
                                       
                                        <th class="border-0">Power back up</th>
                                        <th class="border-0">Locking</th>
                                        <th class="border-0">CC/OC</th>
                                        <th class="border-0">Fire NOC</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$data->pow_by_lessee}}</td>
                                        <td>
                                        {{$data->escalation}}</td>
                                     
                                        <td>
                                            {{$data->power_back}}
                                        </td>
                                        <td>{{$data->locking}}</td>
                                        <td>{{$data->cc}}</td>
                                        <td>{{$data->fire_noc}} </td>
                                     
                                    </tr>

                                </tbody>
                            </table>
                            <br>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <div class="row">
                {{-- Start  --}}
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="section-block">
                        <h5 class="section-title">Building Photos</h5>
                    </div>
                    <div class="accrodion-regular">
                        <div id="accordion3">
                            @foreach($data2 as $data2)
                            <div class="card mb-2">
                                <div class="card-header" id="headingNine">
                                   
                                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{$data2->id}}" aria-expanded="false" aria-controls="collapseNine">
                          <span class="fas fa-angle-down mr-3"></span>Click to view photo
                    </button>
                                               </h5>
                                </div>
                                <div id="{{$data2->id}}" class="collapse" aria-labelledby="headingNine" data-parent="#accordion3">
                                    <div class="card-body">
                                        <img src="{{ asset('storage/media/'.$data2->images) }}" alt="User Avatar" class="d-block w-100">
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- END --}}
              
         </div>
</div>
</div>

 @endsection