@extends('doctor.layouts.master')

@section('title', 'Doctor | Change Password')

@section('content')
<section id="page-title">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="mainTitle">Doctor | Change Password</h1>
        </div>
        <ol class="breadcrumb">
            <li><span>Doctor</span></li>
            <li class="active"><span>Change Password</span></li>
        </ol>
    </div>
</section>

<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <div class="row margin-top-30">
                <div class="col-lg-8 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Change Password</h5>
                        </div>
                        <div class="panel-body">
                            
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul style="margin-bottom: 0;">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
 
                            <form role="form" method="post" action="{{ route('doctor.update-password') }}">
                                @csrf
                                <div class="input-group-custom">
                                    <input type="password" id="cpass" name="cpass" required>
                                    <label for="cpass">Current Password</label>
                                </div>
                                
                                <div class="input-group-custom">
                                    <input type="password" id="npass" name="npass" required>
                                    <label for="npass">New Password</label>
                                </div>
                                
                                <div class="input-group-custom">
                                    <input type="password" id="cfpass" name="cfpass" required>
                                    <label for="cfpass">Confirm Password</label>
                                </div>
                                
                                <button type="submit" name="submit" class="btn btn-o btn-primary">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection