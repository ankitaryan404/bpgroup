@extends('admin.master.layout')
@section('title','Marketing Staff List')
@section('marketing_staff','active')
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
                <h3 class="mb-2">Commercial Property List</h3>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Marketing Staff</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Marketing Staff List</li>
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
       
        @foreach($staff as $data)
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
                                <img src="{{ asset('storage/media/'.$data->images) }}" alt="Marketing staff pic" class="rounded-circle user-avatar-xl">
                                    </div>
                                <div class="pl-xl-4">
                                    <div class="m-b-0">
                                        <div class="user-avatar-name d-inline-block">
                                            <h2 class="font-24 m-b-10">{{$data->name}}</h2>
                                        </div>
                                       
                                    </div>
                                    <div class="user-avatar-address">
                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>{{$data->address}} 
                                        </p>
                                        <div class="mt-3">
                                          
                                @if($data->status==1)
                                <a href="{{url('admin/marketing-staff/status/0')}}/{{$data->id}}" class="btn btn-success">Active</a>
                             @elseif($data['status']==0)
                                <a href="{{url('admin/marketing-staff/status/1')}}/{{$data->id}}" class="btn btn-warning">Deactive</a>
                            @endif
                            <a href="{{url('admin/marketing-staff/delete/'.$data->id)}}" class="mr-1 btn btn-danger">Delete</a>
                            <a href="{{url('admin/marketing-staff/manage/'.$data->id)}}" class="mr-1 btn btn-primary">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                    <a href="{{url('admin/marketing-staff/detail/'.$data->id)}}" class="btn btn-info">View Details</a>
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