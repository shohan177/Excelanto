@extends("WelfareCentre/master")

@section('title', 'New Passport request')
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
                        <h4 class="pull-left page-title">New Passport</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">New Passport</a></li>
                            <li class="active">Service details</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Service details</h3>
                        </div>
                        <!-- /.panel-header -->
                        <div class="panel-body p-5">
                                <dl class="row">
                                    <dt class="col-sm-6">Name</dt>
                                    <dd class="col-sm-6">{{ $newPassportService->candidate->candidate_name }}</dd><br>
                                    <br>
                                    <dt class="col-sm-6">CPR</dt>
                                    <dd class="col-sm-6">{{ $newPassportService->cpr }}</dd><br>
                                    <dt class="col-sm-6">Salary</dt>
                                    <dd class="col-sm-6">{{ $newPassportService->salary_type }}</dd><br>
                                    <dt class="col-sm-6">Service Status</dt>
                                    <dd class="col-sm-6">{{ $newPassportService->service_status }}</dd><br>
                                    <dt class="col-sm-6">Message</dt>
                                    <dd class="col-sm-6">{{ $newPassportService->comments }}</dd><br>
                                    <dt class="col-sm-6">Application</dt>
                                    @if($newPassportService->new_offer_application)
                                        <dd class="col-sm-6"><a href="{{ asset($newPassportService->new_offer_application) }}" target="_blank" class="btn btn-outline-warning btn-xs"><b>View</b></a></dd><br>
                                    @else
                                        <dd class="col-sm-6"><a href="#" class="btn btn-outline-warning btn-xs"><b>View</b></a></dd><br>
                                    @endif
                                </dl>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="{{ route('WelfareCentre.newPassport.update', $newPassportService->id) }}" method="post"
                        enctype="multipart/form-data">
                        <div class="panel panel-primary">
                            <input type="hidden" value="{{ $newPassportService->id }}" name="id">
                            @csrf
                            <div class="panel-heading">
                                <h3 class="panel-title">Service status</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="photo">Photo</label>
                                            <input name="photo" type="file" accept="image/*" class="form-control" id="photo">
                                        </div>
                                        <div class="form-group">
                                            <label for="biometric">Biometric</label>
                                            <input name="biometric" type="file" accept="application/pdf" class="form-control" id="biometric">
                                        </div>
                                        <div class="form-group">
                                            <label for="fees">Fee amount</label>
                                            <input type="number" value="{{ $newPassportService->fees }}"
                                                class="form-control" id="fees" name="fees" placeholder="Enter fee amount">
                                        </div>
                                        <div class="form-group">
                                            <label for="deliveryType">Delivery Type</label>
                                            <select class="form-control" name="deliveryType" id="deliveryType"
                                                required="">
                                                <option selected disabled value="">Select delivery type</option>
                                                <option @if ($newPassportService->delivery_type == 'Door delivery')
                                                    selected
                                                    @endif value="Door delivery">Door delivery</option>
                                                <option @if ($newPassportService->delivery_type == 'Collect from WSC')
                                                    selected @endif value="Collect from WSC">Collect from WSC</option>
                                            </select>
                                        </div>
                                    </div><!-- panel-body -->
                                </div>
                            </div>
                            <div class="panel-footer text-right">
                                <button type="submit" name="btnupdate" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
