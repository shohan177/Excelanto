<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('TrainingAgency.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="nav-icon fa fa-users"></i></i><span> Post Training</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('TrainingAgency.candidate.new') }}"><i class="fa fa-arrow-circle-right"></i> New Candidates</a></li>
                        <li><a href="{{ route('TrainingAgency.candidate.reported') }}"><i class="fa fa-arrow-circle-right"></i> Reported Candidates</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
