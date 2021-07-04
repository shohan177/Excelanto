@extends("RecruitingAgency/master")

@section('title', 'Applied Job Posts')
@section('DataTableCss')
    <!-- DataTables -->
    <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
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
                        <h4 class="pull-left page-title">Applied Job Posts</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Job Posts
                            </a></li>
                            <li class="active">Applied Job Posts</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Applied job posts in detail</h3>
                        </div>
                        <div class="panel-body">

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Recruiter Name</th>
                                        <th>Company Name</th>
                                        <th>Job Category</th>
                                        <th>Job Vacancies</th>
                                        <th>Applied Vacancies</th>
                                        <th>Approved Vacancies</th>
                                        <th>Applied Date</th>
                                        <th>Status</th>
                                        <th style="width: 8%">Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>RC</td>
                                        <td>best buy</td>
                                        <td>welding</td>
                                        <td>50</td>
                                        <td>45</td>
                                        <td>40</td>
                                        <td>2021-06-22 01:30:22</td>
                                        <td>
                                            <span class="badge badge-success">Approved</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a class="btn btn-success btn-sm" href="#">
                                                <i class="fa fa-user-plus"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>imran</td>
                                        <td>sharif builders</td>
                                        <td>front end developer</td>
                                        <td>60</td>
                                        <td>55</td>
                                        <td>55</td>
                                        <td>2021-06-22 01:30:22</td>
                                        <td>
                                            <span class="badge badge-success">Approved</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a class="btn btn-success btn-sm" href="#">
                                                <i class="fa fa-user-plus"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Recruiter Name</th>
                                        <th>Company Name</th>
                                        <th>Job Category</th>
                                        <th>Job Vacancies</th>
                                        <th>Applied Vacancies</th>
                                        <th>Approved Vacancies</th>
                                        <th>Applied Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
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
