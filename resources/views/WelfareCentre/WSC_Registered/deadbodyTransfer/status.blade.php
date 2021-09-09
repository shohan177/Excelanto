@extends("WelfareCentre/master")

@section('title', 'Deadbody transfer request')
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
                        <h4 class="pull-left page-title">Deadbody transfer</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Deadbody transfer request</a></li>
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
                                <div class="col-md-6">
                                    <dl class="row">
                                        <dt class="col-sm-6">Name of the dead person</dt>
                                        <dd class="col-sm-6">{{ $deadbodyTransfer->deadbody_name }}</dd><br>
                                        <dt class="col-sm-6">Relation with the applicant</dt>
                                        <dd class="col-sm-6">{{ $deadbodyTransfer->relation }}</dd><br>
                                        <dt class="col-sm-6">Passport_number</dt>
                                        <dd class="col-sm-6">{{ $deadbodyTransfer->passport_number }}</dd><br>
                                        <dt class="col-sm-6">Passport expire date</dt>
                                        <dd class="col-sm-6">{{ $deadbodyTransfer->passport_expirydate }}</dd><br>
                                        <dt class="col-sm-6">Visa number</dt>
                                        <dd class="col-sm-6">{{ $deadbodyTransfer->visa_number }}</dd><br>
                                        <dt class="col-sm-6">Visa expire date</dt>
                                        <dd class="col-sm-6">{{ $deadbodyTransfer->visa_expirydate }}</dd><br>
                                        <dt class="col-sm-6">Died person passport</dt>
                                        <dd class="col-sm-6"><a href="#" {{ $deadbodyTransfer->passport_copy }} class="btn btn-outline-warning btn-xs"><b>View</b></a></dd><br>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl class="row">
                                        <dt class="col-sm-5">Cause of death</dt>
                                        <dd class="col-sm-7">{{ $deadbodyTransfer->cause_of_death }}</dd><br>
                                        <dt class="col-sm-5">Address in Bangladesh</dt>
                                        <dd class="col-sm-7">{{ $deadbodyTransfer->bangladesh_address }}</dd><br>
                                        <dt class="col-sm-5">Relatives in Bangladesh</dt>
                                        <dd class="col-sm-7">{{ $deadbodyTransfer->relative_name }}</dd><br>
                                        <dt class="col-sm-5">Relatives contact</dt>
                                        <dd class="col-sm-7">{{ $deadbodyTransfer->contact_number }}</dd><br>
                                        <dt class="col-sm-5">Message</dt>
                                        <dd class="col-sm-7">{{ $deadbodyTransfer->comments }}</dd><br>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('WelfareCentre.deadbodyTransfer.StatusUpdete', $deadbodyTransfer->id) }}"
                            method="post" enctype="multipart/form-data">
                            <div class="panel panel-primary">
                                <input type="hidden" value="{{ $deadbodyTransfer->id }}" name="id">
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
                                                    <label for="serviceStatus">Service status</label>
                                                    <select class="form-control my-select-changer" name="serviceStatus"
                                                        id="serviceStatus" required="">
                                                        <option selected="" disabled="" value="">Select status</option>
                                                        <option @if ($deadbodyTransfer->active_status == 'On process') selected @endif value="On process">On process
                                                        </option>
                                                        <option @if ($deadbodyTransfer->active_status == 'Completed') selected @endif value="Completed">Completed
                                                        </option>
                                                        <option @if ($deadbodyTransfer->active_status == 'Not Completed') selected @endif value="Not Completed">Not Completed
                                                        </option>
                                                    </select>
                                                </div>
                                            </div><!-- panel-body -->
                                        </div> <!-- col-->
                                        <div class="col-lg-4"></div>
                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    <button type="submit" name="btnupdate"
                                        class="btn btn-primary float-right">Submit</button>
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
