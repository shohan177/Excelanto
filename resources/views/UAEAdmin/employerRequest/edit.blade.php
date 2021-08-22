@extends("UAEAdmin/master")
@section('main-content')
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Employer Quota</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Excelanto</a></li>
                            <li class="active">Employer Requests
                            </li>
                            <li><a href="#">Edit Employer Quota</a></li>
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
                            <form role="form" method="POST" enctype="multipart/form-data"
                                action="{{ route('UAEAdmin.employerRequest.update', $user->id) }}">
                                @csrf
                                {{-- <input type="text"> --}}
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="companyName">Company Name</label>
                                                <input name="companyName" readonly value="{{ $user->name }}" type="text"
                                                    class="form-control" id="companyName">
                                            </div>
                                            <div class="form-group">
                                                <label for="companyRegisterNumber">Company Register Number</label>
                                                <input name="companyRegisterNumber" readonly
                                                    value="{{ $user->company_register_number }}" type="text"
                                                    class="form-control" id="companyRegisterNumber">
                                            </div>
                                            <div class="form-group">
                                                <label for="domain">Domain</label>
                                                <input name="domain" readonly value="{{ $user->domain }}" type="text"
                                                    class="form-control" id="domain">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input name="email" readonly value="{{ $user->email }}" type="email"
                                                    class="form-control" id="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="phoneNumber">Phone Number</label>
                                                <input name="phoneNumber" readonly value="{{ $user->phone }}" type="text"
                                                    class="form-control" id="phoneNumber">
                                            </div>
                                        </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="address1">Address 1</label>
                                                <textarea readonly class="form-control" name="address1" id="address1"
                                                    cols="30" rows="3">{{ $user->address1 }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="address2">Address 2</label>
                                                <textarea readonly class="form-control" name="address2" id="address2"
                                                    cols="30" rows="3">{{ $user->address2 }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="activeStatus">Select Eeither Approve Or Reject the Company
                                                    Profile</label>
                                                <select class="form-control" name="activeStatus" id="activeStatus">
                                                    <option value="">Select Status</option>
                                                    <option @if ($user->active_status === 'Approved') selected @endif value="Approved">Approved
                                                    </option>
                                                    <option @if ($user->active_status === 'Rejected') selected @endif value="Rejected">Rejected
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="quata">Job Posts (Quota)</label>
                                                <input name="quata" value="{{ $user->quata }}" type="text"
                                                    class="form-control" id="quata">
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
