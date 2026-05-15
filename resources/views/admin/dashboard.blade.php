@extends('admin.layouts.master')

@section('title', 'Admin | Dashboard')

@section('content')
<section id="page-title">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="mainTitle">Admin | Dashboard</h1>
        </div>
        <ol class="breadcrumb">
            <li><span>Admin</span></li>
            <li class="active"><span>Dashboard</span></li>
        </ol>
    </div>
</section>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-white no-radius text-center">
                <div class="panel-body">
                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                    <h2 class="StepTitle">Manage Users</h2>
                    <p class="links cl-effect-1">
                        <a href="#">Total Users : {{ $totalUsers }} </a>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4">
            <div class="panel panel-white no-radius text-center">
                <div class="panel-body">
                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                    <h2 class="StepTitle">Manage Doctors</h2>
                    <p class="cl-effect-1">
                        <a href="#">Total Doctors : {{ $totalDoctors }} </a>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4">
            <div class="panel panel-white no-radius text-center">
                <div class="panel-body">
                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                    <h2 class="StepTitle"> Appointments</h2>
                    <p class="links cl-effect-1">
                        <a href="#">Total Appointments : {{ $totalAppointments }} </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-white no-radius text-center">
                <div class="panel-body">
                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                    <h2 class="StepTitle">Manage Patients</h2>
                    <p class="links cl-effect-1">
                        <a href="#">Total Patients : {{ $totalPatients }} </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-white no-radius text-center">
                <div class="panel-body">
                    <span class="fa-stack fa-2x"> <i class="ti-files fa-1x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                    <h2 class="StepTitle"> New Queries</h2>
                    <p class="links cl-effect-1">
                        <a href="#">Total New Queries : {{ $newQueries }} </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection