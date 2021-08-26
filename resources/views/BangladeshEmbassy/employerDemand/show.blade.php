@extends("BangladeshEmbassy/master")

@section('title', 'View Job Post')
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

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">View Job Post</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Job Posts</a></li>
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

                            <h3 style="font-weight:bolder;text-align:center;color:blue;">Company Details</h3>

                            <h4 style="font-weight:bolder;text-align:center;">{{ $job_post->company->company_name }}</h4>

                            <h6 style="text-align:center;">{{ $job_post->company->email }}</h6>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <center><b><i class="fa fa-book mr-1"></i>Schedule Detials </b> </center>
                                </li>
                                <li class="list-group-item">
                                    <b>Appointment Date</b> <a class="float-right">{{ $job_post->appointment_date }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Appointment Time</b> <a class="float-right">{{ $job_post->appointment_time }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Job Posted by</b> <a class="float-right">Employer</a>
                                </li>
                            </ul>

                            <a href="#" download="" class="btn btn-primary btn-block">
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
                            <p class="text-muted">{{ $job_post->job_category->category_name }}</p>
                            <hr>
                            <strong><i class="fa fa-pencil mr-1"></i> Employment Type</strong>
                            <p class="text-muted">{{ $job_post->employment_type }}</p>
                            <hr>
                            <strong><i class="fa fa-map mr-1"></i> Job Location</strong>
                            <p class="text-muted">{{ $job_post->job_location }}</p>
                            <hr>
                            <strong><i class="fa fa-calendar mr-1"></i> End Date</strong>
                            <p class="text-muted">{{ $job_post->end_date }}</p>
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
                            <p class="text-muted">{{ $job_post->job_vacancy }}</p>
                            <hr>
                            <strong><i class="fa fa-user mr-1"></i> Gender</strong>
                            <p class="text-muted">{{ $job_post->gender }}</p>
                            <hr>
                            <strong><i class="fa fa-user mr-1"></i> Age Limit</strong>
                            <p class="text-muted">{{ $job_post->age_limit }}</p>
                            <hr>
                            <strong><i class="fa fa-money mr-1"></i> Salary</strong>
                            <p class="text-muted">{{ $job_post->salary }}</p>
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
