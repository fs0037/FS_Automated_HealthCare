@extends('admin.layouts.master')
@section('title', 'Admin | Manage Doctors')
@section('content')
<section id="page-title">
    <div class="row">
        <div class="col-sm-8"><h1 class="mainTitle">Admin | Manage Doctors</h1></div>
        <ol class="breadcrumb"><li><span>Admin</span></li><li class="active"><span>Manage Doctors</span></li></ol>
    </div>
</section>

<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Doctors</span></h5>
            @if(session('success')) <p style="color:green; font-weight:bold;">{{ session('success') }}</p> @endif
            
            <table class="table table-hover" id="sample-table-1">
                <thead>
                    <tr>
                        <th class="center">#</th>
                        <th>User ID</th>
                        <th>Specialization</th>
                        <th class="hidden-xs">Doctor Name</th>
                        <th>Creation Date </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $key => $doc)
                    <tr>
                        <td class="center">{{ $key + 1 }}.</td>
                        <td style="font-weight:bold; color:#0072ff;">{{ $doc->userid }}</td>
                        <td class="hidden-xs">{{ $doc->specilization }}</td>
                        <td>{{ $doc->doctorName }}</td>
                        <td>{{ $doc->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.delete.doctor', $doc->id) }}" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white" style="color:red;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection