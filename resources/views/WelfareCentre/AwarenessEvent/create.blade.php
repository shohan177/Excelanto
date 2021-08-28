@extends("WelfareCentre/master")

@section('title', 'Create awareness event')
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
                            <h3 class="panel-title">Create new awarenss event/programme</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('WelfareCentre.awarenessevent.store') }}" enctype="multipart/form-data">
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
                                                        <option @if (old('event_category') === $eventCategory->id) selected @endif
                                                            value="{{ $eventCategory->id }}">
                                                            {{ $eventCategory->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="event_agenda">Event agenda</label>
                                                <input type="text" class="form-control" id="event_agenda"
                                                    name="event_agenda" placeholder="Enter agenda">
                                            </div>
                                            <div class="form-group">
                                                <label for="conducted_by">Conducting person</label>
                                                <input type="text" class="form-control" id="conducted_by"
                                                    name="conducted_by" placeholder="Enter conducting person name">
                                            </div>
                                            <div class="form-group">
                                                <label for="event_date">Date of event</label>
                                                <input type="date" class="form-control" id="event_date" name="event_date">
                                            </div>
                                        </div><!-- panel-body -->
                                    </div> <!-- col-->
                                    <!-- Horizontal form -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="panel-body">
                                            <!-- time Picker -->
                                            <div class="form-group">
                                                <label for="event_time">Event time</label>
                                                <input type="time" class="form-control" id="event_time" name="event_time">
                                            </div>
                                            <div class="form-group">
                                                <label for="place">Place</label>
                                                <input type="text" class="form-control" id="place" name="place"
                                                    placeholder="Enter place name">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Event description</label>
                                                <textarea class="form-control" id="description" rows="5" name="description"
                                                    placeholder="Type description here.."></textarea>
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
