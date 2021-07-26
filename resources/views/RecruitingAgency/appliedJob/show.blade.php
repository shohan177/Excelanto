@extends("RecruitingAgency/master")

@section('title', 'Job Post Detail')
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
                        <h4 class="pull-left page-title">Job Post Detail</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Aplied Job</a></li>
                            <li><a href="#">Recruiting Agency</a></li>
                            <li><a href="#">Job Post Detail</a></li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">About</h3>
                        </div>
                        <div class="panel-body">
                            <strong><i class="fa fa-book mr-1"></i> Company Name</strong>
                            <p class="text-muted">{{  $appliedJob->jobPost->company->company_name}}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Job Category</strong>
                            <p class="text-muted">{{  $appliedJob->jobPost->job_category->category_name}}</p>

                            <hr>

                            <strong><i class="far fa-envelope mr-1"></i> Total Vacancies</strong>
                            <p class="text-muted">{{  $appliedJob->job_vacancy}}</p>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Applied</h3>
                        </div>
                        <div class="panel-body">
                            <strong><i class="fa fa-book mr-1"></i> Company Name</strong>
                            <p class="text-muted">{{  $appliedJob->applier_agency_name}}</p>

                            <hr>

                            <strong><i class="fa fa-book mr-1"></i> Applied Vacancies</strong>
                            <p class="text-muted">{{  $appliedJob->applied_vacancy}}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Remarks / Comments</strong>
                            <p class="text-muted">{{  $appliedJob->remarks}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Approved</h3>
                        </div>
                        <div class="panel-body">
                            <strong><i class="fa fa-book mr-1"></i> Approved Vacancies</strong>
                            <p class="text-muted">{{  $appliedJob->approved_vacancy}}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Remarks / Comments</strong>
                            <p class="text-muted">{{  $appliedJob->approved_remarks}}</p>
                        </div>
                        <div class="panel-footer">
                            <a class="btn btn-secondary float-right" href="{{ route('RecruitingAgency.appliedJob.applied') }}">Back</a>
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
