@extends("OneStopService/master")

@section('title', 'Approved Quotations')
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
                        <h4 class="pull-left page-title">Approved Quotations</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Quotation Detail</a></li>
                            <li class="active">Approved Quotations</li>
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
                                                        <img height="100px;" width="100px;"
                                                            src="{{ asset($user->logo) }}"
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
                                    <h3 class="text-success"><i class="fa fa-edit"></i> Approved</h3>
                                    <p class="text-muted">Your quotation is approved now. Book tickets for the journey.</p>
                                    <br>
                                    <div class="text-muted">
                                        <p class="text-sm">Date of journey
                                            <b
                                                class="d-block">{{ $submittedTravelEnquiry->travelEnquiry->date_of_journey }}</b>
                                        </p>
                                        <p class="text-sm">Enquiry end date
                                            <b class="d-block">{{ $submittedTravelEnquiry->travelEnquiry->end_date }}</b>
                                        </p>
                                        <p class="text-sm">Total Tickets
                                            <b class="d-block">{{ $submittedTravelEnquiry->total_tickets }}</b>
                                        </p>
                                    </div>
                                    <div class="text-center mt-5 mb-3">
                                        <a class="btn btn-info"
                                        href="{{ route('OneStopService.travelQuotation.selectCandidates') }}">
                                        <i class="fa fa-edit"></i> Select travel people
                                    </a>
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
@endsection

@section('DataTableJs')

@endsection
