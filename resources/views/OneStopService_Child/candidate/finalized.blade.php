@extends("OneStopService_Child/master")

@section('title', 'Finalized Candidates')
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
                    <h4 class="pull-left page-title">Finalized Candidates</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Excelanto</a></li>
                        <li><a href="#">Candidates</a></li>
                        <li class="active">Finalized Candidates</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Finalized Candidated List</h3>
                    </div>
                    <div class="panel-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Candidate Name</th>
                                    <th>Job Category</th>
                                    <th>Phone No</th>
                                    <th>Email</th>
                                    <th>Medical</th>
                                    <th>Training</th>
                                    <th>Biometric</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($offeredCandidates as $candidate)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $candidate->candidate_name }}</td>
                                        <td>{{ $candidate->job_category->category_name }}</td>
                                        <td>{{ $candidate->phone_number }}</td>
                                        <td>{{ $candidate->candidate_email }}</td>
                                        <td>
                                            @if ($candidate->post_medical_status == 'Pass')
                                                <span class="badge badge-success">Pass</span>
                                            @elseif($candidate->post_medical_status == 'Fail')
                                                <span class="badge badge-danger">Fail</span>
                                            @else
                                                <span class="badge badge-info">Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($candidate->post_training_status == 'Pass')
                                                <span class="badge badge-success">Pass</span>
                                            @elseif($candidate->post_training_status == 'Fail')
                                                <span class="badge badge-danger">Fail</span>
                                            @else
                                                <span class="badge badge-info">Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($candidate->bio_status == 'Success')
                                                <span class="badge badge-success">Success</span>
                                            @else
                                                <span class="badge badge-info">Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($candidate->result_status == 'Selected')
                                                <span class=" badge badge-success">Selected</span>
                                            @elseif ($candidate->result_status == "Assigned")
                                                <span class="badge badge-info">New</span>
                                            @else
                                                <span class="badge badge-info">{{ $candidate->result_status }}</span>
                                            @endif
                                        </td>
                                        <td>

                                            @if ($candidate->result_status == 'Finalized')
                                                <a class="btn btn-primary btn-xs"
                                                    href="{{ route('OneStopService_Child.candidate.showFinalCandidateProfile', $candidate->id) }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            @elseif($candidate->bio_status ==null ||
                                                $candidate->post_training_status ==null
                                                ||$candidate->post_medical_status ==null )
                                                <a class="btn btn-primary btn-xs"
                                                    href="{{ route('OneStopService_Child.candidate.showBiometricCandidateProfile', $candidate->id) }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            @elseif($candidate->result_status == 'Post-Processing' && $candidate->bio_status !== null && $candidate->post_training_status !== null && $candidate->post_medical_status !== null )
                                                <a class="btn btn-primary btn-xs"
                                                    href="{{ route('OneStopService_Child.candidate.showBiometricCandidateProfile', $candidate->id) }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button type="button" name="delete"
                                                    class="btn btn-success btn-xs delete">
                                                    <i class="fa fa-share-square"></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SL No</th>
                                    <th>Candidate Name</th>
                                    <th>Job Category</th>
                                    <th>Phone No</th>
                                    <th>Email</th>
                                    <th>Medical</th>
                                    <th>Training</th>
                                    <th>Biometric</th>
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
