@extends("OneStopService/master")

@section('title', 'Received Quotations')
@section('DataTableCss')

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
                            <li><a href="#">Posted Enquiries</a></li>
                            <li class="active">Received Quotations</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Profile Image -->
                    <div class="panel panel-primary card-outline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Quotation Detail</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                                    <div class="row">
                                        <div class="col-12 col-sm-4 ">
                                            <div class="panel">
                                                <div class="panel-body user-card">
                                                    <div class="media-main">
                                                        <div class="info">
                                                            <h4>Starting
                                                                point(From)</h4>
                                                            <p class="text-muted">
                                                                {{ $submittedTravelEnquiry->travelEnquiry->start_point }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- panel-body -->
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 ">
                                            <div class="panel">
                                                <div class="panel-body user-card">
                                                    <div class="media-main">
                                                        <div class="info">
                                                            <h4>End point(To)</h4>
                                                            <p class="text-muted">
                                                                {{ $submittedTravelEnquiry->travelEnquiry->end_point }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- panel-body -->
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 ">
                                            <div class="panel">
                                                <div class="panel-body user-card">
                                                    <div class="media-main">
                                                        <div class="info">
                                                            <h4>Total tickets required</h4>
                                                            <p class="text-muted">
                                                                {{ $submittedTravelEnquiry->travelEnquiry->tickets_required }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- panel-body -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>Comments</h4>
                                            <div class="post">
                                                <div class="user-block">
                                                    @if ($user->logo)
                                                        <img height="100px;" width="100px;" src="{{ asset($user->logo) }}"
                                                            class="profile-user-img img-fluid img-circle"
                                                            alt="User Image" />
                                                    @else
                                                        <img class="profile-user-img img-fluid img-circle" height="70px;"
                                                            src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                            alt="User Image" />
                                                    @endif
                                                    <hr>
                                                    <span class="username">
                                                        <a
                                                            href="{{ route('OneStopService.company.showCompanyProfile', $user->id) }}">{{ $user->company_name }}
                                                            ({{ $user->username }})</a>
                                                    </span>
                                                    <br>
                                                    <span class="description">Posted on -
                                                        {{ $submittedTravelEnquiry->travelEnquiry->created_date }}</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                    {{ $submittedTravelEnquiry->travelEnquiry->oss_comments }}
                                                </p>
                                            </div>
                                            <div class="post">
                                                <div class="user-block">
                                                    @if ($submittedTravelEnquiry->travelAgency->logo)
                                                        <img height="100px;" width="100px;" src="{{ asset($user->logo) }}"
                                                            class="profile-user-img img-fluid img-circle"
                                                            alt="User Image" />
                                                    @else
                                                        <img class="profile-user-img img-fluid img-circle" height="70px;"
                                                            src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                            alt="User Image" />
                                                    @endif
                                                    <hr>
                                                    <span class="username">
                                                        <a
                                                            href="{{ route('OneStopService.company.showCompanyProfile', $user->id) }}">{{ $submittedTravelEnquiry->travelAgency->company_name }}
                                                            ({{ $submittedTravelEnquiry->travelAgency->username }})</a>
                                                    </span>
                                                    <br>
                                                    <span class="description">Posted on -
                                                        {{ $submittedTravelEnquiry->submitted_date }}</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                    {{ $submittedTravelEnquiry->travel_agency_comments }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                                    <h3 class="text-primary"><i class="fa fa-edit"></i> Note</h3>
                                    <p class="text-muted">Submitted quotations need approval from the owner. Please wait for
                                        the approval.</p>
                                    <br>
                                    <div class="text-muted">
                                        <p class="text-sm">Date of journey
                                            <b
                                                class="d-block">{{ $submittedTravelEnquiry->travelEnquiry->date_of_journey }}</b>
                                        </p>
                                        <p class="text-sm">Enquiry end date
                                            <b
                                                class="d-block">{{ $submittedTravelEnquiry->travelEnquiry->end_date }}</b>
                                        </p>
                                        <p class="text-sm">Total Tickets
                                            <b class="d-block">{{ $submittedTravelEnquiry->total_tickets }}</b>
                                        </p>
                                    </div>
                                    <div class="text-center mt-5 mb-3">
                                        <button class="btn btn-success" onclick="approve(this)"
                                        value="{{ route('OneStopService.travelQuotation.approveNow', $submittedTravelEnquiry->id) }}">
                                        <i class="mdi mdi-check"></i> Approve</button>
<button class="btn btn-danger" onclick="reject(this)"
                                        value="{{ route('OneStopService.travelQuotation.rejectNow', $submittedTravelEnquiry->id) }}">
                                        <i class="mdi mdi-close"></i> Reject</button>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col -->
            </div>
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

@endsection
