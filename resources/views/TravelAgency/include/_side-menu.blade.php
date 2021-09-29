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
                        <li><a href="{{ route('TravelAgency.enquiries.new') }}"><i class="fa fa-arrow-circle-right"></i> New Enquiries</a></li>
                        <li><a href="{{ route('TravelAgency.enquiries.expired') }}"><i class="fa fa-arrow-circle-right"></i> Expired Enquiries</a></li>
                    </ul>
                </li>

               <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building"></i></i> <span> Quotations </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('TravelAgency.quotations.submitted') }}"><i class="fa fa-arrow-circle-right"></i> Submitted Quotations</a></li>
                        <li><a href="{{ route('TravelAgency.quotations.approved') }}"><i class="fa fa-arrow-circle-right"></i> Approved Quotations</a></li>
                    </ul>
                </li>
               <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building"></i></i> <span> Travel Tickets </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('TravelAgency.travel.required') }}"><i class="fa fa-arrow-circle-right"></i> Required Tickets</a></li>
                        <li><a href="{{ route('TravelAgency.travel.booked') }}"><i class="fa fa-arrow-circle-right"></i> Booked Tickets</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
