@extends("BangladeshAdmin/master")
@section('main-content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Dashboard</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">New Orders</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>256</b></h3>
                            <p class="text-muted"><b>48%</b> From Last 24 Hours</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Bounce Rate</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>36%</b></h3>
                            <p class="text-muted"><b>15%</b> Orders in Last 10 months</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">User Registrations</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>254</b></h3>
                            <p class="text-muted"><b>65%</b> From Last 24 Hours</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Unique Visitors</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>34</b></h3>
                            <p class="text-muted"><b>31%</b> From Last 1 month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

