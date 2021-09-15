@extends("WelfareCentre/master")

@section('title', 'Regular by penalty')
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
                        <h4 class="pull-left page-title">Regular by penalty</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Legalisation Regular by penalty</a></li>
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
                                        <dd class="col-sm-6">{{ $paymentService->candidate->candidate_name }}</dd>
                                        <br>
                                        <dt class="col-sm-6">CPR</dt>
                                        <dd class="col-sm-6">{{ $paymentService->cpr }}</dd><br>
                                        <dt class="col-sm-6">Service applied</dt>
                                        <dd class="col-sm-6">{{ $paymentService->service_type }}</dd><br>
                                        <dt class="col-sm-6">Message</dt>
                                        <dd class="col-sm-6">{{ $paymentService->comments }}</dd><br>
                                        <dt class="col-sm-6">Applied on</dt>
                                        <dd class="col-sm-6">{{ $paymentService->created_at }}</dd><br>
                                        <dt class="col-sm-6">Application</dt>
                                        <dd class="col-sm-6"><a href="#"
                                                class="btn btn-outline-warning btn-xs"><b>View</b></a></dd><br>
                                    </dl>
                                </div>
                                <div class="col-md-3"></div>

                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('WelfareCentre.legalByRegular.update', $paymentService->id) }}"
                            method="post" enctype="multipart/form-data">
                            <div class="panel panel-primary">
                                <input type="hidden" value="{{ $paymentService->id }}" name="id">
                                @csrf
                                <div class="panel-heading">
                                    <h3 class="panel-title">Service status</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="fees">Fee amount</label>
                                                    <input type="number" value="{{ $paymentService->fees }}" class="form-control" id="fees" name="fees"
                                                        placeholder="Enter fee amount">
                                                </div>
                                                <div class="form-group">
                                                    <label for="deliveryType">Delivery Type</label>
                                                    <select class="form-control" name="deliveryType" id="deliveryType"
                                                        required="">
                                                        <option selected disabled value="">Select delivery type</option>
                                                        <option @if ($paymentService->delivery_type == 'Door delivery') selected @endif value="Door delivery">Door delivery
                                                        </option>
                                                        <option @if ($paymentService->delivery_type == 'Collect from WSC') selected @endif value="Collect from WSC">Collect
                                                            from WSC</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="deliveryCharge">Delivery charge</label>
                                                    <input type="number" value="{{ $paymentService->delivery_charge }}" class="form-control" id="deliveryCharge"
                                                        name="deliveryCharge" placeholder="Enter delivery charge">
                                                </div>
                                            </div><!-- panel-body -->
                                        </div> <!-- col-->
                                        <div class="col-lg-4"></div>
                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- End Row -->
            </div>
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
