<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('UaeEmbassy.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>
                 <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building"></i></i> <span> Visa Process </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('UaeEmbassy.stampingRequested') }}"><i class="fa fa-arrow-circle-right"></i> Stamping Requests</a></li>
                        <li><a href="{{ route('UaeEmbassy.stampingApproved') }}"><i class="fa fa-arrow-circle-right"></i> Stamping Approved</a></li>
                        <li><a href="{{ route('UaeEmbassy.stampingRejected') }}"><i class="fa fa-arrow-circle-right"></i> Stamping Rejected</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
