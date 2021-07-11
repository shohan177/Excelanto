@extends("SuperAdmin/master")

@section('title', 'Create New Role')

@section('main-content')
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Role</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Super Admin</a></li>
                            <li><a href="#">Role</a></li>
                            <li class="active">Update role</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update Roles</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{route('SuperAdmin.role.update', $role->id)}}" method="post">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Role Name</label>
                                    <div class="col-md-10">
                                        <input value="{{$role->name ? $role->name : old('name') }}" name="name" type="text" id="name" class="form-control" placeholder="Name">
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    @php
                                        if(old('status')){
                                            $status = old('status');
                                        }else{
                                            $status = $role->status;
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
                                        <a href="{{route('SuperAdmin.role.index')}}" class="btn btn-success">Back</a>
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



