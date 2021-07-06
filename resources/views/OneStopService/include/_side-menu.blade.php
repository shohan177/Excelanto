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
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-hospital"></i></i><span> Training Agencies </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('OneStopService.medicalAgency.request') }}"><i class="fa fa-arrow-circle-right"></i> New Requests</a></li>
                        <li><a href="{{ route('OneStopService.medicalAgency.approved') }}"><i class="fa fa-arrow-circle-right"></i> Approved Requests</a></li>
                        <li><a href="{{ route('OneStopService.medicalAgency.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Rejected Requests</a></li>
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
