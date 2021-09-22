@extends("EmployerCompany/master")

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
                            <h3 class="panel-title">Vacancy Allocations</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{ route('EmployerCompany.candidates.update', $candidate->id ) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                      <div class="form-group">
                                        <label for="Candidate Name">Candidate Name</label>
                                        <input type="text" class="form-control" id="CandidateName" name="candidate_name" value="{{ $candidate->candidate_name }}" readonly="">
                                      </div>
                                      <div class="form-group">
                                        <label for="Candidate Email">Email</label>
                                        <input type="text" class="form-control" id="CandidateEmail" name="candidate_email" value="{{ $candidate->candidate_email }}" readonly="">
                                      </div>
                                      <div class="form-group">
                                        <label for="Candidate Phone">Phone Number</label>
                                        <input type="text" class="form-control" id="CandidatePhone" name="phone_number" value="{{ $candidate->phone_number }}" readonly="">
                                      </div>
                                                <div class="form-group">
                                        <label for="Candidate Phone">Job Category</label>
                                        <input type="text" class="form-control" id="job_category" name="job_category" value="{{ $candidate->job_category->category_name }}" readonly="">
                                      </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <div class="form-group">
                                          <label for="Result Status">Result Status</label>
                                          <select class="form-control my-select-changer" name="result_status" id="result_status" required="">
                                            @if ($candidate->result_status != null)
                                                <option {{ $candidate->result_status == 'Selected' ? 'selected' : '' }} value="Selected">Selected for the job</option>
                                                <option {{ $candidate->result_status == 'Physical Interview' ? 'selected' : '' }} value="Physical Interview">To be Physical Interviewed</option>
                                                <option {{ $candidate->result_status == 'Online Interview' ? 'selected' : '' }} value="Online Interview">To be Online Interviewed</option>
                                                <option {{ $candidate->result_status == 'Rejected' ? 'selected' : '' }} value="Rejected">Rejected for the job</option>
                                            @else
                                                <option selected="" disabled="" value="">Select candidate status</option>
                                                <option {{ old('result_status') == 'Selected' ? 'selected' : '' }} value="Selected">Selected for the job</option>
                                                <option {{ old('result_status') == 'Physical Interview' ? 'selected' : '' }} value="Physical Interview">To be Physical Interviewed</option>
                                                <option {{ old('result_status') == 'Online Interview' ? 'selected' : '' }} value="Online Interview">To be Online Interviewed</option>
                                                <option {{ old('result_status') == 'Rejected' ? 'selected' : '' }} value="Rejected">Rejected for the job</option>
                                            @endif
                                          </select>
                                        </div>
                                        <div class="form-group input-to-hide" id="OfferLetter" style="display: none;">
                                          <label for="Further Medical Test">Upload Offer Letter (Only PDF)</label>
                                           <div class="input-group">
                                            <div class="col-sm-4" style="padding-top:6px;">
                                              <input type="file" accept="application/pdf" name="offer_letter">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="Comments">Remarks / Comments</label>
                                          <textarea class="form-control" rows="4" name="employer_comments">{{ $candidate->employer_comments }}</textarea>
                                        </div>
                                      </div>
                                      <div class="col-lg-2"></div>
                                      <div class=" col-lg-10 text-right col-md-12 col-sm-12">
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
@endsection

@section('DataTableJs')
   <!-- Datatables-->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.scroller.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('assets/pages/datatables.init.js') }}"></script>

    <script type='text/javascript'>
        $(".my-select-changer").change( function() {
            var selectedValue = $(this).val();
            if (selectedValue == "Selected") {
                $(".input-to-hide").show();
            } else {
                $(".input-to-hide").hide();
            }
        });
    </script>
@endsection
