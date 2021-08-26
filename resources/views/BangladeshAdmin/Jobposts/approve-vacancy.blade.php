@extends("BangladeshAdmin/master")

@section('title', 'Approve Vacancy')
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
                        <h4 class="pull-left page-title">Approve Vacancy</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Job Posts</a></li>
                            <li class="active">Approval Vacancy</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Vacancy Allocations</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{ route('BangladeshAdmin.jobPost.approveVacancyStore', $appliedJob->id ) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $appliedJob->id }}">
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="totalVacancy">Total Job Vacancies</label>
                                                    <input type="text" readonly value="{{ $appliedJob->job_vacancy }}" class="form-control" id="totalVacancy" name="totalVacancy">
                                                </div>
                                                <div class="form-group">
                                                    <label for="appliedVacancy">Applied Vacancies</label>
                                                    <input type="text" readonly value="{{ $appliedJob->applied_vacancy }}" class="form-control" id="appliedVacancy" name="appliedVacancy">
                                                </div>
                                                <div class="form-group">
                                                    <label for="approvedVacancy">Approved Vacancies</label>
                                                    <input type="text" class="form-control" id="approvedVacancy" name="approvedVacancy">
                                                </div>
                                            </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="comments">Comments</label>
                                                    <textarea class="form-control"  name="comments" id="comments" type="text" cols="30" rows="8"></textarea>
                                                </div>
                                            </div> <!-- panel-body -->
                                    </div> <!-- col -->
                                    <div class=" text-right">
                                        <button type="submit" class="btn btn-info waves-effect waves-ligh">Submit</button>
                                    </div>
                                </div> <!-- End row -->
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
