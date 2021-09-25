@extends("WelfareCentre/master")

@section('title', 'Lost Passport Service')
@section('DataTableCss')

@endsection

@section('main-content')
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-primary " style="border-left: 5px solid green;">
                        <div class="panel-body">
                            <h5><i class="fa fa-info" style="font-weight: 900"></i> Note:</h5>
                            <p>This page has been enhanced for printing. Click the print button at the bottom of the invoice
                                to test.</p>
                        </div>
                    </div>
                    <div class="panel panel-primary" id="DivIdToPrint">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="justify-content-between">
                                        <i class="fa fa-globe" style="font-weight: 900"></i> Maestrosoft, Ltd.
                                        <small class="float-right">{{ date('Y-m-d') }}</small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong>Maestrosoft, Ltd.</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        Phone: (804) 123-5432<br>
                                        Email: info@almasaeedstudio.com
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    To
                                    <address>
                                        <strong>John Doe</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        Phone: (555) 539-1037<br>
                                        Email: john.doe@example.com
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice #007612</b><br>
                                    <br>
                                    <b>Order ID:</b> 4F3S8J<br>
                                    <b>Payment Due:</b> 2/22/2014
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lost Passport Service</td>
                                                <td>1</td>
                                                <td>$64.50</td>
                                            </tr>
                                            <tr>
                                                <td>Delivery charges</td>
                                                <td></td>
                                                <td>$64.50</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td></td>
                                                <td>$64.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="row no-print">
                                <div class="col-12">
                                    <button type='button' onclick='printDiv();' class="btn btn-default" id="printNow"><i
                                            class="fa fa-print"></i>Print</button>

                                    @if ($lostPassportService->service_status == 'On Process')
                                        <button style="margin-right: 5px;" class="btn btn-success float-right"
                                            onclick="approve(this)"
                                            value="{{ route('WelfareCentre.lostPassport.statusUpdete', $lostPassportService->id) }}">
                                            <i class="fa fa-credit-card-alt"></i> Submit Payment</button>
                                    @elseif ($lostPassportService->service_status == 'Paid')
                                        <button type="button" style="margin-right: 5px;" class="btn btn-success float-right"
                                            disabled><i class="fa fa-credit-card-alt"></i> Already Submitted!</button>
                                    @else
                                        <button type="button" style="margin-right: 5px;"
                                            class="btn btn-success float-right " disabled><i
                                                class="fa fa-credit-card-alt"></i> Already Submitted!</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
    <script>
        function approve(objButton) {
            var url = objButton.value;
            // alert(objButton.value)
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Make Paid !'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        method: 'POST',
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            if (data.type == 'success') {
                                Swal.fire(
                                    'Approved !',
                                    'This company has been Approved. ' + data.message,
                                    'success'
                                )
                                setTimeout(function() {
                                    location.reload();
                                }, 800); //
                            } else {
                                Swal.fire(
                                    'Wrong !',
                                    'Something going wrong. ' + data.message,
                                    'warning'
                                )
                            }
                        },
                    })
                }
            })
        }
    </script>

@endsection

@section('js')
    <script>
        $(document).on('click', '.delete', function() {
            var id = $(this).attr("id");
            var service_status = $(this).data("status");
            var btn_action = 'delete';

            if (confirm("Are you sure you want to change status?")) {
                $.ajax({
                    url: "view_issuance_receipt_action.php",
                    method: "POST",
                    data: {
                        id: id,
                        service_status: service_status,
                        btn_action: btn_action
                    },
                    success: function(data) {
                        $('#alert_action').fadeIn().html('<div class="alert alert-info">' + data +
                            '</div>');
                        window.location.reload()
                        window.location.href = "certificate_issue_paid.php";
                    }
                });
            } else {
                return false;
            }
        });
    </script>
@endsection

@section('DataTableJs')

@endsection
