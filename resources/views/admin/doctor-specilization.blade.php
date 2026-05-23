@extends('admin.layouts.master')
@section('title', 'Admin | Doctor Specialization')
@section('content')
<section id="page-title">
    <div class="row">
        <div class="col-sm-8"><h1 class="mainTitle">Admin | Add Doctor Specialization</h1></div>
        <ol class="breadcrumb"><li><span>Admin</span></li><li class="active"><span>Add Doctor Specialization</span></li></ol>
    </div>
</section>

<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <div class="row margin-top-30">
                <div class="col-lg-6 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading"><h5 class="panel-title">Doctor Specialization</h5></div>
                        <div class="panel-body">
                            @if(session('success')) <p style="color:green;">{{ session('success') }}</p> @endif
                            
                            <form role="form" method="post" action="{{ route('admin.add.specialization') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Doctor Specialization</label>
                                    <input type="text" name="doctorspecilization" class="form-control" placeholder="Enter Doctor Specialization" required>
                                </div>
                                <button type="submit" class="btn btn-o btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Doctor Specialization</span></h5>
                    <table class="table table-hover" id="sample-table-1">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Specialization</th>
                                <th class="hidden-xs">Creation Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($specializations as $key => $spec)
                            <tr>
                                <td class="center">{{ $key + 1 }}.</td>
                                <td class="hidden-xs">{{ $spec->specilization }}</td>
                                <td>{{ $spec->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.delete.specialization', $spec->id) }}" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white" style="color:red"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection