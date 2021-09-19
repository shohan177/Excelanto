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
                        <li><a href="{{ route('WelfareCentre.travelCandidate.readyToTravel') }}"><i class="fa fa-arrow-circle-right"></i>Ready To Travel</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> WSC registered users</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('WelfareCentre.meetGreet.request') }}">
                                <i class="fa fa-arrow-circle-right"></i>Meet and Greet request
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.jailDeportation.request') }}">
                                <i class="fa fa-arrow-circle-right"></i>Jail deportation request
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.deadbodyTransfer.request') }}">
                                <i class="fa fa-arrow-circle-right"></i>Deadbody transfer request
                            </a>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Compensation </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('WelfareCentre.medicalCompensation.request') }}"><i class="fa fa-arrow-circle-right"></i>  Medical compensation</a></li>
                                <li><a href="{{ route('WelfareCentre.insurance.request') }}"><i class="fa fa-arrow-circle-right"></i> Insurance request</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Certificates </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Issuance Certificate </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.issuanceCertificate.requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.issuanceCertificate.payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.attestationCertificate.paids') }}"><i class="fa fa-arrow-circle-right"></i> Certificate status</a></li>
                                        <li><a href="{{ route('WelfareCentre.attestationCertificate.delivered') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Attestation </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.attestationCertificate.requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.attestationCertificate.payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.attestationCertificate.paids') }}"><i class="fa fa-arrow-circle-right"></i> Certificate status</a></li>
                                        <li><a href="{{ route('WelfareCentre.attestationCertificate.delivered') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Registration </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.registrationCertificate.requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.registrationCertificate.payment') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.registrationCertificate.paids') }}"><i class="fa fa-arrow-circle-right"></i> Certificate status</a></li>
                                        <li><a href="{{ route('WelfareCentre.registrationCertificate.delivered') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.charity.request') }}">
                                <i class="fa fa-arrow-circle-right"></i>Charity request
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.adr.request') }}">
                                <i class="fa fa-arrow-circle-right"></i>ADR request
                            </a>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Legalisation </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> By Government Amnesty </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.legalByGovt.requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.legalByGovt.payments') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.legalByGovt.paids') }}"><i class="fa fa-arrow-circle-right"></i> Legalisation status</a></li>
                                        <li><a href="{{ route('WelfareCentre.legalByGovt.delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>

                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Regular by penalty </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.legalByRegular.requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.legalByRegular.payments') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.legalByRegular.paids') }}"><i class="fa fa-arrow-circle-right"></i> Legalisation status</a></li>
                                        <li><a href="{{ route('WelfareCentre.legalByRegular.delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Change of employer </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.changeOfEmployer.requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.changeOfEmployer.payments') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.changeOfEmployer.paids') }}"><i class="fa fa-arrow-circle-right"></i> Legalisation status</a></li>
                                        <li><a href="{{ route('WelfareCentre.changeOfEmployer.delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Change of visa status </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.changeOfVisa.requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.changeOfVisa.payments') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.changeOfVisa.paids') }}"><i class="fa fa-arrow-circle-right"></i> Legalisation status</a></li>
                                        <li><a href="{{ route('WelfareCentre.changeOfVisa.delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.legalAid.request') }}">
                                <i class="fa fa-arrow-circle-right"></i>Legal aid request
                            </a>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Passport </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> New passport </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.newPassport.requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.newPassport.payments') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.newPassport.status') }}"><i class="fa fa-arrow-circle-right"></i> Passport status</a></li>
                                        <li><a href="{{ route('WelfareCentre.newPassport.delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Lost passport </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.lostPassport.requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.lostPassport.payments') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.lostPassport.status') }}"><i class="fa fa-arrow-circle-right"></i> Passport status</a></li>
                                        <li><a href="{{ route('WelfareCentre.lostPassport.delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Extension - Renewal </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('WelfareCentre.extensionPassport.requests') }}"><i class="fa fa-arrow-circle-right"></i>  Requests</a></li>
                                        <li><a href="{{ route('WelfareCentre.extensionPassport.payments') }}"><i class="fa fa-arrow-circle-right"></i> Payment receipt</a></li>
                                        <li><a href="{{ route('WelfareCentre.extensionPassport.status') }}"><i class="fa fa-arrow-circle-right"></i> Passport status</a></li>
                                        <li><a href="{{ route('WelfareCentre.extensionPassport.delivery') }}"><i class="fa fa-arrow-circle-right"></i> Delivery status</a></li>
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
                            <a href="{{ route('WelfareCentre.awarenessEvent.create') }}">
                                <i class="fa fa-arrow-circle-right"></i>Create new event
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.awarenessEvent.upcoming_events') }}">
                                <i class="fa fa-arrow-circle-right"></i>Upcoming events
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('WelfareCentre.awarenessEvent.total_events') }}">
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
