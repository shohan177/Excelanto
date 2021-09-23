@extends("OneStopService_Child/master")

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
                            <li class="list-group-item">
                                <b>Status</b>
                                @if ($offeredCandidate->result_status == 'Assigned')
                                <span class="float-right badge badge-info">Post-Recommended</span>
                                @else
                                    <span
                                        class="float-right badge badge-info">{{ $offeredCandidate->result_status }}</span>
                                @endif

                            </li>
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
                            <div class="tab-pane" id="timeline"> <strong><i
                                        class="fa fa-camera mr-1"></i>Bio-data</strong>
                                <div class="mailbox-attachment-info"> <a
                                        href="../candidates_resume/{{ $offeredCandidate->candidate_resume }}"
                                        class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                        {{ $offeredCandidate->candidate->candidate_resume }}</a>
                                    <a href="../candidates_resume/{{ $offeredCandidate->candidate_resume }}" download
                                        class="btn btn-default btn-xs float-right"> <i
                                            class="fa fa-cloud-download"></i></a>
                                </div>
                                <hr>
                                <strong><i class="fa fa-camera mr-1"></i>Passport</strong>
                                <div class="mailbox-attachment-info"> <a
                                        href="../candidates_passport/{{ $offeredCandidate->candidate_passport }}"
                                        class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                        {{ $offeredCandidate->candidate->candidate_passport }}</a>
                                    <a href="../candidates_passport/{{ $offeredCandidate->candidate_passport }}"
                                        download class="btn btn-default btn-xs float-right"><i
                                            class="fa fa-cloud-download"></i></a>
                                </div>
                                <hr>
                                @if($offeredCandidate->post_medical_report)
                                        <a href="{{ asset($offeredCandidate->post_medical_report) }}" target="_blank">
                                            <strong><i class="fa fa-file mr-1"></i> Pre-Medical Certificate</strong>
                                        </a>
                                        <div class="mailbox-attachment-info">
                                            <a href="{{ asset($offeredCandidate->post_medical_report) }}" download class="btn btn-default btn-xs float-right"><i class="fa fa-cloud-download"></i></a>
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
                                <strong><i class="fa fa-camera mr-1"></i>Pre-Training Certificate</strong>
                                <div class="mailbox-attachment-info"> <a
                                        href="../pre_training_certificate/{{ $offeredCandidate->pre_training_certificate }}"
                                        class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                        {{ $offeredCandidate->candidate->pre_training_certificate }}</a>
                                    <a href="../pre_training_certificate/{{ $offeredCandidate->pre_training_certificate }}"
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
                                <strong><i class="fa fa-user mr-1"></i> One Stop Center</strong>
                                <p><a href="{{ route('OneStopService_Child.company.showCompanyProfile', $offeredCandidate->selected_osc_id) }}" class="mailbox-attachment-name">{{  $offeredCandidate->selectedOSC->name }}</a></p>
                                <hr>
                                <strong><i class="fa fa-pencil mr-1"></i> Payable Fees</strong>
                                <p class="text-muted">{{  $offeredCandidate->payment_assigned }}</p>
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
@endsection

@section('DataTableJs')

@endsection
