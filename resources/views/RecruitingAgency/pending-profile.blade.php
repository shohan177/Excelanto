@extends("RecruitingAgency/pending-profile-master")
@section('main-content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Company Profile</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li class="active">Company Profile</li>
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Company Profile</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('RecruitingAgency.companyPrfileSubmit') }}">
                                @csrf
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="companyName">Company Name</label>
                                                <input name="companyName" placeholder="Enter Company Name" type="text" class="form-control"
                                                    id="companyName">
                                            </div>
                                            <div class="form-group">
                                                <label for="abbreviation">Abbreviation</label>
                                                <input name="abbreviation" placeholder="Enter Abbreviation" type="text" class="form-control"
                                                    id="abbreviation">
                                            </div>
                                            <div class="form-group">
                                                <label for="companyRegisterNumber">Company Register Number</label>
                                                <input name="companyRegisterNumber" placeholder="Enter Company Register Number" type="text"
                                                    class="form-control" id="companyRegisterNumber">
                                            </div>
                                            <div class="form-group">
                                                <label for="domain">Domain</label>
                                                <input name="domain" placeholder="Enter Domain" type="text" class="form-control"
                                                    id="domain">
                                            </div>
                                            <div class="form-group">
                                                <label for="phoneNumber">Phone Number</label>
                                                <input name="phoneNumber" placeholder="Enter Phone Number" type="text" class="form-control"
                                                    id="phoneNumber">
                                            </div>
                                            <div class="form-group">
                                                <label for="city">City / Town</label>
                                                <input name="city" placeholder="Enter City / Town" type="text" class="form-control"
                                                    id="city">
                                            </div>
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input name="state" placeholder="Enter State" type="text" class="form-control"
                                                    id="state">
                                            </div>
                                        </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="address1">Address 1</label>
                                                <textarea class="form-control" name="address1" id="address1" cols="30"
                                                    rows="3">

                                                        </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="address2">Address 2</label>
                                                <textarea class="form-control" name="address2" id="address2" cols="30"
                                                    rows="3">

                                                        </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="logo">Logo</label>
                                                <input name="logo" type="file" class="form-control" id="logo">
                                            </div>
                                            <div class="form-group">
                                                <label for="document1">Document 1</label>
                                                <input name="document1" type="file" class="form-control" id="document1">
                                            </div>
                                            <div class="form-group">
                                                <label for="document2">Document 2</label>
                                                <input name="document2" type="file" class="form-control" id="document2">
                                            </div>
                                        </div> <!-- panel-body -->
                                    </div> <!-- col -->
                                    <div class=" text-right">
                                        <button type="submit" class="btn btn-dark waves-effect waves-ligh">Submit</button>
                                    </div>
                                </div> <!-- End row -->
                            </form>
                        </div><!-- panel-body -->
                    </div>
                </div>
            </div> <!-- End Row -->
        </div>
    </div>
@endsection
