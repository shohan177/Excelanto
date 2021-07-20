@extends("WelfareCentre/master")

@section('title', 'Edit awareness event')
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
                        <h4 class="pull-left page-title">Edit awareness event</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Welfare Centre</a></li>
                            <li><a href="#"> Awareness </a></li>
                            <li class="active">Edit event</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit awarenss event/programme</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('WelfareCentre.awarenessevent.update', $awarenessEvent->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Basic example -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label for="event_category">Event category</label>
                                                <select class="form-control" id="event_category" name="event_category"
                                                    required="">
                                                    <option selected="" disabled="" value="">Select category</option>
                                                    @foreach ($eventCategories as $eventCategory)
                                                        <option @if ( $awarenessEvent->event_category_id === $eventCategory->id) selected @endif
                                                            value="{{ $eventCategory->id }}">
                                                            {{ $eventCategory->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="event_agenda">Event agenda</label>
                                                <input type="text" class="form-control" id="event_agenda"
                                                    name="event_agenda" value="{{ $awarenessEvent->event_agenda }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="conducted_by">Conducting person</label>
                                                <input type="text" class="form-control" id="conducted_by"
                                                    name="conducted_by" value="{{ $awarenessEvent->conducted_by }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="event_date">Date of event</label>
                                                <input type="date" class="form-control" id="event_date" name="event_date" value="{{ $awarenessEvent->event_date }}">
                                            </div>
                                        </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="panel-body">
                                            <!-- time Picker -->
                                            <div class="form-group">
                                                <label for="event_time">Event time</label>
                                                <input type="time" class="form-control" id="event_time" name="event_time" value="{{ $awarenessEvent->event_time }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="place">Place</label>
                                                <input type="text" class="form-control" id="place" name="place" value="{{ $awarenessEvent->place }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Event description</label>
                                                <textarea class="form-control" id="description" rows="5" name="description">{{ $awarenessEvent->event_description }}</textarea>
                                            </div>
                                        </div> <!-- panel-body -->
                                    </div> <!-- col -->
                                </div> <!-- End row -->
                                <div class="panel-footer text-right">
                                    <button type="submit" name="btnsave"
                                        class="btn btn-md btn-primary float-right">Submit</button>
                                </div>
                            </form>
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
