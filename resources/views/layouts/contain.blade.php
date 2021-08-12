@extends('home')
@extends('layouts.master')

@section('section')
<div class="page-content">
    
    @can('manageAsset')
    {{-- <div id="chartSection">
        <canvas id="myChart" width="200px" height="50px"></canvas>
    </div> --}}
    <br>
    
    @include('alerts.message')

    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            {{-- Table Header --}}
            <div class="panel-hdr">
                <h2>
                    Available Assets
                <span class="fw-300">
                    <i>Table</i>
                <span>
                </h2>
                {{-- Button --}}
                <div class="panel-toolbar">
                    @can('manageAsset')
                        <a href="{{ route('product.create') }}" class="btn btn-success">Add Asset</a>
                    @endcan
                </div>
            </div>

            {{-- Table Content --}}
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="dataTables_wrapper dt-bootstrap4">
                        <table class="table" id="assetTable">
                            <thead>
                                <tr>
                                    <th>Package Name</th>
                                    <th>Model</th>
                                    <th>Brand</th>
                                    <th>Current User</th>
                                    <th>Serial Number</th>
                                    <th>Description</th>
                                    @can('manageAsset')
                                        <th>Actions</th>
                                    @endcan
                                </tr>
                            </thead>
                    
                            <tbody>
                                @foreach ($assets as $item)
                                <tr>
                                    <td>{{ $item->package_name }}</td>
                                    <td>{{ $item->model_name }}</td>
                                    <td>{{ $item->brand_name }}</td>
                                    <td>{{ $item->user_name }}</td>
                                    <td>{{ $item->serial_number }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        @can('manageAsset')
                                        <a href="{{ route('product.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                                        <a href="product/{{ $item->id }}/delete" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                        @endcan
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
    @endcan
<!--    
    //permission -->
    @can('userHome')
    <div>
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div>
                            <div class="page-body">
                                <div class="row">
                                        <!-- order-card start -->
                                        <div class="col-md-3 col-sm-4">
                                            <div class="card bg-c-blue order-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Total Assets Available</h6>
                                                    <h2 class="text-right"><i class="ti-info f-left"></i><span>{{$available}}</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="card bg-c-green order-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Approved Request</h6>
                                                    <h2 class="text-right"><i class="ti-check f-left"></i><span>{{$approved}}</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="card bg-c-yellow order-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Rejected Request</h6>
                                                    <h2 class="text-right"><i class="ti-na f-left"></i><span>{{$rejected}}</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="card bg-c-blue order-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Pending Request</h6>
                                                    <h2 class="text-right"><i class="ti-alert f-left"></i><span>{{$pending}}</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="card bg-c-blue order-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Pending Request</h6>
                                                    <h2 class="text-right"><i class="ti-alert f-left"></i><span>{{$pending}}</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="card bg-c-blue order-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Pending Request</h6>
                                                    <h2 class="text-right"><i class="ti-alert f-left"></i><span>{{$pending}}</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="card bg-c-blue order-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Pending Request</h6>
                                                    <h2 class="text-right"><i class="ti-alert f-left"></i><span>{{$pending}}</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="card bg-c-blue order-card">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Pending Request</h6>
                                                    <h2 class="text-right"><i class="ti-alert f-left"></i><span>{{$pending}}</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    <br>       
                                    <br>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div id="panel-1" class="panel">
            {{-- Table Header --}}
            <div class="panel-hdr">
                <h2>
                    Available Assets
                <span class="fw-300">
                    <i>Table</i>
                <span>
                </h2>

                {{-- Button --}}
                <div class="panel-toolbar">
                    @can('manageAsset')
                        <a href="#" data-toggle="modal" data-target="#reqForm" class="btn btn-success">Request Asset</a>
                    @endcan
                </div>
            </div>

            <div class="panel-container show">
                <div class="panel-content">
                    <div class="dataTables_wrapper dt-bootstrap4">
                        <table class="table" id="prodReqTable">
                            <thead>
                                <tr>
                                    <th>Package Name</th>
                                    <th>Model</th>
                                    <th>Brand</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                    
                            <tbody>
                                @foreach ($availAssets as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->model }}</td>
                                    <td>{{ $item->brand }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->amount }}</td>
                                </tr>        
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
@endcan
@endsection