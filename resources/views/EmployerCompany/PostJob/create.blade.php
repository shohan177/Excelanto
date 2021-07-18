@extends("EmployerCompany/master")

@section('title', 'Add Job Category')
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
                        <h4 class="pull-left page-title">Job Category</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li><a href="#">Job Category</a></li>
                            <li class="active">Add Job Category</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            @php
                $auth = Auth::user();
            @endphp

            <div class="row">
                <div class="col-12">
                    <!-- Horizontal Form -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('employerCompany.postJob.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Job fsdf</h3>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                    <div class="row">
                                    <div class="col-md-12">
                                        @include('includes.errors')
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-xl-2"></div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <div class="form-group">
                                            <label for="User Name">User Name</label>
                                            <input type="text" class="form-control" id="UserName" value="Employee" readonly="">
                                            {{-- <input type="text" class="form-control" id="UserName" value="{{ $auth->name}}" readonly=""> --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="Company Name">Company Name</label>
                                            <input type="text" class="form-control"  id="CompanyName" value="employer company" readonly="">
                                            {{-- <input type="text" class="form-control"  id="CompanyName" value="{{ $auth->company_name}}" readonly=""> --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="Job Category">Job Category</label>
                                            <select class="form-control" name="job_category" required="">
                                                <option value="">Select job category</option>
                                                @foreach ($job_categories as $cat)
                                                <option {{ old('job_category') == $cat->category_name ? 'selected': '' }} value="{{ $cat->category_name}}">{{ $cat->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>




                                        <div class="form-group">
                                            <label for="Employment Type">Employment Type</label>
                                            <select class="form-control" name="employment_type" required="">
                                                <option selected="" disabled="" value="">Select employment type</option>
                                                <option {{ old('employment_type') == 'Full Time' ? 'selected': '' }} value="Full Time">Full Time</option>
                                                <option {{ old('employment_type') == 'Part Time' ? 'selected': '' }} value="Part Time">Part Time</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Gender">Gender</label>
                                            <select class="form-control" name="gender" required="">
                                                <option selected="" disabled="" value="">Select gender</option>
                                                <option {{ old('gender') == 'Male only' ? 'selected': '' }}  value="Male only">Male only</option>
                                                <option {{ old('gender') == 'Female only' ? 'selected': '' }} value="Female only">Female only</option>
                                                <option {{ old('gender') == 'Male and Female' ? 'selected': '' }} value="Male and Female">Male and Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Age Limit">Age Limit</label>
                                            <select class="form-control" name="age_limit" required="">
                                                <option selected="" disabled="" value="">Select age limit</option>
                                                <option {{ old('age_limit') == 'Above 20' ? 'selected': '' }} value="Above 20">Above 20</option>
                                                <option {{ old('age_limit') == '20 - 30' ? 'selected': '' }} value="20 - 30">20 - 30</option>
                                                <option {{ old('age_limit') == '30 - 50' ? 'selected': '' }} value="30 - 50">30 - 50</option>
                                                <option {{ old('age_limit') == '30 - 80' ? 'selected': '' }} value="30 - 80">30 - 80</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="Salary">Salary</label>
                                            <input type="text" class="form-control" id="Salary" name="salary"
                                                placeholder=" Enter Salary" value="{{ old('salary')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="Job Location">Job Location</label>
                                            <input type="text" class="form-control" id="JobLocation" name="job_location"
                                                placeholder="Enter Job Location" value="{{ old('job_location')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="Vacancy">Job Vacancy</label>
                                            <input type="text" value="{{ old('job_vacancy')}}" class="form-control" id="Vacancy" name="job_vacancy"
                                                placeholder="Enter Job Vacancy">
                                        </div>
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input type="text" value="{{ old('end_date')}}" class="form-control float-right" id="EndDate" name="end_date">
                                            </div>
                                            <!-- /.input group -->
                                        </div>

                                        <div class="form-group">
                                            <label for="Demand Letter">Demand Letter</label>
                                            <div class="input-group">
                                                <div class="col-sm-4" style="padding-top:6px;">
                                                    <input type="file" name="DemandLetter">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.card -->
                        <div class="panel panel-secondary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Make an appointment to verify new job post</h3>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="offset-lg-2"></div>

                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="Select WSC">Select WSC</label>
                                            <select class="form-control" name="selected_wsc" required="">
                                                <option selected="" disabled="" value="">Select Centre</option>

                                                <option {{ old('selected_wsc') == '4' ? 'selected': '' }} value="4">vowmibazaaar_welfare</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Appointment Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input value="{{ old('appointment_date')}}" type="text" class="form-control float-right" id="AppointmentDate"
                                                    name="appointment_date">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>



                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                        <!-- time Picker -->
                                        <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                                <label>Appointment Time</label>
                                                <div class="input-group date" id="AppointmentTime"
                                                    data-target-input="nearest">
                                                    <input value="{{ old('appointment_time')}}" type="text" class="form-control datetimepicker-input" data-target="#AppointmentTime" placeholder="HH:MM AM/PM"
                                                        name="appointment_time">
                                                    <div class="input-group-append" data-target="#AppointmentTime"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                    </div>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->
                                        </div>
                                    </div>

                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.card -->
                        <div class="panel panel-secondary">

                            <div class="panel-footer">
                                <button type="submit" name="btnsave" class="btn btn-primary float-right">Submit</button>
                            </div>
                            <!-- /.panel-footer -->
                        </div>
                        <!-- /.card -->
                    </form>
                </div>


                {{-- <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Job Category</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" enctype="multipart/form-data">
                                <div class="row ">
                                    <!-- Basic example -->
                                    <div class="col-md-2 col-lg-2 col-xl-2"> </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                        <div class="form-group">
                                            <label for="jobCategory">Job Category</label>
                                            <input type="text" class="form-control" id="jobCategory">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="">Select Status</option>
                                                <option value="true">Active</option>
                                                <option value="false">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-xl-2"> </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                                        <button type="submit" class="btn btn-dark waves-effect waves-ligh">Submit</button>
                                    </div>
                                </div> <!-- End row -->
                            </form>
                        </div><!-- panel-body -->
                    </div>
                </div> --}}
            </div> <!-- End Row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
