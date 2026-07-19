@extends('admin.layouts.app') 

@section('content')
<div class="main-content" >
    <div class="wrap-content container" id="container">
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Admin | Manage Users</h1>
                </div>
                <ol class="breadcrumb">
                    <li><span>Admin</span></li>
                    <li class="active"><span>Manage Users</span></li>
                </ol>
            </div>
        </section>

        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Users</span></h5>
                    
                    @if(session('success'))
                        <p style="color:green;">{{ session('success') }}</p>	
                    @endif

                    <table class="table table-hover" id="sample-table-1">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Full Name</th>
                                <th class="hidden-xs">Address</th>
                                <th>City</th>
                                <th>Gender </th>
                                <th>Email </th>
                                <th>Creation Date </th>
                                <th>Updation Date </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $row)
                            <tr>
                                <td class="center">{{ $key + 1 }}.</td>
                                <td class="hidden-xs">{{ $row->fullName }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->city }}</td>
                                <td>{{ $row->gender }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->regDate ?? $row->created_at }}</td>
                                <td>{{ $row->updationDate ?? $row->updated_at }}</td>
                                <td>
                                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                                        <a href="{{ route('admin.delete.user', $row->id) }}" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-red" style="color:red;"></i></a>
                                    </div>
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