@extends("RecruitingAgency/master")

@section('title', 'View Job Post')
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
                        <h4 class="pull-left page-title">View Job Post</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Job Posts</a></li>
                            <li><a href="#">Recruiting Agency</a></li>
                            <li><a href="#"> View Job Post </a></li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-primary panel-outline">
                        <div class="panel-body box-profile">

                            <h3 style="font-weight:bolder;text-align:center;color:blue;">Company Details</h3>

                            <h4 style="font-weight:bolder;text-align:center;">{{ $jobPost->company_id }}</h4>

                            <h6 style="text-align:center;">{{ $jobPost->company->email }}</h6>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <center><b><i class="fa fa-book mr-1"></i>Schedule Detials </b> </center>
                                </li>
                                <li class="list-group-item">
                                    <b>Appointment Date</b> <a class="float-right">{{ $jobPost->appointment_date }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Appointment Time</b> <a class="float-right">{{ $jobPost->appointment_time }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Job Posted by</b> <a class="float-right">Employer</a>
                                </li>
                            </ul>

                            <a href="#" download="" class="btn btn-primary btn-block">
                                <b><i class="fa fa-download"></i> Demand Letter </b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">About Jobs</h3>
                        </div>
                        <div class="panel-body">
                            <strong><i class="fa fa-book mr-1"></i> Job Category</strong>
                            <p class="text-muted">{{ $jobPost->job_category->category_name }}</p>
                            <hr>
                            <strong><i class="fa fa-pencil mr-1"></i> Employment Type</strong>
                            <p class="text-muted">{{ $jobPost->employment_type }}</p>
                            <hr>
                            <strong><i class="fa fa-map mr-1"></i> Job Location</strong>
                            <p class="text-muted">{{ $jobPost->job_location }}</p>
                            <hr>
                            <strong><i class="fa fa-calendar mr-1"></i> End Date</strong>
                            <p class="text-muted">{{ $jobPost->end_date }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">About candidate</h3>
                        </div>
                        <div class="panel-body">
                            <strong><i class="fa fa-users mr-1"></i> Job Vacancy</strong>
                            <p class="text-muted">{{ $jobPost->job_vacancy }}</p>
                            <hr>
                            <strong><i class="fa fa-user mr-1"></i> Gender</strong>
                            <p class="text-muted">{{ $jobPost->gender }}</p>
                            <hr>
                            <strong><i class="fa fa-user mr-1"></i> Age Limit</strong>
                            <p class="text-muted">{{ $jobPost->age_limit }}</p>
                            <hr>
                            <strong><i class="fa fa-money mr-1"></i> Salary</strong>
                            <p class="text-muted">{{ $jobPost->salary }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
