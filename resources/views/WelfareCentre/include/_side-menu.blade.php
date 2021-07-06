<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('WelfareCentre.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Job Approval </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('WelfareCentre.NewJobPost') }}"><i class="fa fa-arrow-circle-right"></i>  New Posts</a></li>
                        <li><a href="{{ route('WelfareCentre.jobApproved') }}"><i class="fa fa-arrow-circle-right"></i> Approved Posts</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Travel Candidates</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('WelfareCentre.TravelCandidates') }}"><i class="fa fa-arrow-circle-right"></i>Ready To Travel</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> WSC registered users</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('WelfareCentre.meet_greet_request') }}">
                                <i class="fa fa-arrow-circle-right"></i>Meet and Greet request
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.jail_deportation_request') }}">
                                <i class="fa fa-arrow-circle-right"></i>Jail deportation request
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.deadbody_transfer_request') }}">
                                <i class="fa fa-arrow-circle-right"></i>Deadbody transfer request
                            </a>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Compensation </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('WelfareCentre.medical_compensation_request') }}"><i class="fa fa-arrow-circle-right"></i>  Medical compensation</a></li>
                                <li><a href="{{ route('WelfareCentre.insurance_request') }}"><i class="fa fa-arrow-circle-right"></i> Insurance request</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Certificates </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Issuance Certificate </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.issuance_certificate_requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.certificate_issue_payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.issuance_certificate') }}"><i class="fa fa-arrow-circle-right"></i> Certificate status</a></li>
                                        <li><a href="{{ route('WelfareCentre.issuance_delivery_status') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Attestation </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.attestation_certificate_requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.certificate_attestation_payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.attestation_certificate') }}"><i class="fa fa-arrow-circle-right"></i> Certificate status</a></li>
                                        <li><a href="{{ route('WelfareCentre.attestation_delivery_status') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Registration </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.registration_certificate_requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.certificate_registration_payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.registration_certificate') }}"><i class="fa fa-arrow-circle-right"></i> Certificate status</a></li>
                                        <li><a href="{{ route('WelfareCentre.registration_delivery_status') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.charity_request') }}">
                                <i class="fa fa-arrow-circle-right"></i>Charity request
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.adr_request') }}">
                                <i class="fa fa-arrow-circle-right"></i>ADR request
                            </a>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Legalisation </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> By Government Amnesty </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.legal_by_govt_request') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.legal_by_govt_payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.legal_by_govt_paid') }}"><i class="fa fa-arrow-circle-right"></i> Legalisation status</a></li>
                                        <li><a href="{{ route('WelfareCentre.legal_by_govt_delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>

                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Regular by penalty </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.legal_regular_request') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.legal_regular_payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.legal_regular_paid') }}"><i class="fa fa-arrow-circle-right"></i> Legalisation status</a></li>
                                        <li><a href="{{ route('WelfareCentre.legal_regular_delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Change of employer </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.change_emp_request') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.change_emp_payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.change_emp_paid') }}"><i class="fa fa-arrow-circle-right"></i> Legalisation status</a></li>
                                        <li><a href="{{ route('WelfareCentre.change_emp_delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Change of visa status </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.change_visa_request') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.change_visa_payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.change_visa_paid') }}"><i class="fa fa-arrow-circle-right"></i> Legalisation status</a></li>
                                        <li><a href="{{ route('WelfareCentre.change_visa_delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.legal_aid_request') }}">
                                <i class="fa fa-arrow-circle-right"></i>Legal aid request
                            </a>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Passport </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> New passport </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.new_passport_request') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.new_passport_payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.new_passport_status') }}"><i class="fa fa-arrow-circle-right"></i> Passport status</a></li>
                                        <li><a href="{{ route('WelfareCentre.new_passport_delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Lost passport </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.lost_passport_request') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.lost_passport_payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.lost_passport_status') }}"><i class="fa fa-arrow-circle-right"></i> Passport status</a></li>
                                        <li><a href="{{ route('WelfareCentre.lost_passport_delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Extension - Renewal </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.renew_passport_request') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.renew_passport_payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.renew_passport_status') }}"><i class="fa fa-arrow-circle-right"></i> Passport status</a></li>
                                        <li><a href="{{ route('WelfareCentre.renew_passport_delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span>  Awareness Events


                        </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('WelfareCentre.awarenessevent.create') }}">
                                <i class="fa fa-arrow-circle-right"></i>Create new event
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.awarenessevent.upcoming_events') }}">
                                <i class="fa fa-arrow-circle-right"></i>Upcoming events
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.awarenessevent.total_events') }}">
                                <i class="fa fa-arrow-circle-right"></i>Total events
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
