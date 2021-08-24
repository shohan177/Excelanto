<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('OneStopService_Child.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-hospital"></i></i><span> Medical Agencies </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('OneStopService_Child.medicalAgency.all') }}"><i class="fa fa-arrow-circle-right"></i> All Medical Agencies</a>
                        </li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="nav-icon fa fa-university"></i><span> Training Agencies </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService_Child.trainingAgency.all') }}"><i class="fa fa-arrow-circle-right"></i> All Training Agencies</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="nav-icon fa fa-users"></i></i><span> Candidates</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService_Child.candidate.request') }}"><i class="fa fa-arrow-circle-right"></i> Selected Candidates</a></li>
                        <li><a href="{{ route('OneStopService_Child.candidate.approved') }}"><i class="fa fa-arrow-circle-right"></i> Interview Candidates</a></li>
                        <li><a href="{{ route('OneStopService_Child.candidate.finalized') }}"><i class="fa fa-arrow-circle-right"></i> Final Candidates</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-card-details"></i></i><span> Biometric Candidates </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService_Child.biometric.required') }}"><i class="fa fa-arrow-circle-right"></i>  Required Biometric</a></li>
                        <li><a href="{{ route('OneStopService_Child.biometric.completed') }}"><i class="fa fa-arrow-circle-right"></i> Completed Biometric</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="nav-icon fa fa-tachometer"></i></i><span>Visa Process</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService_Child.visa.requested') }}"><i class="fa fa-arrow-circle-right"></i> Visa Requested</a></li>
                        <li><a href="{{ route('OneStopService_Child.visa.approved') }}"><i class="fa fa-arrow-circle-right"></i> Visa Approved</a></li>
                        <li><a href="{{ route('OneStopService_Child.visa.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Visa Rejected</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
