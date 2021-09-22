@extends("BangladeshEmbassy/master")

@section('title', 'Extension Passport Request')
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
                    <h4 class="pull-left page-title">Extension - Renewal Passport Request</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Excelanto</a></li>
                        <li><a href="#">Extension - Renewal Passport</a></li>
                        <li class="active">Passport Requests</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Extension - Renewal Passport Request</h3>
                    </div>
                    <div class="panel-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>User Name</th>
                                    <th>Applied On</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($extensionPassports as $extensionPassport)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $extensionPassport->candidate->candidate_name ?? '-' }}</td>
                                        <td>{{ $extensionPassport->created_at ?? '-' }}</td>
                                        <td>
                                            @if ($extensionPassport->service_status == 'Paid')
                                                <button type="button" name="New"
                                                    class="btn btn-primary btn-xs update">New</button>
                                            @elseif ($extensionPassport->service_status == "Forwarded")
                                                <button type="button" name="Rejected"
                                                    class="btn btn-primary btn-xs update">New</button>
                                            @else
                                                <button type="button" name="Rejected"
                                                    class="btn btn-primary btn-xs update">{{ $extensionPassport->service_status }}</button>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm"
                                                href="{{ route('BangladeshEmbassy.candidate.showCandidateProfile', $extensionPassport->candidate_id) }}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a class="btn btn-info btn-sm"
                                                href="{{ route('BangladeshEmbassy.extensionPassport.status', $extensionPassport->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SL No</th>
                                    <th>User Name</th>
                                    <th>Applied On</th>
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
