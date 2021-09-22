@extends("UAEAdmin/master")

@section('title', 'Update result for the visa requested candidate')
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
                        <h4 class="pull-left page-title">Visa Result</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Visa Requested</a></li>
                            <li class="active">Visa Status Result</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update result for the visa requested candidate</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form"
                                action="{{ route('UAEAdmin.visa.visaStatusOfferedCandidateUpdate', $offeredCandidate->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('includes.errors')
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-12 col-md-1 col-lg-1 col-xl-1"></div>
                                    <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="candidateName">Candidate Name</label>
                                                <input readonly type="text" class="form-control" id="candidateName"
                                                    name="candidateName"
                                                    value="{{ $offeredCandidate->candidate->candidate_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input readonly type="email" class="form-control" name="email" id="email"
                                                    value="{{ $offeredCandidate->candidate->candidate_email }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="phoneNo">Phone Number</label>
                                                <input readonly type="text" class="form-control" name="phoneNo" id="phoneNo"
                                                    value="{{ $offeredCandidate->candidate->phone_number }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="jobCategory">Job Category</label>
                                                <input readonly type="text" class="form-control" name="jobCategory"
                                                    id="jobCategory"
                                                    value="{{ $offeredCandidate->job_category->category_name }}">
                                            </div>
                                        </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="resultStatus">Result Status</label>
                                                <select class="form-control custom-select" name="resultStatus"
                                                    id="resultStatus" required>
                                                    <option selected disabled value="">Select visa status</option>
                                                    <option @if ($offeredCandidate->result_status == "Visa-Approved") selected @endif value="Visa-Approved">Visa approved for the job</option>
                                                    <option @if ($offeredCandidate->result_status == "Visa-Rejected") selected @endif value="Visa-Rejected">Visa rejected for the job</option>
                                                </select>
                                            </div>
                                            <div class="form-group" id="documentDiv" style="display: none;">
                                                <label for="document">Upload visa approval document (Only PDF)</label>
                                                <div class="input-group">
                                                    <div class="col-sm-4" style="padding-top:6px;">
                                                        <input type="file" accept="application/pdf" name="document">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="rejectReasonDiv" style="display: none;">
                                                <label for="rejectReason">Reason / Comments</label>
                                                <textarea class="form-control" rows="4" name="rejectReason"></textarea>
                                            </div>
                                        </div> <!-- panel-body -->
                                    </div> <!-- col -->
                                    <div class="col-sm-12 col-md-1 col-lg-1 col-xl-1"></div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class=" text-right">
                                            <button type="submit"
                                                class="btn btn-info waves-effect waves-ligh">Submit</button>
                                        </div>
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
@section('js')
    <script>
        $(document).ready(function() {
            $("#documentDiv").hide();
            $("#rejectReasonDiv").hide();
            $("#resultStatus").change(function() {
                var ResultData = $('#resultStatus').val();
                if (ResultData == "Visa-Approved") {
                    $("#documentDiv").show();
                    $("#rejectReasonDiv").hide();
                } else {
                    $("#documentDiv").hide();
                    $("#rejectReasonDiv").show();
                }
            });
        });
    </script>
@endsection

@section('js')

@endsection
@section('DataTableJs')

@endsection
