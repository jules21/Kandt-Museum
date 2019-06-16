@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
   <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Welcome to kandt Museum Dashboard</li>
            </ol>
            <div class="state-information d-none d-sm-block">
             
              
            </div>
        </div>
    </div>
</div>
                <div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon"><i class="mdi mdi-account-outline float-right"></i></div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Users</h6>
                    <h4 class="mb-4">{{count($users)}}</h4><span class="ml-2"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon"><i class="fas fa-university float-right"></i></div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Artifacts</h6>
                    <h4 class="mb-4">{{count($artifact)}}</h4><span class="ml-2"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon"><i class="mdi mdi-library-books  float-right"></i></div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Artifact Categories</h6>
                    <h4 class="mb-4">{{count($artifactCategory)}}</h4><span class="ml-2"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon"><i class="ion-android-book float-right"></i></div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Visit Schedules</h6>
                    <h4 class="mb-4">{{count($visitSchedule)}}</h4><span class="ml-2"></span>
                </div>
            </div>
        </div>
    </div>
</div>


                </div>
                </div>
                </div>
                @endsection
