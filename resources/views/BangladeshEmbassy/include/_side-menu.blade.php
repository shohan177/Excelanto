<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="#" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
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
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
