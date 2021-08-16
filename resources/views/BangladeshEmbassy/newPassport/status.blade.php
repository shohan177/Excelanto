@extends("BangladeshEmbassy/master")

@section('title', 'Passport status')
@section('DataTableCss')
    <!-- DataTables -->
    <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('main-content')
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Passport status</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">New Passport</a></li>
                            <li class="active">Passport status</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('BangladeshEmbassy.newPassport.statusUpdate', $newPassport->id )}}" method="post" enctype="multipart/form-data">
                    <div class="panel panel-primary">
                            <input type="hidden" value="{{ $newPassport->id }}" name="id">
                            @csrf
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Passport status</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="serviceStatus">Passport status</label>
                                                <select class="form-control my-select-changer" name="serviceStatus" id="serviceStatus"
                                                    required="">
                                                    <option selected="" disabled="" value="">Select passport status</option>
                                                    <option {{ $newPassport->service_status == 'Approved' ? 'selected' : ''}}  value="Approved">Approved</option>
                                                    <option {{ $newPassport->service_status == 'Rejected' ? 'selected' : ''}}  value="Rejected">Rejected</option>
                                                </select>
                                            </div>
                                            <div class="form-group input-to-hide" style="display: none">
                                                <div class="form-group">
                                                    <label for="appointmentTime">Reject Reason</label>
                                                    <textarea class="form-control" name="reject_reason" id=""></textarea>
                                                </div>
                                            </div>
                                        </div><!-- panel-body -->
                                    </div> <!-- col-->
                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button type="submit" name="btnupdate" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')
    <!-- Datatables-->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.scroller.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets/pages/datatables.init.js') }}"></script>

    <script type='text/javascript'>
        $(".my-select-changer").change( function() {
            var selectedValue = $(this).val();
            if (selectedValue == "Rejected") {
                $(".input-to-hide").show();
            } else {
                $(".input-to-hide").hide();
            }
        });
    </script>
@endsection
