@extends("UAEAdmin/master")

@section('title', 'Update Job Category')
@section('DataTableCss')

@endsection

@section('main-content')
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Job Category</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Job Category</a></li>
                            <li class="active">Update Job Category</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update Job Category</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" enctype="multipart/form-data">
                                <div class="row ">
                                    <!-- Basic example -->
                                    <div class="col-md-2 col-lg-2 col-xl-2"> </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                        <div class="form-group">
                                            <label for="jobCategory">Job Category</label>
                                            <input type="text" class="form-control" id="jobCategory">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="">Select Status</option>
                                                <option value="true">Active</option>
                                                <option value="false">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-xl-2"> </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                                        <button type="submit" class="btn btn-dark waves-effect waves-ligh">Submit</button>
                                    </div>
                                </div> <!-- End row -->
                            </form>
                        </div><!-- panel-body -->
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
