@extends("WelfareCentre/master")

@section('title', 'Passport Renewal request')
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
                        <h4 class="pull-left page-title">Passport Renewal</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Passport Renewal</a></li>
                            <li class="active">Service details</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Service details</h3>
                        </div>
                        <!-- /.panel-header -->
                        <div class="panel-body p-5">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <dl class="row">
                                        <dt class="col-sm-6">Name</dt>
                                        <dd class="col-sm-6">{{ $extensionPassportService->candidate->candidate_name }}</dd><br>
                                        <dt class="col-sm-6">CPR</dt>
                                        <dd class="col-sm-6">{{ $extensionPassportService->cpr }}</dd><br>
                                        <dt class="col-sm-6">Salary</dt>
                                        <dd class="col-sm-6">{{ $extensionPassportService->salary_type }}</dd><br>
                                        <dt class="col-sm-6">Message</dt>
                                        <dd class="col-sm-6">{{ $extensionPassportService->comments }}</dd><br>
                                        <dt class="col-sm-6">Application</dt>
                                        @if($extensionPassportService->extension_passport)
                                            <dd class="col-sm-6"><a href="{{ asset($extensionPassportService->extension_passport) }}" target="_blank" class="btn btn-outline-warning btn-xs"><b>View</b></a></dd><br>
                                        @else
                                            <dd class="col-sm-6"><a href="#" class="btn btn-outline-warning btn-xs"><b>View</b></a></dd><br>
                                        @endif
                                    </dl>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div class="col-12">
                    <form action="{{ route('WelfareCentre.extensionPassport.update', $extensionPassportService->id) }}"
                        method="post" enctype="multipart/form-data">
                        <div class="panel panel-primary">
                            <input type="hidden" value="{{ $extensionPassportService->id }}" name="id">
                            @csrf
                            <div class="panel-heading">
                                <h3 class="panel-title">Service status</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-3">

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="fees">Fee amount</label>
                                                <input type="number" value="{{ $extensionPassportService->fees }}"
                                                    class="form-control" id="fees" name="fees"
                                                    placeholder="Enter fee amount">
                                            </div>
                                            <div class="form-group">
                                                <label for="deliveryType">Delivery Type</label>
                                                <select class="form-control" name="deliveryType" id="deliveryType"
                                                    required="">
                                                    <option selected disabled value="">Select delivery type</option>
                                                    <option @if ($extensionPassportService->delivery_type == 'Door delivery')
                                                        selected
                                                        @endif value="Door delivery">Door delivery</option>
                                                    <option @if ($extensionPassportService->delivery_type == 'Collect from WSC')
                                                        selected @endif value="Collect from WSC">Collect from WSC</option>
                                                </select>
                                            </div>
                                        </div><!-- panel-body -->
                                    </div>
                                    <div class="col-lg-3">

                                    </div>
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
