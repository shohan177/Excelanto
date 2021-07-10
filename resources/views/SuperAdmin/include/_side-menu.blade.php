<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('SuperAdmin.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>
                <li class="has_sub">
                    <a href="{{ route('SuperAdmin.role.index') }}" class="waves-effect"><i class="mdi mdi-account-key"></i> <span> Role's </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('SuperAdmin.role.index') }}"><i class="fa fa-arrow-circle-right"></i> All Role</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-flag-outline"></i> <span> Countries </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('SuperAdmin.country.index') }}"><i class="fa fa-arrow-circle-right"></i> All Country</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
