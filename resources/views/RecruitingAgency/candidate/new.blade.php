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
                            <form role="form" action="{{ route('RecruitingAgency.candidate.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('includes.errors')
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="candidateName">Candidate Name</label>
                                                    <input type="text" class="form-control" id="candidateName" name="candidateName" value="{{ old('candidateName') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="jobCategory">Job Category</label>
                                                    <select class="form-control" name="jobCategory" required="">
                                                        <option value="">Select job category</option>
                                                        @foreach ($jobCategories as $cat)
                                                            <option
                                                                {{ old('jobCategory') == $cat->id ? 'selected' : '' }}
                                                                value="{{ $cat->id }}">{{ $cat->category_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="dateOfBirth">Date of Birth</label>
                                                    <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" value="{{ old('dateOfBirth') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender">Gender</label>
                                                    <select class="form-control"  name="gender" id="gender">
                                                        <option value="">Select Gender</option>
                                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="passportNo">Passport Number</label>
                                                    <input type="text" class="form-control" name="passportNo" id="passportNo" value="{{ old('passportNo') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phoneNo">Phone Number</label>
                                                    <input type="text" class="form-control" name="phoneNo" id="phoneNo" value="{{ old('phoneNo') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nationality">Nationality</label>
                                                    <input type="text" class="form-control" id="nationality" name="nationality" value="{{ old('nationality') }}">
                                                </div>
                                            </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="presentAddress">Present address</label>
                                                    <textarea class="form-control"  name="presentAddress" id="presentAddress" type="text" cols="30" rows="2">{{ old('presentAddress') }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="permanentAddress">Permanent address</label>
                                                    <textarea class="form-control"  name="permanentAddress" id="permanentAddress" type="text" cols="30" rows="2" >{{ old('permanentAddress') }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control"  name="status" id="status">
                                                        <option value="">Select Status</option>
                                                        <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                                                        <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="photo">Photo</label>
                                                    <input type="file" class="form-control" id="photo" name="photo">
                                                </div>
                                                <div class="form-group">
                                                    <label for="bioData">Bio-data(Resume)</label>
                                                    <input type="file" class="form-control" id="bioData" name="bioData">
                                                </div>
                                                <div class="form-group">
                                                    <label for="passport">Passport</label>
                                                    <input type="file" class="form-control" id="passport" name="passport">
                                                </div>
                                                <div class="form-group">
                                                    <label for="preMedicalCertificate">Pre-Medical Certificate (Only PDF)</label>
                                                    <input type="file" accept="application/pdf" class="form-control" id="preMedicalCertificate" name="preMedicalCertificate">
                                                </div>
                                                <div class="form-group">
                                                    <label for="preTrainingCertificate">Pre-Training Certificate (Only PDF)</label>
                                                    <input type="file" accept="application/pdf" class="form-control" id="preTrainingCertificate" name="preTrainingCertificate">
                                                </div>
                                            </div> <!-- panel-body -->
                                    </div> <!-- col -->
                                    <div class=" text-right">
                                        <button type="submit" class="btn btn-info waves-effect waves-ligh">Submit</button>
                                    </div>
                                </div> <!-- End row -->
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
