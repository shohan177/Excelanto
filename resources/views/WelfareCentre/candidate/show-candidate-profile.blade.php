@extends("WelfareCentre/master")

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
                                    <b>Phone</b> <a class="float-right">{{ $offeredCandidate->phone_number }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{ $offeredCandidate->candidate_email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Registered on</b> <a class="float-right">{{ $offeredCandidate->created_at }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>WSC</b> <a
                                        class="float-right">{{ $offeredCandidate->selectedWSC->company_name }}</a>
                                </li>
                                <a href="{{ route('WelfareCentre.meet_greet_request') }}"
                                    class="btn btn-primary btn-block"><b>Back</b></a>
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
                                <li class="nav-item"><a class="nav-link active" href="#personal"
                                        data-toggle="tab">Personal</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#employment"
                                        data-toggle="tab">Employment</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#document"
                                        data-toggle="tab">Documents</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="personal">
                                    <strong><i class="fa fa-user mr-1"></i>Gender</strong>
                                    <p class="text-muted">{{ $offeredCandidate->candidate->candidate_gender }}</p>

                                    <hr>

                                    <strong><i class="fa fa-calendar mr-1"></i> Date of Birth</strong>
                                    <p class="text-muted">{{ $offeredCandidate->candidate->candidate_dob }}</p>

                                    <hr>

                                    <strong><i class="fa fa-flag mr-1"></i> Nationality</strong>
                                    <p class="text-muted">{{ $offeredCandidate->candidate->nationality }}</p>

                                    <hr>

                                    <strong><i class="fa fa-pencil mr-1"></i> Passport Number</strong>
                                    <p class="text-muted">{{ $offeredCandidate->candidate->passport_number }}</p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker mr-1"></i> Permanent Address</strong>
                                    <p class="text-muted">{{ $offeredCandidate->candidate->permanent_address }}</p>
                                </div>
                                <div class="tab-pane" id="employment">
                                    <strong><i class="fa fa-user mr-1"></i> Present City/Town</strong>
                                    <p class="text-muted">{{ $offeredCandidate->createdUser->city }}</p>

                                    <hr>

                                    <strong><i class="fa fa-flag mr-1"></i> State</strong>
                                    <p class="text-muted">{{ $offeredCandidate->createdUser->state }}</p>

                                    <hr>

                                    <strong><i class="fa fa-flag mr-1"></i> Country</strong>
                                    <p class="text-muted">{{ $offeredCandidate->createdUser->country->country_name }}</p>

                                    <hr>

                                    <strong><i class="fa fa-file mr-1"></i> Company Name</strong>
                                    <p class="text-muted">{{ $offeredCandidate->createdUser->company_name }}</p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker mr-1"></i> Present Address</strong>
                                    <p class="text-muted">{{ $offeredCandidate->createdUser->address1 }}</p>
                                </div>
                                <div class="tab-pane" id="document">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th>File Name</th>
                                            <th>Category</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>UAT.pdf</td>
                                            <td>Bio-data</td>
                                            <td class="text-right py-0 align-middle">
                                              <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-eye"></i></a>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>Email-from-flatbal.mln</td>
                                            <td>Passport</td>
                                            <td class="text-right py-0 align-middle">
                                              <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-eye"></i></a>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>Logo.png</td>
                                            <td>Visa</td>
                                            <td class="text-right py-0 align-middle">
                                              <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-eye"></i></a>
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>

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
