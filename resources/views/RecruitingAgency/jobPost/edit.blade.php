@extends("RecruitingAgency/master")

@section('title', 'Apply Job')
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
                        <h4 class="pull-left page-title">Apply Job</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Job Posts</a></li>
                            <li><a href="#">Recruiting Agency</a></li>
                            <li><a href="#"> Apply Job </a></li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Apply for the job</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('RecruitingAgency.jobPost.update', $jobPost->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label for="username">User Name</label>
                                                <input type="text" class="form-control" id="username" readonly name="username" value="{{ $jobPost->company->user_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="companyName">Company Name</label>
                                                <input type="text" class="form-control" id="companyName" readonly name="companyName" value="{{ $jobPost->company->company_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="jobCategory">Job Category</label>
                                                <input type="text" class="form-control" id="jobCategory" readonly name="jobCategory" value="{{ $jobPost->job_category->category_name }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="jobVacancy">Job Vacancy</label>
                                                <input type="text" class="form-control" id="jobVacancy" readonly name="jobVacancy" value="{{ $jobPost->job_vacancy }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="appliedVacancy">No. of vacancy can apply</label>
                                                <input type="text" class="form-control" id="appliedVacancy" name="appliedVacancy" value="{{ $jobPost->applied_vacancy }}">
                                            </div>
                                            <div class="form-group" id="remarks">
                                                <label for="remarks">Remarks / Comments (if any)</label>
                                                <textarea class="form-control" rows="3" placeholder="Write Remarks.."
                                                    name="remarks"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                </div> <!-- End row -->
                                <div class="panel-footer text-right">
                                    <button type="submit" name="btnsave"
                                        class="btn btn-md btn-primary float-right">Submit</button>
                                </div>
                            </form>
                        </div><!-- panel-body -->
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
