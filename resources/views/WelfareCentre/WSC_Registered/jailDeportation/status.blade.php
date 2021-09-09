@extends("WelfareCentre/master")

@section('title', 'Jail deportation request')
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
                        <h4 class="pull-left page-title">Jail Deportation</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Jail deportation request</a></li>
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
                                        <dt class="col-sm-6">Name of the arrested person</dt>
                                        <dd class="col-sm-6">{{ $jailDeportation->person_name }}</dd><br>
                                        <dt class="col-sm-6">Relation with the applicant</dt>
                                        <dd class="col-sm-6">{{ $jailDeportation->person_ralation }}</dd><br>
                                        <dt class="col-sm-6">Passport number</dt>
                                        <dd class="col-sm-6">{{ $jailDeportation->passport_number }}</dd><br>
                                        <dt class="col-sm-6">Passport expire date</dt>
                                        <dd class="col-sm-6">{{ $jailDeportation->passport_expirydate }}</dd><br>
                                        <dt class="col-sm-6">Visa number</dt>
                                        <dd class="col-sm-6">{{ $jailDeportation->visa_number }} </dd><br>
                                        <dt class="col-sm-6">Visa expire date</dt>
                                        <dd class="col-sm-6">{{ $jailDeportation->visa_expirydate }}</dd><br>
                                        <dt class="col-sm-6">Arrested person passport</dt>
                                        <dd class="col-sm-6"><a href="{{ $jailDeportation->passport_copy }}" target="_blank" class="btn btn-outline-warning btn-xs"><b>View</b></a></dd><br>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl class="row">
                                        <dt class="col-sm-6">Cause of arrest</dt>
                                        <dd class="col-sm-6">{{ $jailDeportation->cause_of_arrest }}</dd><br>
                                        <dt class="col-sm-6">Date of arrest</dt>
                                        <dd class="col-sm-6">{{ $jailDeportation->arrest_date }}</dd><br>
                                        <dt class="col-sm-6">Name of the police station</dt>
                                        <dd class="col-sm-6">{{ $jailDeportation->police_station_name }}</dd><br>
                                        <dt class="col-sm-6">Message</dt>
                                        <dd class="col-sm-6">{{ $jailDeportation->comments }}</dd><br>
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
                        <form action="{{ route('WelfareCentre.jailDeportation.StatusUpdete', $jailDeportation->id) }}"
                            method="post" enctype="multipart/form-data">
                            <div class="panel panel-primary">
                                <input type="hidden" value="{{ $jailDeportation->id }}" name="id">
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
                                                        <option @if ($jailDeportation->active_status == 'On process') selected @endif value="On process">On process
                                                        </option>
                                                        <option @if ($jailDeportation->active_status == 'Completed') selected @endif value="Completed">Completed
                                                        </option>
                                                        <option @if ($jailDeportation->active_status == 'Not Completed') selected @endif value="Not Completed">Not Completed
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
