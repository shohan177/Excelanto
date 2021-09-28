@extends("TravelAgency/master")

@section('title', 'Quotation Detail')
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
                        <h4 class="pull-left page-title">Quotation Detail</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Submitted Quotations</a></li>
                            <li class="active">Quotation Detail</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
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
                                                            <h4>Starting point(From)</h4>
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
                                                    @if ($submittedTravelEnquiry->travelEnquiry->oss->logo)
                                                        <img height="100px;" width="100px;"
                                                            src="{{ asset($submittedTravelEnquiry->travelEnquiry->oss->logo) }}"
                                                            class="profile-user-img img-fluid img-circle"
                                                            alt="User Image" />
                                                    @else
                                                        <img class="profile-user-img img-fluid img-circle" height="70px;"
                                                            src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                            alt="User Image" />
                                                    @endif
                                                    <hr>
                                                    <span class="username">
                                                        <a href="{{ route('TravelAgency.company.showCompanyProfile', $submittedTravelEnquiry->travelEnquiry->oss->id) }}">{{ $submittedTravelEnquiry->travelEnquiry->oss->company_name }} ({{ $submittedTravelEnquiry->travelEnquiry->oss->username }})</a>
                                                    </span>
                                                    <hr>
                                                    <span class="description">Posted on - {{ $submittedTravelEnquiry->travelEnquiry->created_date }}</span>
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
                                                            src="{{ asset($submittedTravelEnquiry->travelAgency->logo) }}"
                                                            class="profile-user-img img-fluid img-circle"
                                                            alt="User Image" />
                                                    @else
                                                        <img class="profile-user-img img-fluid img-circle" height="70px;"
                                                            src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                            alt="User Image" />
                                                    @endif
                                                    <hr>
                                                    <span class="username">
                                                        <a href="{{ route('TravelAgency.company.showCompanyProfile', $submittedTravelEnquiry->travelAgency->id) }}">{{ $submittedTravelEnquiry->travelAgency->company_name }} ({{ $submittedTravelEnquiry->travelEnquiry->oss->username }})</a>
                                                    </span>
                                                    <hr>
                                                    <span class="description">Posted on - {{ $submittedTravelEnquiry->submitted_date }}</span>
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
                                    <p class="text-muted">Submitted quotations need approval from the owner. Please wait for the approval.</p>
                                    <br>
                                    <div class="text-muted">
                                        <p class="text-sm">Date of journey<br>
                                            <b
                                                class="d-block">{{ $submittedTravelEnquiry->travelEnquiry->date_of_journey }}</b><br>
                                        </p>
                                        <p class="text-sm">Enquiry end date<br>
                                            <b
                                                class="d-block">{{ $submittedTravelEnquiry->travelEnquiry->end_date }}</b><br>
                                        </p>
                                        <p class="text-sm">Total Tickets Cost<br>
                                            <b
                                                class="d-block">{{ $submittedTravelEnquiry->submitted_cost }}</b><br>
                                        </p>
                                    </div>

                                    <div class="text-center mt-5 mb-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
