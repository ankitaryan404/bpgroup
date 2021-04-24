@extends('admin.master.layout')
@section('title','Warehouse Property List')
@section('warehouse','active')
@section('section')
<div class="influence-finder">

<div class="container-fluid dashboard-content">
    @if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        {{session('message')}}  
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> 
    @endif
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h3 class="mb-2">warehouse Property List</h3>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">warehouse</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Property List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- ============================================================== -->
        <!-- search bar  -->
        <!-- ============================================================== -->
        <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
      
            <div class="card">
                <div class="card-body">
                    <form>
                        <input class="form-control form-control-lg" type="search" placeholder="Search" aria-label="Search" id="search_str" required>
                        <button class="btn btn-primary search-btn" type="button" onclick="funsearch('warehouse')">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end search bar  -->
        @foreach($data as $data)
        <!-- ============================================================== -->
        <div class="col-xl-11 col-lg-12 col-md-10 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- card influencer one -->
           
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="user-avatar float-xl-left pr-5 float-none">
                                <img src="{{ asset('storage/media/'.$data->banner_pic) }}" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                    </div>
                                <div class="pl-xl-4">
                                    <div class="m-b-0">
                                        <div class="user-avatar-name d-inline-block">
                                            <h2 class="font-24 m-b-10">{{$data->building_name}}</h2>
                                        </div>
                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                          
                                            <p class="d-inline-block text-dark"> {{$data->owner_name}} &nbsp;&nbsp;&nbsp;
                                              </p> 
                                        </div>
                                    </div>
                                    <div class="user-avatar-address">
                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>{{$data->address}} 
                                        </p>
                                        <div class="mt-3">
                                          
                                @if($data->status==1)
                                <a href="{{url('admin/warehouse/status/0')}}/{{$data->id}}" class="btn btn-success">Active</a>
                             @elseif($data['status']==0)
                                <a href="{{url('admin/warehouse/status/1')}}/{{$data->id}}" class="btn btn-warning">Deactive</a>
                            @endif
                            <a href="{{url('admin/warehouse/delete/'.$data->id)}}" class="mr-1 btn btn-danger">Delete</a>
                            <a href="{{url('admin/warehouse/manage/'.$data->id)}}" class="mr-1 btn btn-primary">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                    <a href="{{url('admin/warehouse/detail/'.$data->id)}}" class="btn btn-info">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        
        @endforeach
    </div>
    </div>

</div>

@endsection