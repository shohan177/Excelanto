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
                                <div class="offset-lg-4"></div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Appointment Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            {!! date('m/d/Y', strtotime($new_job->appointment_time)) !!}
                                            <input type="date" class="form-control float-right" id="AppointmentDate" value="{!! date('m/d/Y', strtotime($new_job->appointment_time)) !!}" name="appointment_date">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                            <label>Appointment Time</label>
                                            {{ date('H:i:s', strtotime($new_job->appointment_time))  }}
                                            <div class="input-group date" id="AppointmentTime" data-target-input="nearest">
                                                <input type="time" class="form-control datetimepicker-input"  data-target="#AppointmentTime" placeholder="HH:MM AM/PM" value="{{ $new_job->appointment_time }}" name="appointment_time">
                                                <div class="input-group-append" data-target="#AppointmentTime"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                </div>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Job post status">Job post status</label>
                                        <select class="form-control" name="job_post_status" id="job_post_status"
                                            required="">
                                            <option selected="" disabled="" value="">Select status</option>
                                            <option {{ $new_job->status == 'new' ? 'selected' : ''}} value="new">Pending</option>
                                            <option {{ $new_job->status == 'verified' ? 'selected' : ''}}  value="verified">Verified</option>
                                            <option {{ $new_job->status == 'rejected' ? 'selected' : ''}}  value="rejected">Rejected</option>
                                            <option  {{ $new_job->status == 'pending' ? 'selected' : ''}} value="pending">pending</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="reason_input" style="display: none;">
                                        <label for="Reason to reject">Reason to reject</label>
                                        <textarea class="form-control" rows="3" placeholder="Write reason.."
                                            name="reject_reason"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>

                        </div>
                        <div class="panel-footer">
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
