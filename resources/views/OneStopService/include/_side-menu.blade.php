<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('OneStopService.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building"></i></i> <span> OSC Agencies </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService.childOsc.request') }}"><i class="fa fa-arrow-circle-right"></i> New Requests</a></li>
                        <li><a href="{{ route('OneStopService.childOsc.approved') }}"><i class="fa fa-arrow-circle-right"></i> Approved Requests</a></li>
                        <li><a href="{{ route('OneStopService.childOsc.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Rejected Requests</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-hospital"></i></i><span> Medical Agencies </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService.medicalAgency.request') }}"><i class="fa fa-arrow-circle-right"></i> New Requests</a></li>
                        <li><a href="{{ route('OneStopService.medicalAgency.approved') }}"><i class="fa fa-arrow-circle-right"></i> Approved Requests</a></li>
                        <li><a href="{{ route('OneStopService.medicalAgency.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Rejected Requests</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="nav-icon fa fa-university"></i><span> Training Agencies </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService.trainingAgency.request') }}"><i class="fa fa-arrow-circle-right"></i> New Requests</a></li>
                        <li><a href="{{ route('OneStopService.trainingAgency.approved') }}"><i class="fa fa-arrow-circle-right"></i> Approved Requests</a></li>
                        <li><a href="{{ route('OneStopService.trainingAgency.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Rejected Requests</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="nav-icon fa fa-car"></i><span> Travel Agencies </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService.travelAgency.request') }}"><i class="fa fa-arrow-circle-right"></i> New Requests</a></li>
                        <li><a href="{{ route('OneStopService.travelAgency.approved') }}"><i class="fa fa-arrow-circle-right"></i> Approved Requests</a></li>
                        <li><a href="{{ route('OneStopService.travelAgency.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Rejected Requests</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-card-details"></i></i><span> Biometric Agencies </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService.biometricAgency.request') }}"><i class="fa fa-arrow-circle-right"></i> New Requests</a></li>
                        <li><a href="{{ route('OneStopService.biometricAgency.approved') }}"><i class="fa fa-arrow-circle-right"></i> Approved Requests</a></li>
                        <li><a href="{{ route('OneStopService.biometricAgency.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Rejected Requests</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="nav-icon fa fa-users"></i></i><span> Candidates</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService.candidate.request') }}"><i class="fa fa-arrow-circle-right"></i> Selected Candidates</a></li>
                        <li><a href="{{ route('OneStopService.candidate.approved') }}"><i class="fa fa-arrow-circle-right"></i> Interview Candidates</a></li>
                        <li><a href="{{ route('OneStopService.candidate.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Finalized Candidates</a></li>
                        <li><a href="{{ route('OneStopService.candidate.ticketBooked') }}"><i class="fa fa-arrow-circle-right"></i> Appointed Candidates</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="nav-icon fa fa-tachometer"></i></i><span>Visa Process</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService.visa.approved') }}"><i class="fa fa-arrow-circle-right"></i> Visa Approved</a></li>
                        <li><a href="{{ route('OneStopService.visa.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Visa Rejected</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="nav-icon fa fa-tachometer"></i></i><span>Travel Enquiries</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService.travelEnquiry.readyToTravel') }}"><i class="fa fa-arrow-circle-right"></i> Ready To Travel</a></li>
                        <li><a href="{{ route('OneStopService.travelEnquiry.newTravel') }}"><i class="fa fa-arrow-circle-right"></i> New Travel Enquiry</a></li>
                        <li><a href="{{ route('OneStopService.travelEnquiry.postedTravel') }}"><i class="fa fa-arrow-circle-right"></i> Posted Enquiries</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="nav-icon fa fa-tachometer"></i></i><span>Travel Quotations</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService.travelQuotation.received') }}"><i class="fa fa-arrow-circle-right"></i>Received Quotations</a></li>
                        <li><a href="{{ route('OneStopService.travelQuotation.approved') }}"><i class="fa fa-arrow-circle-right"></i> Approved Quotations</a></li>
                        <li><a href="{{ route('OneStopService.travelQuotation.ticketBooked') }}"><i class="fa fa-arrow-circle-right"></i> Ticket Booked List</a></li>
                    </ul>
                </li>

                <!--<li class="has_sub">-->
                <!--<a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Menu </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                <!--<ul>-->
                <!--<li class="has_sub">-->
                <!--<a href="javascript:void(0);" class="waves-effect"><span>Menu Item 1.1</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                <!--<ul style="">-->
                <!--<li><a href="javascript:void(0);"><span>Menu Item 2.1</span></a></li>-->
                <!--<li><a href="javascript:void(0);"><span>Menu Item 2.2</span></a></li>-->
                <!--</ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a href="javascript:void(0);"><span>Menu Item 1.2</span></a>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</li>-->
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
