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
                        <h4 class="pull-left page-title">Create Travel Quotation</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Travel Enquiries</a></li>
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
                            <form role="form" method="POST" action="{{ route('TravelAgency.enquiries.applyStore', $travelEnquiry->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="dateOfJounrey">Date of Journey</label>
                                                    <input name="dateOfJounrey" value="{{ $travelEnquiry->date_of_journey }}" type="date" class="form-control" id="dateOfJounrey" readonly >
                                                </div>
                                                <div class="form-group">
                                                    <label for="totalTickets">Total Tickets Required</label>
                                                    <input placeholder="Enter tickets required" value="{{ $travelEnquiry->tickets_required }}"  name="totalTickets" type="text" class="form-control" id="totalTickets" readonly >
                                                </div>
                                            </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="totalCost">Total Tickets Cost</label>
                                                    <input placeholder="Enter tickets required" required name="totalCost" type="text" class="form-control" id="totalCost" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="comments">Comments</label>
                                                    <textarea placeholder="Write here any comments" class="form-control"  name="comments" id="comments" type="text" cols="30" rows="2"></textarea>
                                                </div>
                                            </div> <!-- panel-body -->
                                    </div> <!-- col -->
                                    <div class=" text-center">
                                        @if($travelEnquiry->submittedTravelEnquiry)
                                            <button type="submit" disabled class="btn btn-dark waves-effect waves-ligh">Already Applied !!</button>
                                        @else
                                            <button type="submit" class="btn btn-dark waves-effect waves-ligh">Submit</button>
                                        @endif
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
