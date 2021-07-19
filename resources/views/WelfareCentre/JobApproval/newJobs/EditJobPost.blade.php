@extends("WelfareCentre/master")

@section('title', 'Edit Job Post')
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
                        <h4 class="pull-left page-title">Edit Job Post</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Welfare Centre</a></li>
                            <li><a href="#"> Job Approval
                                </a></li>
                            <li class="active">Edit Job Post</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('WelfareCentre.postUpdate')}}" method="post" enctype="multipart/form-data">
                    <div class="panel panel-primary">
                            <input type="hidden" value="{{ $new_job->id}}" name="id">
                            @csrf
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit appointment and job post</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="appointmentDate">Appointment Date</label>
                                                <input type="date" value="{{ $new_job->appointment_date }}"
                                                    class="form-control" id="appointmentDate" name="appointmentDate">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="appointmentTime">Appointment Time</label>
                                                    <input type="time" value="{{ $new_job->appointment_time }}"
                                                        class="form-control" id="appointmentTime" name="appointmentTime">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="jobPostStatus">Job post status</label>
                                                <select class="form-control" name="jobPostStatus" id="jobPostStatus"
                                                    required="">
                                                    <option selected="" disabled="" value="">Select status</option>
                                                    <option {{ $new_job->status == 'Pending' ? 'selected' : ''}} value="Pending">Pending</option>
                                                    <option {{ $new_job->status == 'Verified' ? 'selected' : ''}}  value="Verified">Verified</option>
                                                    <option {{ $new_job->status == 'Rejected' ? 'selected' : ''}}  value="Rejected">Rejected</option>
                                                </select>
                                            </div>
                                        </div><!-- panel-body -->
                                    </div> <!-- col-->
                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                        <div class="panel-footer float-right">
                            <button type="submit" name="btnupdate" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </div>
                </form>
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
