@extends("WelfareCentre/master")

@section('title', 'All Job Posts')
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
                        <h4 class="pull-left page-title">Create awareness event</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Welfare Centre</a></li>
                            <li><a href="#"> Awareness </a></li>
                            <li class="active">Create new event</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create new awarenss event/programme</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="panel-body">

                                                    <div class="form-group">
                                                        <label for="Event category">Event category</label>
                                                        <select class="form-control" name="event_category" required="">
                                                            <option selected="" disabled="" value="">Select category</option>
                                                            <option value="Immigration system">Immigration system</option>
                                                            <option value="Health and safety">Health and safety</option>
                                                            <option value="Drug handling">Drug handling</option>
                                                            <option value="Human trafficking">Human trafficking</option>
                                                            <option value="Smuggling of gold">Smuggling of gold</option>
                                                            <option value="Money laundering">Money laundering</option>
                                                            <option value="Sexual Transmission Diseases(STD)">Sexual Transmission
                                                                Diseases(STD)</option>
                                                            <option value="Remittance">Remittance</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Event agenda">Event agenda</label>
                                                        <input type="text" class="form-control" id="agenda" name="event_agenda"
                                                            placeholder="Enter agenda">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Conducting person">Conducting person</label>
                                                        <input type="text" class="form-control" id="conducting" name="conducted_by"
                                                            placeholder="Enter conducting person name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Date of event</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control float-right" id="EventDate"
                                                                name="event_date">
                                                        </div>
                                                    </div>
                                            </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="panel-body">
                                                    <!-- time Picker -->
                                                    <div class="bootstrap-timepicker">
                                                        <div class="form-group">
                                                            <label>Event time</label>
                                                            <div class="input-group date" id="EventTime" data-target-input="nearest">
                                                                <input type="text" class="form-control datetimepicker-input"
                                                                    data-target="#EventTime" placeholder="HH:MM AM/PM"
                                                                    name="event_time">
                                                                <div class="input-group-append" data-target="#EventTime"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Place">Place</label>
                                                        <input type="text" class="form-control" id="place" name="place"
                                                            placeholder="Enter place name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Description">Event description</label>
                                                        <textarea class="form-control" rows="5" name="event_desc"
                                                            placeholder="Type description here.."></textarea>
                                                    </div>
                                            </div> <!-- panel-body -->
                                    </div> <!-- col -->
                                </div> <!-- End row -->
                                <div class="panel-footer">
                                    <button type="submit" name="btnsave" class="btn btn-md btn-primary float-right">Submit</button>
                                </div>
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
