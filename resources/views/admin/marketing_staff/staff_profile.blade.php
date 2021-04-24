@extends('admin.master.layout')
@section('title',' Marketing Staff Details')
@section('marketing_staff','active')
@section('section')
<div class="dashboard-influence">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h3 class="mb-2">{{$detail->name}} </h3>
                   
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/marketing-staff')}}" class="breadcrumb-link">Marketing Staff</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$detail->name}} </li>
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
                                    <img src="{{ asset('storage/media/'.$detail->images) }}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                    <div class="user-avatar-info">
                                        <div class="m-b-20">
                                            <div class="user-avatar-name">
                                                <h2 class="mb-1">{{$detail->name}}</h2>
                                            </div>
                                            <div class="rating-star  d-inline-block">
                                                <p class="d-inline-block text-dark">Total Property Added : {{$sum}}  </p>   
                                            </div>
                                        </div>
                                       
                                        <div class="user-avatar-address">
                                            <p class="border-bottom pb-3">
                                                <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i>{{$detail->address}}</span>
                                                <span class="mb-2 ml-xl-5 d-xl-inline-block d-block">Email Id : {{$detail['email']}} </span>
                                               
                                            </p>
                                            <div class="mt-3">
                                                <a href="#" class="badge badge-light mr-2">Contact Number : {{$detail['contact_no']}}</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <div class="row">
                <!-- ============================================================== -->
                @if(count($residential)>0)
                 <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Residential </h5>
                                <h2 class="mb-0">{{count($residential)}}</h2>
                            </div>
                        </div>
                    </div>
                </div> 
                @endif
                <!-- ============================================================== -->
                @if(count($retail)>0)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-body">
                           <div class="d-inline-block">
                               <h5 class="text-muted">Retail </h5>
                               <h2 class="mb-0">{{count($retail)}}</h2>
                           </div>
                       </div>
                   </div>
               </div> 
               @endif

                @if(count($officespace)>0)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-body">
                           <div class="d-inline-block">
                               <h5 class="text-muted">Officespace </h5>
                               <h2 class="mb-0">{{count($officespace)}}</h2>
                           </div>
                       </div>
                   </div>
               </div> 
               @endif
                @if(count($plot)>0)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-body">
                           <div class="d-inline-block">
                               <h5 class="text-muted">Plots</h5>
                               <h2 class="mb-0">{{count($plot)}}</h2>
                           </div>
                       </div>
                   </div>
               </div> 
               @endif
                @if(count($warehouse)>0)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-body">
                           <div class="d-inline-block">
                               <h5 class="text-muted">Warehouse</h5>
                               <h2 class="mb-0">{{count($warehouse)}}</h2>
                           </div>
                       </div>
                   </div>
               </div> 
               @endif
              
            </div> 
         

         
            <!-- ============================================================== -->
           <div class="row">
                {{-- Start  --}}
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="section-block">
                        <h5 class="section-title">Property List</h5>
                    </div>
                    <div class="accrodion-regular">
                        <div id="accordion3">
                            {{-- Start --}}
                            @if(count($retail)>0)
                            <div class="card mb-2">
                                <div class="card-header" id="headingNine">
                                   
                                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#retail" aria-expanded="false" aria-controls="collapseNine">
                          <span class="fas fa-angle-down mr-3"></span>Click to view Retail Property
                    </button>
                                               </h5>
                                </div>
                                <div id="retail" class="collapse" aria-labelledby="headingNine" data-parent="#accordion3">
                                    <div class="card-body">
                                        <ul>
                                       @foreach($retail as $list)
                                       <div class="staff_prop_list" >
                                        <span>  {{$list->building_name}} &nbsp;&nbsp; <small>{{$list->address}}</small> </span> <a class="btn btn-info" href="{{url('admin/retail/detail/'.$list->id)}}">View Details</a>
                                          </div>
                                       @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            @endif
                            {{-- END --}}
                            {{-- Start --}}
                            @if(count($residential)>0)
                            <div class="card mb-2">
                                <div class="card-header" id="headingNine">
                                   
                                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#residential" aria-expanded="false" aria-controls="collapseNine">
                          <span class="fas fa-angle-down mr-3"></span>Click to view Residential Property
                    </button>
                                               </h5>
                                </div>
                                <div id="residential" class="collapse" aria-labelledby="headingNine" data-parent="#accordion3">
                                    <div class="card-body">
                                       
                                            @foreach($residential as $list)
                                            <div class="staff_prop_list" >
                                          <span>  {{$list->building_name}} &nbsp;&nbsp; <small>{{$list->address}}</small> </span> <a class="btn btn-info" href="{{url('admin/residential/detail/'.$list->id)}}">View Details</a>
                                            </div>
                                            @endforeach
                                           
                                    </div>

                                </div>
                            </div>
                            @endif
                            {{-- END --}}
                            {{-- Start --}}
                            @if(count($officespace)>0)
                            <div class="card mb-2">
                                <div class="card-header" id="headingNine">
                                   
                                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#officespace" aria-expanded="false" aria-controls="collapseNine">
                          <span class="fas fa-angle-down mr-3"></span>Click to view Officespace Property
                    </button>
                                               </h5>
                                </div>
                                <div id="officespace" class="collapse" aria-labelledby="headingNine" data-parent="#accordion3">
                                    <div class="card-body">
                                       
                                            @foreach($officespace as $list)
                                            <div class="staff_prop_list" >
                                          <span>  {{$list->building_name}} &nbsp;&nbsp; <small>{{$list->address}}</small> </span> <a class="btn btn-info" href="{{url('admin/officespace/detail/'.$list->id)}}">View Details</a>
                                            </div>
                                            @endforeach
                                           
                                    </div>

                                </div>
                            </div>
                            @endif
                            {{-- END --}}
                            {{-- Start --}}
                            @if(count($plot)>0)
                            <div class="card mb-2">
                                <div class="card-header" id="headingNine">
                                   
                                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#plot" aria-expanded="false" aria-controls="collapseNine">
                          <span class="fas fa-angle-down mr-3"></span>Click to view Plot Property
                    </button>
                                               </h5>
                                </div>
                                <div id="plot" class="collapse" aria-labelledby="headingNine" data-parent="#accordion3">
                                    <div class="card-body">
                                       
                                            @foreach($officespace as $list)
                                            <div class="staff_prop_list" >
                                          <span>  {{$list->building_name}} &nbsp;&nbsp; <small>{{$list->address}}</small> </span> <a class="btn btn-info" href="{{url('admin/plot/detail/'.$list->id)}}">View Details</a>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                @endif
                                {{-- END --}}
                                           
                            {{-- Start --}}
                            @if(count($warehouse)>0)
                            <div class="card mb-2">
                                <div class="card-header" id="headingNine">
                                   
                                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#warehouse" aria-expanded="false" aria-controls="collapseNine">
                          <span class="fas fa-angle-down mr-3"></span>Click to view Plot Property
                    </button>
                                               </h5>
                                </div>
                                <div id="warehouse" class="collapse" aria-labelledby="headingNine" data-parent="#accordion3">
                                    <div class="card-body">
                                       
                                            @foreach($officespace as $list)
                                            <div class="staff_prop_list" >
                                          <span>  {{$list->building_name}} &nbsp;&nbsp; <small>{{$list->address}}</small> </span> <a class="btn btn-info" href="{{url('admin/warehouse/detail/'.$list->id)}}">View Details</a>
                                            </div>
                                            @endforeach
                                           
                                    </div>

                                </div>
                            </div>
                            @endif
                            {{-- END --}}
                        </div>
                    </div>
                </div> 

                 {{-- END  --}}
              
         </div> 
</div>
</div>

 @endsection