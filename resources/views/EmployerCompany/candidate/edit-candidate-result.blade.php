@extends("EmployerCompany/master")

@section('title', 'Candidate Result')
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
                        <h4 class="pull-left page-title">Candidate Result</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Candidates
                                </a></li>
                            <li class="active">Candidate Result</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update result for the candidate</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{ route('EmployerCompany.candidate.updateCandidateResult', $candidate->id) }}" method="POST"
                                enctype="multipart/form-data">
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
                                                    name="candidateName" value="{{ $candidate->candidate_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input readonly type="email" class="form-control" name="email" id="email"
                                                    value="{{ $candidate->candidate_email }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="phoneNo">Phone Number</label>
                                                <input readonly type="text" class="form-control" name="phoneNo" id="phoneNo"
                                                    value="{{ $candidate->phone_number }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="jobCategory">Job Category</label>
                                                <select disabled class="form-control" name="jobCategory">
                                                    <option value="">Select job category</option>
                                                    @foreach ($jobCategories as $cat)
                                                        <option @if ($candidate->job_category_id == $cat->id) selected @endif
                                                            value="{{ $cat->id }}">{{ $cat->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="resultStatus">Result Status</label>
                                                <select class="form-control" id="resultStatus" name="resultStatus" required="">
                                                    <option value="">Select candidate status</option>
                                                    <option @if ($candidate->status == 'Selected') selected @endif value="Selected">Selected for
                                                        the job</option>
                                                    <option @if ($candidate->status == 'Interview') selected @endif value="Interview">To be
                                                        interviewed</option>
                                                    <option @if ($candidate->status == 'Rejected') selected @endif value="Rejected">Rejected for
                                                        the job</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="comments">Remarks / Comments</label>
                                                <textarea class="form-control" name="comments" id="comments" type="text"
                                                    cols="30" rows="4">{{ old('comments') }}</textarea>
                                            </div>
                                            <div class="form-group" id="offerLetterGroup">
                                                <label for="offerLetter">Upload Offer Letter (Only PDF)</label>
                                                <input type="file" class="form-control" id="offerLetter" name="offerLetter">
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
            $("#offerLetterGroup").hide();
            $("#resultStatus").change(function() {
                var ResultData = $('#resultStatus').val();
                if (ResultData == "Selected") {
                    $("#offerLetterGroup").show();

                } else {
                    $("#offerLetterGroup").hide();

                }
            });
        });
    </script>
@endsection
@section('DataTableJs')

@endsection
