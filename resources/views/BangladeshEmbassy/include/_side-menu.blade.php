<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('BangladeshEmbassy.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building"></i></i> <span>
                            Employer Demand </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('BangladeshEmbassy.employerDemand.received') }}"><i class="fa fa-arrow-circle-right"></i>Received Demand</a></li>
                        <li><a href="{{ route('BangladeshEmbassy.employerDemand.approved') }}"><i class="fa fa-arrow-circle-right"></i>Approved Demand</a></li>
                        <li><a href="{{ route('BangladeshEmbassy.employerDemand.rejected') }}"><i class="fa fa-arrow-circle-right"></i>Rejected Demand</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i></i> <span>New Passport</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('BangladeshEmbassy.newPassport.request') }}"><i class="fa fa-arrow-circle-right"></i>Passport requests</a></li>
                        <li><a href="{{ route('BangladeshEmbassy.newPassport.approved') }}"><i class="fa fa-arrow-circle-right"></i>Passport approved</a></li>
                        <li><a href="{{ route('BangladeshEmbassy.newPassport.rejected') }}"><i class="fa fa-arrow-circle-right"></i>Passport rejected</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i></i> <span>Lost Passport</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('BangladeshEmbassy.lostPassport.request') }}"><i class="fa fa-arrow-circle-right"></i>Passport requests</a></li>
                        <li><a href="{{ route('BangladeshEmbassy.lostPassport.approved') }}"><i class="fa fa-arrow-circle-right"></i>Passport approved</a></li>
                        <li><a href="{{ route('BangladeshEmbassy.lostPassport.rejected') }}"><i class="fa fa-arrow-circle-right"></i>Passport rejected</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i></i> <span>Extension - Renewal</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('BangladeshEmbassy.extensionPassport.request') }}"><i class="fa fa-arrow-circle-right"></i>Passport requests</a></li>
                        <li><a href="{{ route('BangladeshEmbassy.extensionPassport.approved') }}"><i class="fa fa-arrow-circle-right"></i>Passport approved</a></li>
                        <li><a href="{{ route('BangladeshEmbassy.extensionPassport.rejected') }}"><i class="fa fa-arrow-circle-right"></i>Passport rejected</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
