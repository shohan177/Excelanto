<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('TravelAgency.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>

               <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building"></i></i> <span> Enquiries </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('TravelAgency.new_enquiries') }}"><i class="fa fa-arrow-circle-right"></i> New Enquiries</a></li>
                        <li><a href="{{ route('TravelAgency.expired_enquiries') }}"><i class="fa fa-arrow-circle-right"></i> Expired Enquiries</a></li>
                    </ul>
                </li>

               <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building"></i></i> <span> Quotations </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('TravelAgency.submitted_quotations') }}"><i class="fa fa-arrow-circle-right"></i> Submitted Quotations</a></li>
                        <li><a href="{{ route('TravelAgency.approved_quotations') }}"><i class="fa fa-arrow-circle-right"></i> Approved Quotations</a></li>
                    </ul>
                </li>
               <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building"></i></i> <span> Travel Tickets </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('TravelAgency.travel_required') }}"><i class="fa fa-arrow-circle-right"></i> Required Tickets</a></li>
                        <li><a href="{{ route('TravelAgency.travel_booked') }}"><i class="fa fa-arrow-circle-right"></i> Booked Tickets</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
