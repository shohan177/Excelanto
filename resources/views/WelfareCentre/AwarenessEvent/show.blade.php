@extends("WelfareCentre/master")

@section('title', 'All Job Posts')
@section('DataTableCss')

@endsection

@section('main-content')
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Create awareness event</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Welfare Centre</a></li>
                            <li><a href="#"> Awareness </a></li>
                            <li class="active">Create new event</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Event details</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                        <dt class="col-sm-4">Event category</dt>
                                        <dd class="col-sm-8">{{  $awarenessEvent->eventCategory->category_name  }}</dd>
                                        <dt class="col-sm-4">Event agenda</dt>
                                        <dd class="col-sm-8">{{  $awarenessEvent->event_agenda  }}</dd>
                                        <dt class="col-sm-4">Date of event</dt>
                                        <dd class="col-sm-8">{{  $awarenessEvent->event_date  }}</dd>
                                        <dt class="col-sm-4">Event time</dt>
                                        <dd class="col-sm-8">{{  $awarenessEvent->event_time  }}</dd>
                                        <dt class="col-sm-4">Place</dt>
                                        <dd class="col-sm-8">{{  $awarenessEvent->place  }}</dd>
                                        <dt class="col-sm-4">Conducting person</dt>
                                        <dd class="col-sm-8">{{  $awarenessEvent->conducted_by  }}</dd>
                                        <dt class="col-sm-4">Event description</dt>
                                        <dd class="col-sm-8">{{  $awarenessEvent->event_description  }}</dd>
                                        <dt class="col-sm-4">Updated on</dt>
                                        <dd class="col-sm-8">{{  $awarenessEvent->created_at  }}</dd>
                                        <dt class="col-sm-4">Event status</dt>
                                        <dd class="col-sm-8"><span class="badge badge-primary">{{  $awarenessEvent->event_status }}</span>
                                        </dd>

                        </div><!-- panel-body -->
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
    </div>
    <!--End content -->
@endsection

@section('DataTableJs')

@endsection
