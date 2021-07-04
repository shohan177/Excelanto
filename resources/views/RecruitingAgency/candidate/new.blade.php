@extends("RecruitingAgency/master")

@section('title', 'New Candidate')
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
                        <h4 class="pull-left page-title">New Candidate</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Candidates</a></li>
                            <li class="active">Add New Candidate</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add New Candidate</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" enctype="multipart/form-data">
                                <div class="row col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-group">
                                        <label for="candidateName">Candidate Name</label>
                                        <input type="text" class="form-control" id="candidateName">
                                    </div>
                                    <div class="form-group">
                                        <label for="jobCategory">Job Category</label>
                                        <select class="form-control"  name="jobCategory" id="jobCategory">
                                            <option value="1">Developer</option>
                                            <option value="2">Project Manager</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="dateOfBirth">Date of Birth</label>
                                        <input type="date" class="form-control" id="dateOfBirth">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control"  name="gender" id="gender">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="passportNo">Passport Number</label>
                                        <input type="text" class="form-control" id="passportNo">
                                    </div>
                                    <div class="form-group">
                                        <label for="phoneNo">Phone Number</label>
                                        <input type="text" class="form-control" id="phoneNo">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="nationality">Nationality</label>
                                        <input type="text" class="form-control" id="nationality">
                                    </div>
                                </div>
                                <div class="row col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-group">
                                        <label for="presentAddress">Present address</label>
                                        <textarea class="form-control"  name="presentAddress" id="presentAddress" type="text" cols="30" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="permanentAddress">Permanent address</label>
                                        <textarea class="form-control"  name="permanentAddress" id="permanentAddress" type="text" cols="30" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control"  name="status" id="status">
                                            <option value="">Select Status</option>
                                            <option value="true">Active</option>
                                            <option value="false">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">Photo</label>
                                        <input type="file" class="form-control" id="photo">
                                    </div>
                                    <div class="form-group">
                                        <label for="bioData">Bio-data(Resume)</label>
                                        <input type="file" class="form-control" id="bioData">
                                    </div>
                                    <div class="form-group">
                                        <label for="passport">Passport</label>
                                        <input type="file" class="form-control" id="passport">
                                    </div>
                                    <div class="form-group">
                                        <label for="preMedicalCertificate">Pre-Medical Certificate (Only PDF)</label>
                                        <input type="file" class="form-control" id="preMedicalCertificate">
                                    </div>
                                    <div class="form-group">
                                        <label for="preTrainingCertificate">Pre-Training Certificate (Only PDF)</label>
                                        <input type="file" class="form-control" id="preTrainingCertificate">
                                    </div>
                                </div>
                                <div class=" text-center">
                                    <button type="submit" class="btn btn-dark waves-effect waves-ligh">Submit</button>
                                </div>
                            </form>
                        </div><!-- panel-body -->
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
