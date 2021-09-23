@extends("WelfareCentre/master")

@section('title', 'Certificate attestation report')
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
                        <h4 class="pull-left page-title">Certificate attestation report delivery</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Welfare Centre</a></li>
                            <li><a href="#"> WSC registered users
                                </a></li>
                            <li class="active">Certificate attestation report delivery</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Certificate attestation report delivery status</h3>
                        </div>
                        <div class="panel-body">
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>User name</th>
                                        <th>Delivered to</th>
                                        <th>Applied on</th>
                                        <th>Delivery</th>
                                        <th>Status</th>
                                        <th>Document</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attestationCertificates as $attestationCertificate)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $attestationCertificate->candidate->candidate_name }}</td>
                                            <td>{{ $attestationCertificate->delivery_to }}</td>
                                            <td>{{ $attestationCertificate->created_at }}</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-xs">{{ $attestationCertificate->delivery_status }}</button>
                                            </td>
                                            <td>
                                                @if ($attestationCertificate->service_status == 'Paid')
                                                    <button type="button" class="btn btn-success btn-xs">Paid</button>
                                                @elseif($attestationCertificate->service_status == "On process")
                                                    <button type="button" class="btn btn-success btn-xs">On process</button>
                                                @elseif($attestationCertificate->service_status == "Completed")
                                                    <button type="button" class="btn btn-success btn-xs">Completed</button>
                                                @elseif($attestationCertificate->service_status == "Not Completed")
                                                    <button type="button" class="btn btn-success btn-xs">Not
                                                        Completed</button>
                                                @elseif($attestationCertificate->service_status == "Approved")
                                                    <button type="button" class="btn btn-success btn-xs">Approved</button>
                                                @elseif($attestationCertificate->service_status == "Rejected")
                                                    <button type="button" class="btn btn-danger btn-xs">Rejected</button>
                                                @else
                                                    <button type="button"
                                                        class="btn btn-info btn-xs">{{ $attestationCertificate->service_status }}</button>
                                                @endif
                                            </td>
                                            <td>
                                                @if($attestationCertificate->document)
                                                    <a class="btn btn-info btn-xs" href="{{ asset($attestationCertificate->document) }}" target="_blank"><i class="fa fa-eye"></i></a>
                                                @else
                                                    <a title="There is no document" class="btn btn-info btn-xs" href="#"><i class="fa fa-eye"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL No</th>
                                        <th>User name</th>
                                        <th>Delivered to</th>
                                        <th>Applied on</th>
                                        <th>Delivery</th>
                                        <th>Status</th>
                                        <th>Document</th>
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
