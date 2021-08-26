@extends("OneStopService/master")

@section('title', 'Received Quotations')
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
                        <h4 class="pull-left page-title">Received Quotations</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Quotations</a></li>
                            <li class="active">Received Quotations</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Quotations Received for the enquiries</h3>
                        </div>
                        <div class="panel-body">

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL. No</th>
                                        <th>Posted on</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Tickets</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($submittedTravelEnquiries as $submittedTravelEnquiry)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $submittedTravelEnquiry->submitted_date }}</td>
                                            <td>{{ $submittedTravelEnquiry->travelEnquiry->start_point }}</td>
                                            <td>{{ $submittedTravelEnquiry->travelEnquiry->end_point }}</td>
                                            <td>{{ $submittedTravelEnquiry->total_tickets }}</td>
                                            <td>
                                                @if ($submittedTravelEnquiry->submitted_status == 'New')
                                                    <button type="button" class="btn btn-info btn-xs">New</button>
                                                @else
                                                    <button type="button" class="btn btn-danger btn-xs">Inactive</button>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-xs"
                                                    href="{{ route('OneStopService.travelQuotation.viewSubmittedQuotation', $submittedTravelEnquiry->id) }}">
                                                    <i class="fa fa-eye"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL. No</th>
                                        <th>Posted on</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Tickets</th>
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
