@extends("OneStopService_Child/master")

@section('title', 'Assign Medical and Training')
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
                    <h4 class="pull-left page-title">Assign Medical and Training</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Excelanto</a></li>
                        <li><a href="#">Candidates
                            </a></li>
                        <li class="active">Assign Medical and Training</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Assign medical and training places to the candidate</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form"
                            action="{{ route('OneStopService_Child.biometric.assignMedicalTrainingStore', $offeredCandidate->id) }}"
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
                                                name="candidateName" value="{{ $offeredCandidate->candidate_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input readonly type="email" class="form-control" name="email" id="email"
                                                value="{{ $offeredCandidate->candidate_email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="phoneNo">Phone Number</label>
                                            <input readonly type="text" class="form-control" name="phoneNo" id="phoneNo"
                                                value="{{ $offeredCandidate->phone_number }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobCategory">Job Category</label>
                                            <input readonly type="text" class="form-control" name="jobCategory" id="jobCategory"
                                                value="{{ $offeredCandidate->job_category->category_name }}">
                                        </div>
                                    </div><!-- panel-body -->
                                </div> <!-- col-->
                                <!-- Horizontal form -->
                                <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="medicalCenter">Medical Center</label>
                                            <select class="form-control" name="medicalCenter" required="">
                                                <option value="">Select Medical Center</option>
                                                @foreach ($medicalAgencies as $medical)
                                                    <option
                                                        {{ old('medicalCenter') == $medical->id ? 'selected' : '' }}
                                                        value="{{ $medical->id }}">{{ $medical->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="medicalFees">Medical Fees</label>
                                            <input type="text" class="form-control" id="medicalFees"
                                                name="medicalFees">
                                        </div>
                                        <div class="form-group">
                                            <label for="trainingCenter">Training Center</label>
                                            <select class="form-control" name="trainingCenter" required="">
                                                <option value="">Select Training Center</option>
                                                @foreach ($trainingAgencies as $training)
                                                    <option
                                                        {{ old('trainingCenter') == $training->id ? 'selected' : '' }}
                                                        value="{{ $training->id }}">{{ $training->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="trainingFees">Training Fees</label>
                                            <input type="text" class="form-control" id="trainingFees"
                                                name="trainingFees">
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

@endsection
@section('DataTableJs')

@endsection
