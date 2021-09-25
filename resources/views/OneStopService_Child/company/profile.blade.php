@extends("OneStopService_Child/master")

@section('title', 'Company Profile')
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
                        <h4 class="pull-left page-title">Company Profile</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li class="active">Company Profile</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-secondary card-outline">

                        <div class="panel-body box-profile">
                            <div class="text-center">
                                @if ($user->logo)
                                    <img height="100px;" width="100px;" src="{{ asset($user->logo) }}"
                                        class="profile-user-img img-fluid img-circle" alt="User Image" />
                                @else
                                    <img class="profile-user-img img-fluid img-circle" height="70px;"
                                        src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="User Image" />
                                @endif
                            </div>

                            <h3 class="profile-username text-center">{{ $user->company_name }}</h3>

                            <p class="text-muted text-center">{{ $user->domain }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                              <li class="list-group-item">
                                <b>Email</b> <a class="float-right">{{ $user->email }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>City / Town</b> <a class="float-right">{{ $user->city }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>State</b> <a class="float-right">{{ $user->state }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Country</b> <a class="float-right">{{ $user->country->country_name }}</a>
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
                                <li class="nav-item"><a class="nav-link" href="#Documents" data-toggle="tab">Documents</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">


                                    <strong><i class="fa fa-book mr-1"></i> Abbreviation</strong>
                                    <p class="text-muted">
                                      {{ $user->abbr }}
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-pencil mr-1"></i> Register Number</strong>
                                    <p class="text-muted">{{ $user->company_register_number }}</p>

                                    <hr>

                                    <strong><i class="fa fa-phone mr-1"></i> Phone Number</strong>
                                    <p class="text-muted">{{ $user->phone }}</p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker mr-1"></i> Address 1</strong>
                                    <p class="text-muted">{{ $user->address1 }}</p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker mr-1"></i> Address 2</strong>
                                    <p class="text-muted">{{ $user->address2 }}</p>
                                </div> <!-- /.tab-pane -->
                                <div class="tab-pane" id="Documents">
                                    @if($user->document1)
                                        <a href="{{ asset($user->document1) }}" target="_blank">
                                            <strong><i class="fa fa-file mr-1"></i> Document 1</strong>
                                        </a>
                                        <div class="mailbox-attachment-info">
                                            <a href="{{ asset($user->document1) }}" download class="btn btn-default btn-xs float-right"><i class="fa fa-cloud-download"></i></a>
                                        </div>
                                    @else
                                        <a title="Sorry there is no document">
                                            <strong><i class="fa fa-file mr-1"></i> Document 1</strong>
                                            <div class="mailbox-attachment-info">
                                                <a href="#" class="btn btn-default btn-xs float-right"><i class="fa fa-cloud-download"></i></a>
                                            </div>
                                        </a>
                                    @endif
                                    <hr>
                                    @if($user->document2)
                                        <a href="{{ asset($user->document2) }}" target="_blank">
                                            <strong><i class="fa fa-file mr-1"></i> Document 2</strong>
                                        </a>
                                        <div class="mailbox-attachment-info">
                                            <a href="{{ asset($user->document2) }}" download class="btn btn-default btn-xs float-right"><i class="fa fa-cloud-download"></i></a>
                                        </div>
                                    @else
                                        <a title="Sorry there is no document">
                                            <strong><i class="fa fa-file mr-1"></i> Document 2</strong>
                                            <div class="mailbox-attachment-info">
                                                <a href="#" class="btn btn-default btn-xs float-right"><i class="fa fa-cloud-download"></i></a>
                                            </div>
                                        </a>
                                    @endif
                                </div> <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div> <!-- /.nav-tabs-custom -->
                    </div> <!-- /.col -->
                </div>
            </div>
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
