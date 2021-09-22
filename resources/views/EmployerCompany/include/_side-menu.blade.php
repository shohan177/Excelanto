<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('RecruitingAgency.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span>Job Posts</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('EmployerCompany.postJob.create') }}"><i class="fa fa-arrow-circle-right"></i>Post New Job</a></li>
                        <li><a href="{{ route('EmployerCompany.postJob.index') }}"><i class="fa fa-arrow-circle-right"></i> Posted Jobs</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Candidates</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('EmployerCompany.candidates.new') }}"><i class="fa fa-arrow-circle-right"></i> New Candidates</a></li>
                        <li><a href="{{ route('EmployerCompany.candidates.result') }}"><i class="fa fa-arrow-circle-right"></i> Candidates Results</a></li>
                        <li><a href="{{ route('EmployerCompany.candidates.finalized') }}"><i class="fa fa-arrow-circle-right"></i> Finalized Candidates</a></li>
                        <li><a href="{{ route('EmployerCompany.candidates.tickets_booked_list') }}"><i class="fa fa-arrow-circle-right"></i> Received Candidates</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Visa Process</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('EmployerCompany.VisaProcess.required') }}"><i class="fa fa-arrow-circle-right"></i> Visa Required</a></li>
                        <li><a href="{{ route('EmployerCompany.VisaProcess.requested') }}"><i class="fa fa-arrow-circle-right"></i> Visa Requested</a></li>
                        <li><a href="{{ route('EmployerCompany.VisaProcess.approved') }}"><i class="fa fa-arrow-circle-right"></i> Visa Approved</a></li>
                        <li><a href="{{ route('EmployerCompany.VisaProcess.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Visa Rejected</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
