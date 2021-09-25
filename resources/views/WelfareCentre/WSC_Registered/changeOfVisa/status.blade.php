@extends("WelfareCentre/master")

@section('title', 'Change of visa')
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
                        <h4 class="pull-left page-title">Change of visa</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Change of visa</a></li>
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
                            <div class="row">
                                <dl class="row">
                                    <dt class="col-sm-4">Name</dt>
                                    <dd class="col-sm-8">{{ $changeVisaService->candidate->candidate_name }}</dd><br>
                                    <dt class="col-sm-4">CPR</dt>
                                    <dd class="col-sm-8">{{ $changeVisaService->cpr }}</dd><br>
                                    <dt class="col-sm-4">Service applied</dt>
                                    <dd class="col-sm-8">{{ $changeVisaService->service_type }}</dd><br>
                                    <dt class="col-sm-4">Message</dt>
                                    <dd class="col-sm-8">{{ $changeVisaService->comments }}</dd><br>
                                    <dt class="col-sm-4">Applied on</dt>
                                    <dd class="col-sm-8">{{ $changeVisaService->created_at }}</dd><br>
                                </dl>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="{{ route('WelfareCentre.changeOfVisa.detailsUpdate', $changeVisaService->id) }}"
                    method="post" enctype="multipart/form-data">
                    <div class="panel panel-primary">
                        <input type="hidden" value="{{ $changeVisaService->id }}" name="id">
                        @csrf
                        <div class="panel-heading">
                            <h3 class="panel-title">Service status</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="offset-lg-1"></div>
                                <div class="col-lg-10 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="document">Document (Only PDF)</label>
                                        <input type="file" accept="application/pdf" class="form-control" name="document" id="document">
                                    </div>
                                    <div class="form-group">
                                        <label for="deliveryType">Delivery Type</label>
                                        <input class="form-control" value="{{ $changeVisaService->delivery_type }}"
                                            type="text" name="deliveryType" id="deliveryType" readonly>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deliveryTo" class="col-sm-4 col-form-label">Delivery to</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="{{ $changeVisaService->delivery_to }}"
                                                class="form-control" id="deliveryTo" name="deliveryTo"
                                                placeholder="Enter person or courier name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deliveryStatus" class="col-sm-4 col-form-label">Delivery status</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="deliveryStatus" id="deliveryStatus"
                                                required>
                                                <option selected disabled value="">Select Delivery status</option>
                                                <option value="Door delivery" @if ($changeVisaService->delivery_type == 'Door delivery') selected @endif>Door delivery
                                                </option>
                                                <option value="Collect from WSC" @if ($changeVisaService->delivery_type == 'Collect from WSC') selected @endif>Collect from WSC
                                                </option>
                                                <option value="Sent via courier" @if ($changeVisaService->delivery_type == 'Sent via courier') selected @endif>Sent via courier
                                                </option>
                                                <option value="Sent via post" @if ($changeVisaService->delivery_type == 'Sent via post') selected @endif>Sent via post
                                                </option>
                                                <option value="Hand delivered" @if ($changeVisaService->delivery_type == 'Hand delivered') selected @endif>Hand delivered
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="legalStatus" class="col-sm-4 col-form-label">Legal status</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="legalStatus" id="legalStatus" required>
                                                <option selected disabled value="">Select legalisation status</option>
                                                <option value="Approved" @if ($changeVisaService->service_status == 'Approved') selected @endif>Approved</option>
                                                <option value="Rejected" @if ($changeVisaService->service_status == 'Rejected') selected @endif>Rejected</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
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
