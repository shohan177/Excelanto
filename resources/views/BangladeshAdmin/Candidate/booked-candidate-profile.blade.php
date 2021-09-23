@extends("BangladeshAdmin/master")

@section('title', 'Candidate Profile')
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
                        <h4 class="pull-left page-title">Candidate Profile</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Candidates
                                </a></li>
                            <li class="active">Candidate Profile</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- Profile Image -->
                    <div class="panel panel-secondary card-outline">
                        <div class="panel-body box-profile">
                            <div class="text-center">
                                @if ($offeredCandidate->candidate->candidate_picture)
                                    <img height="100px;" width="100px;"
                                        src="{{ asset($offeredCandidate->candidate->candidate_picture) }}"
                                        class="profile-user-img img-fluid img-circle" alt="User Image" />
                                @else
                                    <img class="profile-user-img img-fluid img-circle" height="70px;"
                                        src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="User Image" />
                                @endif
                            </div>

                            <h3 class="profile-username text-center">{{ $offeredCandidate->candidate_name }}</h3>

                            <p class="text-muted text-center">{{ $offeredCandidate->job_category->category_name }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Date of Birth</b> <a
                                        class="float-right">{{ $offeredCandidate->candidate->candidate_dob }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Phone</b> <a class="float-right">{{ $offeredCandidate->phone_number }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{ $offeredCandidate->candidate_email }}</a>
                                </li>

                                @if ($offeredCandidate->travel_status == 'Ticket-Issued')
                                    <li class="list-group-item">
                                        <b>Status</b> <a class="float-right"> <button type="button"
                                                class="btn btn-success btn-xs update">Ticket-Issued</button>
                                    </li>
                                    <button class="btn btn-primary btn-block" onclick="forwardToUae(this)"
                                    value="{{ route('BangladeshAdmin.candidate.forwardToUae', $offeredCandidate->id) }}">
                                    <i class="fa fa-share"></i> Forward to
                                    UAE</button>
                                @elseif ($offeredCandidate->travel_status == 'Forwarded')
                                    <li class="list-group-item">
                                        <b>Status</b> <a class="float-right"> <button type="button"
                                                class="btn btn-success btn-xs update">Forwarded</button>
                                    </li>
                                    <button class="btn btn-primary btn-block" disabled onclick="forwardToUae(this)"
                                    value="{{ route('BangladeshAdmin.candidate.forwardToUae', $offeredCandidate->id) }}">
                                    <i class="fa fa-share"></i> Forward to
                                    UAE</button>
                                @endif
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">About</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Documents</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#results" data-toggle="tab">Results</a></li>
                                <li class="nav-item"><a class="nav-link" href="#travel" data-toggle="tab">Travel</a></li>
                                <li class="nav-item"><a class="nav-link" href="#payments" data-toggle="tab">Payments</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity"> <strong><i class="fa fa-pencil mr-1"></i>
                                        Passport Number</strong>
                                    <p class="text-muted">{{ $offeredCandidate->candidate->passport_number }}</p>
                                    <hr>
                                    <strong><i class="fa fa-user mr-1"></i> Nationality</strong>
                                    <p class="text-muted">{{ $offeredCandidate->candidate->nationality }}</p>
                                    <hr>
                                    <strong><i class="fa fa-map-marker mr-1"></i> Present Address</strong>
                                    <p class="text-muted">{{ $offeredCandidate->candidate->present_address }}</p>
                                    <hr>
                                    <strong><i class="fa fa-map-marker mr-1"></i> Permanent Address</strong>
                                    <p class="text-muted">{{ $offeredCandidate->candidate->permanent_address }}</p>
                                </div> <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <strong><i class="fa fa-camera mr-1"></i>Bio-data</strong>
                                    <div class="mailbox-attachment-info"> <a
                                            href="../candidates_resume/{{ $offeredCandidate->candidate->candidate_resume }}"
                                            class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                            {{ $offeredCandidate->candidate->candidate_resume }}</a>
                                        <a href="../candidates_resume/{{ $offeredCandidate->candidate->candidate_resume }}"
                                            download class="btn btn-default btn-xs float-right"> <i
                                                class="fa fa-cloud-download"></i></a>
                                    </div>
                                    <hr>
                                    <strong><i class="fa fa-camera mr-1"></i>Passport</strong>
                                    <div class="mailbox-attachment-info"> <a
                                            href="../candidates_passport/{{ $offeredCandidate->candidate->candidate_passport }}"
                                            class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                            {{ $offeredCandidate->candidate->candidate_passport }}</a>
                                        <a href="../candidates_passport/{{ $offeredCandidate->candidate->candidate_passport }}"
                                            download class="btn btn-default btn-xs float-right"><i
                                                class="fa fa-cloud-download"></i></a>
                                    </div>
                                    <hr>
                                    @if($offeredCandidate->candidate->pre_medical_certificate)
                                        <a href="{{ asset($offeredCandidate->candidate->pre_medical_certificate) }}" target="_blank">
                                            <strong><i class="fa fa-file mr-1"></i> Pre-Medical Certificate</strong>
                                        </a>
                                        <div class="mailbox-attachment-info">
                                            <a href="{{ asset($offeredCandidate->candidate->pre_medical_certificate) }}" download class="btn btn-default btn-xs float-right"><i class="fa fa-cloud-download"></i></a>
                                        </div>
                                    @else
                                        <a title="Sorry there is no document">
                                            <strong><i class="fa fa-file mr-1"></i> Pre-Medical Certificate</strong>
                                            <div class="mailbox-attachment-info">
                                                <a href="#" class="btn btn-default btn-xs float-right"><i class="fa fa-cloud-download"></i></a>
                                            </div>
                                        </a>
                                    @endif
                                    <hr>
                                    @if($offeredCandidate->candidate->pre_training_certificate)
                                        <a href="{{ asset($offeredCandidate->candidate->pre_training_certificate) }}" target="_blank">
                                            <strong><i class="fa fa-file mr-1"></i> Pre-Training Certificate</strong>
                                        </a>
                                        <div class="mailbox-attachment-info">
                                            <a href="{{ asset($offeredCandidate->candidate->pre_training_certificate) }}" download class="btn btn-default btn-xs float-right"><i class="fa fa-cloud-download"></i></a>
                                        </div>
                                    @else
                                        <a title="Sorry there is no document">
                                            <strong><i class="fa fa-file mr-1"></i> Pre-Training Certificate</strong>
                                            <div class="mailbox-attachment-info">
                                                <a href="#" class="btn btn-default btn-xs float-right"><i class="fa fa-cloud-download"></i></a>
                                            </div>
                                        </a>
                                    @endif
                                    <hr>
                                    <strong><i class="fa fa-camera mr-1"></i>Biometric</strong>
                                    <div class="mailbox-attachment-info"> <a
                                            href="../pre_training_certificate/ {{ $offeredCandidate->candidate->pre_training_certificate }}"
                                            class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                            {{ $offeredCandidate->candidate->pre_training_certificate }}</a>
                                        <a href="../pre_training_certificate/ {{ $offeredCandidate->candidate->pre_training_certificate }}"
                                            download class="btn btn-default btn-xs float-right"><i
                                                class="fa fa-cloud-download"></i></a>
                                    </div>
                                    <hr>
                                    <strong><i class="fa fa-camera mr-1"></i>Post-Medical Certificate</strong>
                                    <div class="mailbox-attachment-info"> <a
                                            href="../pre_training_certificate/ {{ $offeredCandidate->candidate->pre_training_certificate }}"
                                            class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                            {{ $offeredCandidate->candidate->pre_training_certificate }}</a>
                                        <a href="../pre_training_certificate/ {{ $offeredCandidate->candidate->pre_training_certificate }}"
                                            download class="btn btn-default btn-xs float-right"><i
                                                class="fa fa-cloud-download"></i></a>
                                    </div>
                                    <hr>
                                    <strong><i class="fa fa-camera mr-1"></i>Post-Training Certificate</strong>
                                    <div class="mailbox-attachment-info"> <a
                                            href="../pre_training_certificate/ {{ $offeredCandidate->candidate->pre_training_certificate }}"
                                            class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                            {{ $offeredCandidate->candidate->pre_training_certificate }}</a>
                                        <a href="../pre_training_certificate/ {{ $offeredCandidate->candidate->pre_training_certificate }}"
                                            download class="btn btn-default btn-xs float-right"><i
                                                class="fa fa-cloud-download"></i></a>
                                    </div>

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="results">
                                    <strong><i class="fa fa-user mr-1"></i> Company Name</strong>
                                    <p class="text-muted">{{ $offeredCandidate->createdUser->name }}</p>
                                    <hr>
                                    <strong><i class="fa fa-pencil mr-1"></i> Employer Comments</strong>
                                    <p class="text-muted">{{ $offeredCandidate->employer_comments }}</p>
                                    <hr>
                                    <strong><i class="fa fa-pencil mr-1"></i> Visa Status</strong>
                                    <p class="text-muted">{{ $offeredCandidate->result_status }}</p>
                                    <hr>
                                    <strong><i class="fa fa-camera mr-1"></i>Candidate-OfferLetter</strong>
                                    <div class="mailbox-attachment-info"> <a
                                            href="../offer_letter/{{ $offeredCandidate->offer_letter }}"
                                            class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                            {{ $offeredCandidate->offer_letter }}</a>
                                        <a href="../offer_letter/{{ $offeredCandidate->offer_letter }}" download
                                            class="btn btn-default btn-xs float-right"> <i
                                                class="fa fa-cloud-download"></i></a>
                                    </div>
                                    <hr>
                                    <strong><i class="fa fa-camera mr-1"></i>Visa Approval Document</strong>
                                    <div class="mailbox-attachment-info"> <a
                                            href="../visa_document/{{ $offeredCandidate->visa_document }}"
                                            class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                            {{ $offeredCandidate->offer_letter }}</a>
                                        <a href="../visa_document/{{ $offeredCandidate->visa_document }}" download
                                            class="btn btn-default btn-xs float-right"> <i
                                                class="fa fa-cloud-download"></i></a>
                                    </div>
                                </div> <!-- /.tab-content -->
                                <div class="tab-pane" id="travel">
                                    <strong><i class="fa fa-pencil mr-1"></i>Date of Journey</strong>
                                    <p class="text-muted">{{ $offeredCandidate->date_of_jounney }}</p>
                                    <hr>
                                    <strong><i class="fa fa-user mr-1"></i> Flight Number</strong>
                                    <p class="text-muted">{{ $offeredCandidate->flight_number }}</p>
                                    <hr>
                                    <strong><i class="fa fa-money mr-1"></i> Ticket Cost</strong>
                                    <p class="text-muted">{{ $offeredCandidate->ticket_cost }}</p>
                                    <hr>
                                    <strong><i class="fa fa-camera mr-1"></i>Flight Ticket</strong>
                                    <div class="mailbox-attachment-info"> <a
                                            href="../visa_documents/{{ $offeredCandidate->ticket_pdf }}"
                                            class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                            {{ $offeredCandidate->ticket_pdf }}</a>
                                        <a href="../visa_documents/{{ $offeredCandidate->ticket_pdf }}" download
                                            class="btn btn-default btn-xs float-right"> <i
                                                class="fa fa-cloud-download"></i></a>
                                    </div>
                                </div> <!-- /.tab-content -->
                                <div class="tab-pane" id="payments">
                                    <h4>Total Amount Assigned <b>{{ $offeredCandidate->payment_assigned }} - BDT</b></h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Biometric Fee</th>
                                                <td>{{ $offeredCandidate->biometric_fee }}</td>
                                                <td class="project-state">
                                                    <span class="badge badge-success">Paid</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Medical Fee</th>
                                                <td>{{ $offeredCandidate->medical_fee }}</td>
                                                <td class="project-state">
                                                    <span class="badge badge-success">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Training Fee</th>
                                                <td>{{ $offeredCandidate->training_fee }}</td>
                                                <td class="project-state">
                                                    <span class="badge badge-success">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Travel Fee</th>
                                                <td>{{ $offeredCandidate->ticket_cost }}</td>
                                                <td class="project-state">
                                                    <span class="badge badge-success">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Total Amonut Paid</th>
                                                <td><b>{{ $offeredCandidate->biometric_fee + $offeredCandidate->training_fee + $offeredCandidate->medical_fee + $offeredCandidate->ticket_cost }} - BDT</b></td>
                                                <td class="project-state">
                                                    <span class="badge badge-success">Paid</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div> <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div> <!-- /.nav-tabs-custom -->
                    </div> <!-- /.col -->
                </div>
                <!-- /.col -->
            </div>
        </div> <!-- container -->
    </div>
    <!--End content -->
    <script>
        function forwardToUae(objButton) {
            var url = objButton.value;
            // alert(objButton.value)
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Forward !'
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
                                    'Forwarded !',
                                    'This candidate has been Forwarded. ' + data.message,
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
