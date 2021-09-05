@extends("SuperAdmin/master")

@section('title', 'Update Country')

@section('main-content')
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Country</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="{{route('SuperAdmin.dashboard')}}">Super Admin</a></li>
                            <li><a href="{{route('SuperAdmin.country.index')}}">Country</a></li>
                            <li class="active">Update county</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update Country</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{route('SuperAdmin.country.update', $country->id)}}" method="post">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Country Name</label>
                                    <div class="col-md-10">
                                        <input value="{{$country->country_name ? $country->country_name : old('country_name') }}" name="country_name" type="text" id="name" class="form-control" placeholder="Country Name">
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Country Code</label>
                                    <div class="col-md-10">
                                        <input value="{{$country->country_code ? $country->country_code : old('country_code') }}" name="country_code" type="text" id="name" class="form-control" placeholder="Name">
                                        @error('country_code')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    @php
                                        if(old('status')){
                                            $status = old('status');
                                        }else{
                                            $status = $country->status;
                                        }
                                    @endphp
                                    <label class="col-md-2 control-label">Status</label>
                                    <div class="col-md-10">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="active" value="active" @if($status=='active') {{'checked'}}@endif name="status">
                                            <label for="active"> Active </label>
                                        </div>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inactive" value="inactive" @if($status=='inactive') {{'checked'}}@endif name="status">
                                            <label for="inactive"> Inactive </label>
                                        </div>
                                        @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
                                        <a href="{{route('SuperAdmin.country.index')}}" class="btn btn-success">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection



