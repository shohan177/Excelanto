@extends("WelfareCentre/master")

@section('title', 'Posted Jobs')
@section('DataTableCss')
    <!-- DataTables -->
    <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('main-content')
    <!-- Start content -->
    <div class="content">
        <div class="container">
            Job Posts
            View Job Post
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Job Posts</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">View Job Post</a></li>
                            <li class="active">View Job Post</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-primary panel-outline">
                        <div class="panel-body box-profile">
                            <!--<div class="text-center">-->
                            <!--  <img class="profile-user-img img-fluid img-circle"-->
                            <!--       src="../logo/c40536ff06b265135d3cc15fa29f386b1596020761.JPG" width="28px" height="28px"-->
                            <!--       alt="User profile picture">-->
                            <!--</div>-->

                            <h3 style="font-weight:bolder;text-align:center;color:blue;">Company Details</h3>

                            <h4 style="font-weight:bolder;text-align:center;">{{ $new_job->company->company_name}}</h4>

                            <h6 style="text-align:center;">recruiter@gmail.com</h6>

                            <ul class="list-group list-group-unbordered mb-3">
                                 <li class="list-group-item">
                                <center><b><i class="fa fa-book mr-1"></i>Schedule Detials </b> </center>
                              </li>
                              <li class="list-group-item">
                                <b>Appointment Date</b> <a class="float-right">{!! date('d/M/y', strtotime($new_job->appointment_date)) !!}
                                </a>
                              </li>
                              <li class="list-group-item">
                                <b>Appointment Time</b> <a class="float-right">{{ date('H:i:s', strtotime($new_job->appointment_time))  }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Job Posted by</b> <a class="float-right">Employer</a>
                              </li>
                            </ul>


                            <a href="../demandletter/172745224_23847221674930487_737226822608284999_n.jpg " download="" class="btn btn-primary btn-block">
                                <b><i class="fa fa-download"></i> Demand Letter </b>
                            </a>
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">About Jobs</h3>
                        </div>
                        <div class="panel-body">
                            <strong><i class="fa fa-book mr-1"></i> Job Category</strong>
                            <p class="text-muted">{{ $new_job->job_category->category_name}}</p>

                            <hr>

                            <strong><i class="fa fa-pencil mr-1"></i> Employment Type</strong>
                            <p class="text-muted">{{ $new_job->employment_type}}</p>

                            <hr>

                            <strong><i class="fa fa-map mr-1"></i> Job Location</strong>
                            <p class="text-muted">{{ $new_job->job_location}}</p>

                            <hr>

                            <strong><i class="fa fa-calendar mr-1"></i> End Date</strong>
                            <p class="text-muted">{!! date('d/M/y', strtotime($new_job->end_date)) !!}</p>
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">About candidate</h3>
                        </div>
                        <div class="panel-body">
                            <strong><i class="fa fa-users mr-1"></i> Job Vacancy</strong>
                            <p class="text-muted">{{ $new_job->job_vacancy}}</p>

                            <hr>

                            <strong><i class="fa fa-user mr-1"></i> Gender</strong>
                            <p class="text-muted">{{ $new_job->gender}}</p>

                            <hr>

                            <strong><i class="fa fa-user mr-1"></i> Age Limit</strong>
                            <p class="text-muted">{{ $new_job->age_limit}}</p>

                            <hr>

                            <strong><i class="fa fa-money mr-1"></i> Salary</strong>
                            <p class="text-muted">35000</p>
                          </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')
    <!-- Datatables-->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.scroller.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets/pages/datatables.init.js') }}"></script>
@endsection

