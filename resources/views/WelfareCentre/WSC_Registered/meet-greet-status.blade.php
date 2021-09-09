@extends("WelfareCentre/master")

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
                        <h4 class="pull-left page-title">Meet and Greet</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Meet and Greet request</a></li>
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
                                        <dt class="col-sm-5">Service applied for</dt>
                                        <dd class="col-sm-7">{{ $meetAndGreet->service_name }}</dd><br>
                                        <dt class="col-sm-5">Date of arrival/departure</dt>
                                        <dd class="col-sm-7">{{ $meetAndGreet->arrival_date }}</dd><br>
                                        <dt class="col-sm-5">Name of the airlines</dt>
                                        <dd class="col-sm-7">{{ $meetAndGreet->airline_name }}</dd><br>
                                        <dt class="col-sm-5">Flight number</dt>
                                        <dd class="col-sm-7">{{ $meetAndGreet->flight_number }}</dd><br>
                                        <dt class="col-sm-5">Flight time</dt>
                                        <dd class="col-sm-7">{{ $meetAndGreet->flight_time }}</dd><br>
                                        <dt class="col-sm-5">Guest passport</dt>
                                        <dd class="col-sm-7"><a href="#" target="_blank" class="btn btn-outline-warning btn-xs"><b>View</b></a></dd><br>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl class="row">
                                        <dt class="col-sm-4">Name of the guest</dt>
                                        <dd class="col-sm-8">{{ $meetAndGreet->guest_name }}</dd><br>
                                        <dt class="col-sm-4">Number of guests</dt>
                                        <dd class="col-sm-8">{{ $meetAndGreet->number_of_guests }}</dd><br>
                                        <dt class="col-sm-4">Transport services</dt>
                                        <dd class="col-sm-8">{{ $meetAndGreet->transport_service }}</dd><br>
                                        <dt class="col-sm-4">Message</dt>
                                        <dd class="col-sm-8">{{ $meetAndGreet->comments }}</dd><br>
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
                        <form action="{{ route('WelfareCentre.meetGreet.StatusUpdete', $meetAndGreet->id) }}"
                            method="post" enctype="multipart/form-data">
                            <div class="panel panel-primary">
                                <input type="hidden" value="{{ $meetAndGreet->id }}" name="id">
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
                                                        <option @if ($meetAndGreet->active_status == 'On process') selected @endif value="On process">On process
                                                        </option>
                                                        <option @if ($meetAndGreet->active_status == 'Completed') selected @endif value="Completed">Completed
                                                        </option>
                                                        <option @if ($meetAndGreet->active_status == 'Not Completed') selected @endif value="Not Completed">Not Completed
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
