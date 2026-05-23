@extends('admin.layouts.master')
@section('title', 'Admin | Add Doctor')
@section('content')
<section id="page-title">
    <div class="row">
        <div class="col-sm-8"><h1 class="mainTitle">Admin | Add Doctor</h1></div>
        <ol class="breadcrumb"><li><span>Admin</span></li><li class="active"><span>Add Doctor</span></li></ol>
    </div>
</section>

<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <div class="row margin-top-30">
                <div class="col-lg-8 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading"><h5 class="panel-title">Add Doctor</h5></div>
                        <div class="panel-body">
                            
                            @if ($errors->any())
                                <div class="alert alert-danger"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                            @endif

                            <form role="form" method="post" action="{{ route('admin.store.doctor') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Doctor Specialization</label>
                                    <select name="Doctorspecialization" class="form-control" required>
                                        <option value="">Select Specialization</option>
                                        @foreach($specializations as $spec)
                                            <option value="{{ $spec->specilization }}">{{ $spec->specilization }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Doctor Name</label>
                                    <input type="text" name="docname" class="form-control" placeholder="Enter Doctor Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Clinic Address</label>
                                    <textarea name="clinicaddress" class="form-control" placeholder="Enter Doctor Clinic Address" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Consultancy Fees</label>
                                    <input type="text" name="docfees" class="form-control" placeholder="Enter Doctor Consultancy Fees" required>
                                </div>
                                <div class="form-group">
                                    <label>Contact no</label>
                                    <input type="text" name="doccontact" class="form-control" placeholder="Enter Doctor Contact no" required>
                                </div>
                                <div class="form-group">
                                    <label>Doctor Email (This will be the default Login Password)</label>
                                    <input type="email" name="docemail" class="form-control" placeholder="Enter Doctor Email id" required>
                                </div>
                                <button type="submit" class="btn btn-o btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection