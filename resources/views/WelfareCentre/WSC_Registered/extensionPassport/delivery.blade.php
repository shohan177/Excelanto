@extends("WelfareCentre/master")

@section('title', 'Renewal Passport Delivery Status')
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
                        <h4 class="pull-left page-title">Renewal Passport Delivery Status</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Welfare Centre</a></li>
                            <li><a href="#"> WSC registered users
                                </a></li>
                            <li class="active">Renewal Passport Delivery Status</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Renewal Passport Delivery Status</h3>
                        </div>
                        <div class="panel-body">
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>User name</th>
                                        <th>Delivered to</th>
                                        <th>Applied on</th>
                                        <th>Delivery Status</th>
                                        <th>Passport</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($extensionPassportServices as $extensionPassportService)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $extensionPassportService->candidate->candidate_name }}</td>
                                            <td>{{ $extensionPassportService->delivery_to }}</td>
                                            <td>{{ $extensionPassportService->created_at }}</td>
                                            <td>
                                                @if ($extensionPassportService->delivery_status == 'Sent via courier')
                                                    <button type="button" class="btn btn-primary btn-xs">Sent via courier</button>
                                                @elseif($extensionPassportService->delivery_status == "Sent via post")
                                                    <button type="button" class="btn btn-success btn-xs">Sent via post</button>
                                                @elseif($extensionPassportService->delivery_status == "Hand delivered")
                                                    <button type="button" class="btn btn-success btn-xs">Hand delivered</button>
                                                @else
                                                    <button type="button"
                                                        class="btn btn-info btn-xs">{{ $extensionPassportService->delivery_status }}</button>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-xs" target="_blank" href="{{ asset($extensionPassportService->passport) }}">
                                                    <i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL No</th>
                                        <th>User name</th>
                                        <th>Delivered to</th>
                                        <th>Applied on</th>
                                        <th>Delivery Status</th>
                                        <th>Passport</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
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
@endsection
