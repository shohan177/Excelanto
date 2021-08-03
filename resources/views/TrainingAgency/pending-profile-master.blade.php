<!DOCTYPE html>
<html>
<head>

    @include('TrainingAgency.include._header')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("TrainingAgency.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    {{-- @include("TrainingAgency.include._side-menu") --}}
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('TrainingAgency.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("TrainingAgency.include._scripts")

</body>
</html>
