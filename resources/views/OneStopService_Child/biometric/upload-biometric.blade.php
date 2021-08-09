@extends("OneStopService_Child/master")

@section('title', 'Upload Biometric')
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
                    <h4 class="pull-left page-title">Upload Biometric</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Excelanto</a></li>
                        <li><a href="#">Candidates
                            </a></li>
                        <li class="active">Upload Biometric</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Upload biometric of the selected candidate</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form"
                            action="{{ route('OneStopService_Child.biometric.uploadBiometricStore', $offeredCandidate->id) }}"
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
                                    </div><!-- panel-body -->
                                </div> <!-- col-->
                                <!-- Horizontal form -->
                                <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="biometricFees">Biometric Fees</label>
                                            <input type="text" class="form-control" id="biometricFees"
                                                name="biometricFees">
                                        </div>
                                        <div class="form-group">
                                            <label for="biometric">Upload Biometric (Only PDF)</label>
                                            <input type="file" class="form-control" id="biometric" name="biometric">
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
