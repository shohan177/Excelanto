@extends("OneStopService/master")

@section('title', 'New Travel Enquiry')
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
                        <h4 class="pull-left page-title">New Travel Enquiry</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Travel Enquiries</a></li>
                            <li class="active">New Travel Enquiry</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create New Travel Enquiry</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="startingPoint">Starting Point(From)</label>
                                                    <input placeholder="Enter Place name" type="text" class="form-control" id="startingPoint">
                                                </div>
                                                <div class="form-group">
                                                    <label for="endPoint">End Point(To)</label>
                                                    <input placeholder="Enter Place name" type="text" class="form-control" id="endPoint">
                                                </div>
                                                <div class="form-group">
                                                    <label for="totalTickets">Total Tickets Required</label>
                                                    <input placeholder="Enter tickets required" type="text" class="form-control" id="totalTickets">
                                                </div>
                                            </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="dateOfJounrey">Date of Journey</label>
                                                    <input type="date" class="form-control" id="dateOfJounrey">
                                                </div>
                                                <div class="form-group">
                                                    <label for="enquiryEndDate">Enquiry End Date</label>
                                                    <input type="date" class="form-control" id="enquiryEndDate">
                                                </div>
                                                <div class="form-group">
                                                    <label for="comments">Comments</label>
                                                    <textarea placeholder="Write here any comments" class="form-control"  name="comments" id="comments" type="text" cols="30" rows="2"></textarea>
                                                </div>


                                            </div> <!-- panel-body -->
                                    </div> <!-- col -->
                                    <div class=" text-center">
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
