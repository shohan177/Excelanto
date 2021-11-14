@extends("RecruitingAgency/master")

@section('title', 'Select Candidates')
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
                        <h4 class="pull-left page-title">Select Candidates</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Candidates
                                </a></li>
                            <li class="active">Select Candidates</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Select candidates for the job</h3>
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
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($candidates as $candidate)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $candidate->candidate_name }}</td>
                                            <td>{{ $candidate->job_category->category_name }}</td>
                                            <td>{{ $candidate->phone_number }}</td>
                                            <td>{{ $candidate->candidate_email }}</td>
                                            <td>
                                                @if ($candidate->candidate_picture)
                                                    <a href="{{ asset($candidate->candidate_picture) }}" target="_blank">
                                                        <img height="70px;" src="{{ asset($candidate->candidate_picture) }}" width="70px;" class="rounded-circle" />
                                                    </a>
                                                @else
                                                    <abbr title="Sorry There in no picture">
                                                        <img class="rounded-circle" height="70px;" src="{{asset('assets/images/users/avatar-1.jpg')}}" width="70px;" />
                                                    </abbr>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($candidate->status == 'Active')
                                                    <button type="button" class="btn btn-info btn-xs ">Waiting</button>
                                                @elseif ($candidate->status == "Inactive")
                                                    <button type="button" class="btn btn-danger btn-xs ">Not
                                                        Selected</button>
                                                @elseif ($candidate->status == "Selected")
                                                    <button type="button" class="btn btn-success btn-xs ">Selected</button>
                                                @elseif ($candidate->status == "Forwarded")
                                                    <button type="button" class="btn btn-success btn-xs ">Forwarded</button>
                                                @elseif ($candidate->status == "Reviewed")
                                                    <button type="button" class="btn btn-success btn-xs ">Reviewed</button>
                                                @elseif ($candidate->status == "Interview")
                                                    <button type="button" class="btn btn-success btn-xs ">Interview</button>
                                                @else
                                                    <span class="badge badge-info">{{ $candidate->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-xs"
                                                    href="{{ route('RecruitingAgency.candidate.show', $candidate->id) }}"><i
                                                        class="fa fa-eye"></i></a>
                                                @if ($candidate->status == 'Active')
                                                    <button class="btn btn-success btn-xs" onclick="approve(this)"
                                                        value="{{ route('RecruitingAgency.candidate.approveNow', [$candidate->id, $appliedJob->id]) }}">
                                                        <i class="mdi mdi-check"></i> </button>
                                                @elseif ($candidate->status == "Inactive")

                                                    <button class="btn btn-success btn-xs" onclick="approve(this)" disabled
                                                        value="{{ route('RecruitingAgency.candidate.approveNow', [$candidate->id, $appliedJob->id]) }}">
                                                        <i class="mdi mdi-check"></i> </button>
                                                @elseif ($candidate->status == "Selected")
                                                    <button class="btn btn-danger btn-xs" onclick="reject(this)"
                                                        value="{{ route('RecruitingAgency.candidate.rejectNow', $candidate->id) }}">
                                                        <i class="fa fa-times" aria-hidden="true"></i> </button>

                                                @elseif ($candidate->status == "Forwarded")
                                                    <button class="btn btn-danger btn-xs" onclick="reject(this)"
                                                        value="{{ route('RecruitingAgency.candidate.rejectNow', $candidate->id) }}">
                                                        <i class="fa fa-times" aria-hidden="true"></i> </button>
                                                @elseif ($candidate->status == "Reviewed")
                                                    <button class="btn btn-danger btn-xs" onclick="reject(this)"
                                                        value="{{ route('RecruitingAgency.candidate.rejectNow', $candidate->id ) }}">
                                                        <i class="fa fa-times" aria-hidden="true"></i> </button>
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
                                        <th>Photo</th>
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
    <script>
        function approve(objButton) {
            var url = objButton.value;
            // alert(objButton.value)
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Approve !'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        method: 'POST',
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            if (data.type == 'success') {
                                Swal.fire(
                                    'Approved !',
                                    'This company has been Approved. ' + data.message,
                                    'success'
                                )
                                setTimeout(function() {
                                    location.reload();
                                }, 800); //
                            } else {
                                Swal.fire(
                                    'Wrong !',
                                    'Something going wrong. ' + data.message,
                                    'warning'
                                )
                            }
                        },
                    })
                }
            })
        }

        function reject(objButton) {
            var url = objButton.value;
            // alert(objButton.value)
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Reject !'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        method: 'POST',
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            if (data.type == 'success') {
                                Swal.fire(
                                    'Rejected !',
                                    'This company has been Rejected. ' + data.message,
                                    'success'
                                )
                                setTimeout(function() {
                                    location.reload();
                                }, 800); //
                            } else {
                                Swal.fire(
                                    'Wrong !',
                                    'Something going wrong. ' + data.message,
                                    'warning'
                                )
                            }
                        },
                    })
                }
            })
        }
    </script>
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
