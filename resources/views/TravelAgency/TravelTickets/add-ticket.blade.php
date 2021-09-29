@extends("TravelAgency/master")

@section('title', 'Create Travel Quotation')
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
                        <h4 class="pull-left page-title">Quotation</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Travel Tickets</a></li>
                            <li class="active">Create Travel Quotation</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create Travel Quotation</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST"
                                action="{{ route('TravelAgency.travel.ticketStore', $offeredCandidate->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="candidateName">Candidate Name</label>
                                                <input name="candidateName"
                                                    value="{{ $offeredCandidate->candidate_name }}" type="text"
                                                    class="form-control" id="candidateName" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input name="email" value="{{ $offeredCandidate->candidate_email }}"
                                                    type="email" class="form-control" id="email" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input name="phone" value="{{ $offeredCandidate->phone_number }}"
                                                    type="text" class="form-control" id="phone" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input name="address"
                                                    value="{{ $offeredCandidate->candidate->permanent_address }}"
                                                    type="text" class="form-control" id="address" readonly>
                                            </div>
                                        </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="dateOfJounrey">Date of Journey</label>
                                                <input name="dateOfJounrey" type="date" class="form-control"
                                                    id="dateOfJounrey">
                                            </div>
                                            <div class="form-group">
                                                <label for="flightNumber">Flight Number</label>
                                                <input name="flightNumber" placeholder="Enter Flight Number" type="text"
                                                    class="form-control" id="flightNumber">
                                            </div>
                                            <div class="form-group">
                                                <label for="ticketCost">Ticket Cost</label>
                                                <input name="ticketCost" placeholder="Enter Ticket Cost" type="text"
                                                    class="form-control" id="ticketCost">
                                            </div>
                                            <div class="form-group">
                                                <label for="ticket">Ticket (Only PDF)</label>
                                                <input name="ticket" type="file"  accept="application/pdf" class="form-control" id="ticket">
                                            </div>
                                        </div> <!-- panel-body -->
                                    </div> <!-- col -->
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-dark waves-effect waves-ligh">Submit</button>
                                    </div>
                                </div> <!-- End row -->
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
