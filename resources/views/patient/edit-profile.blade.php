@extends('patient.layouts.master')

@section('title', 'User | Edit Profile')

@section('content')
<section id="page-title">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="mainTitle">User | Edit Profile</h1>
        </div>
        <ol class="breadcrumb">
            <li><span>User </span></li>
            <li class="active"><span>Edit Profile</span></li>
        </ol>
    </div>
</section>

<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
                <h5 style="color: green; font-size:18px;">{{ session('success') }}</h5>
            @endif

            <div class="row margin-top-30">
                <div class="col-lg-8 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Edit Profile</h5>
                        </div>
                        <div class="panel-body">
                            <div class="profile">
                                <h4>{{ $patient->name }}'s Profile</h4>
                                <p><b>Profile Reg. Date: </b>{{ $patient->created_at->format('Y-m-d H:i:s') }}</p>
                                <hr /> 
                            </div> 

                            <form role="form" method="post" action="{{ route('patient.profile.update') }}">
                                @csrf
                                <div class="form-g">
                                    <label for="fname">User Name</label>
                                    <input type="text" name="name" value="{{ $patient->name }}" required>
                                </div>
                                <div class="form-g">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" value="{{ $patient->address }}" required>
                                </div>
                                <div class="form-g">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phone" value="{{ $patient->phone }}" required>
                                </div>
                                <div class="form-g">
                                    <label for="gender">Gender</label>
                                    <select name="gender" required>
                                        <option value="male" {{ $patient->gender == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ $patient->gender == 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ $patient->gender == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                                <div class="form-g">
                                    <label for="age">Age</label>
                                    <input type="number" name="age" value="{{ $patient->age }}" required>
                                </div>
                                <div class="form-g">
                                    <label for="email">User Email</label>
                                    <input type="email" name="email" value="{{ $patient->email }}" required>
                                </div>
                                <button type="submit" class="btn btn-o btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection