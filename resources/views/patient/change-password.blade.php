@extends('patient.layouts.master')

@section('title', 'User | Change Password')

@section('content')
<section id="page-title">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="mainTitle">User | Change Password</h1>
        </div>
        <ol class="breadcrumb">
            <li><span>User </span></li>
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
                                <p style="color: green;">{{ session('success') }}</p>
                            @endif

                            @if(session('error'))
                                <p style="color: red;">{{ session('error') }}</p>
                            @endif
                            
                            @if ($errors->any())
                                <ul style="color: red; padding-left: 15px;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <form role="form" name="chngpwd" method="post" action="{{ route('patient.update-password') }}">
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