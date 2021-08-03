@extends("EmployerCompany/master")

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
                                <img height="100px;" width="100px;" class="profile-user-img img-fluid img-circle"
                                    src="{{ asset($candidate->candidate_picture) }}" alt="User Image">
                            </div>

                            <h3 class="profile-username text-center">{{ $candidate->candidate_name }}</h3>

                            <p class="text-muted text-center">{{ $candidate->job_category->category_name }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Date of Birth</b> <a class="float-right">{{ $candidate->candidate_dob }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Phone</b> <a class="float-right">{{ $candidate->phone_number }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{ $candidate->candidate_email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status</b> <span
                                        class="float-right badge badge-info">{{ $candidate->status }}</span>
                                </li>
                            </ul>

                            @if ($candidate->status == 'Reviewed')
                                <button type="button" disabled class="btn btn-primary btn-block "> <i
                                        class="fa fa-pencil mr-1"></i> Result</b></button>
                            @else
                                <a href="{{ route('EmployerCompany.candidate.editCandidateResult', $candidate->id) }}" class="btn btn-primary btn-block"><b><i class="fa fa-pencil mr-1"></i>Result</b></a>
                            @endif
                            <a href="#" download class="btn btn-secondary btn-block"> <b> <i class="fa fa-download"></i> Bio-data </b></a>
                            <a href="#" download class="btn btn-secondary btn-block"><b><i class="fa fa-download"></i> Passport </b></a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-md-8">
                    <!-- About Me Box -->
                    <div class="panel panel-secondary">
                        <div class="panel-heading">
                            <h3 class="panel-title">About</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Passport Number</strong>
                            <p class="text-muted">{{ $candidate->passport_number }}</p>

                            <hr>

                            <strong><i class="far fa-user mr-1"></i> Nationality</strong>
                            <p class="text-muted">{{ $candidate->nationality }}</p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Present Address</strong>
                            <p class="text-muted">{{ $candidate->present_address }}</p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Permanent Address</strong>
                            <p class="text-muted">{{ $candidate->permanent_address }}</p>
                            <hr>
                            <strong><i class="fa fa-camera mr-1"></i>Pre-Medical Certificate</strong>
                            <div class="mailbox-attachment-info">
                                <a href="../pre_medical_certificate/{{ $candidate->pre_medical_certificate }}"
                                    class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                    {{ $candidate->pre_medical_certificate }}</a>

                                <a href="../pre_medical_certificate/{{ $candidate->pre_medical_certificate }}" download
                                    class="btn btn-default btn-sm float-right"> <i class="fa fa-cloud-download-alt"></i></a>

                            </div>

                            <hr>
                            <strong><i class="fa fa-camera mr-1"></i>Pre-Training Certificate</strong>
                            <div class="mailbox-attachment-info">
                                <a href="../pre_training_certificate/{{ $candidate->pre_training_certificate }}"
                                    class="mailbox-attachment-name"><i class="fa fa-file"></i>
                                    {{ $candidate->pre_training_certificate }}</a>

                                <a href="../pre_training_certificate/{{ $candidate->pre_training_certificate }}" download
                                    class="btn btn-default btn-sm float-right"> <i class="fa fa-cloud-download-alt"></i></a>

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
@endsection

@section('DataTableJs')

@endsection
