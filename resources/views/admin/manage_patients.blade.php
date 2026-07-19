@extends('admin.layouts.master')

@section('content')
<section id="page-title">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="mainTitle">Admin | View Patients</h1>
        </div>
        <ol class="breadcrumb">
            <li><span>Admin</span></li>
            <li class="active"><span>View Patients</span></li>
        </ol>
    </div>
</section>
        
<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <h5 class="over-title margin-bottom-15">View <span class="text-bold">Patients</span></h5>
                
            <table class="table table-hover" id="sample-table-1">
                <thead>
                    <tr>
                        <th class="center">#</th>
                        <th>Patient Name</th>
                        <th>Patient Email</th>
                        <th>Patient Contact Number</th>
                        <th class="hidden-xs">Patient Address</th>
                        <th>Patient Age </th>
                        <th>Patient Gender </th>
                        <th>Creation Date </th>
                        <th>Updation Date </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $key => $row)
                    <tr>
                        <td class="center">{{ $key + 1 }}.</td>
                        <td class="hidden-xs">{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->age }}</td>
                        <td>{{ $row->gender }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>{{ $row->updated_at }}</td>
                        <td>
                            <a href="#"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection