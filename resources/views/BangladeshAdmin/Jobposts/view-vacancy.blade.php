@extends("BangladeshAdmin/master")

@section('title', 'Applied Job Post')
@section('DataTableCss')
    <!-- DataTables -->
    <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

@endsection

@section('main-content')
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Applied Job Post</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Job Posts</a></li>
                            <li class="active">Applied Job Post</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">About</h3>
                        </div>
                        <div class="panel-body">
                            <strong><i class="fa fa-book mr-1"></i> Company Name</strong>
                            <p class="text-muted">{{  $appliedJob->jobPost->company->company_name}}</p>

                            <hr>

                            <strong><i class="fa fa-pencil mr-1"></i> Job Category</strong>
                            <p class="text-muted">{{  $appliedJob->jobPost->job_category->category_name}}</p>

                            <hr>

                            <strong><i class="fa fa-envelope mr-1"></i> Job Vacancies</strong>
                            <p class="text-muted">{{  $appliedJob->job_vacancy}}</p>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Applied</h3>
                        </div>
                        <div class="panel-body">
                            <strong><i class="fa fa-book mr-1"></i> Company Name</strong>
                            <p class="text-muted">{{  $appliedJob->applier_agency_name}}</p>

                            <hr>

                            <strong><i class="fa fa-book mr-1"></i> Total Vacancies</strong>
                            <p class="text-muted">{{  $appliedJob->applied_vacancy}}</p>

                            <hr>

                            <strong><i class="fa fa-pencil mr-1"></i> Remarks / Comments</strong>
                            <p class="text-muted">{{  $appliedJob->remarks}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Approved</h3>
                        </div>
                        <div class="panel-body">
                            <strong><i class="fa fa-book mr-1"></i> Approved Vacancies</strong>
                            <p class="text-muted">{{  $appliedJob->approved_vacancy}}</p>

                            <hr>

                            <strong><i class="fa fa-pencil mr-1"></i> Remarks / Comments</strong>
                            <p class="text-muted">{{  $appliedJob->approved_remarks}}</p>
                        </div>
                        <div class="panel-footer">
                            <a class="btn btn-secondary float-right" href="{{ route('BangladeshAdmin.vacancy_approval') }}">Back</a>
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

