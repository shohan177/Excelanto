@extends("BangladeshAdmin/master")

@section('title', 'Selected Candidates')
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
                        <h4 class="pull-left page-title">Selected Candidates</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Candidates</a></li>
                            <li class="active"> Selected Candidates</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Candidates selected by employer</h3>
                        </div>
                        <div class="panel-body">
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Candidate Name</th>
                                        <th>Job Category</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($offeredCandidates as $offeredCandidate)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $offeredCandidate->candidate_name }}</td>
                                            <td>{{ $offeredCandidate->job_category->category_name }}</td>
                                            <td>{{ $offeredCandidate->candidate_email }}</td>
                                            <td>{{ $offeredCandidate->phone_number }}</td>
                                            <td>
                                                @if ($offeredCandidate->result_status == 'Selected')
                                                    <span class="btn btn-success btn-sm">Selected</span>
                                                @elseif ($offeredCandidate->result_status == "Interview")
                                                    <span class="btn btn-primary btn-sm">Interview</span>
                                                @elseif ($offeredCandidate->result_status == "Rejected")
                                                    <span class="btn btn-danger btn-sm">Rejected</span>
                                                @elseif ($offeredCandidate->result_status == "Under-Interview-Process")
                                                    <span class="btn btn-danger btn-sm">Under-Interview-Process</span>
                                                @elseif ($offeredCandidate->result_status == "Updated")
                                                    <span class="btn btn-info btn-sm">Updated</span>
                                                @elseif ($offeredCandidate->result_status == "Finalized")
                                                    <span class="btn btn-warning btn-sm">Finalized</span>
                                                @elseif ($offeredCandidate->result_status == "Assigned")
                                                    <span class="btn btn-warning btn-sm">Post-Selection</span>
                                                @else
                                                    <span class="btn btn-warning btn-sm">Under-Process</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ route('BangladeshAdmin.candidate.showFinalCandidate', $offeredCandidate->id) }}">
                                                    <i class="mdi mdi-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Candidate Name</th>
                                        <th>Job Category</th>
                                        <th>Email</th>
                                        <th>Phone</th>
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
