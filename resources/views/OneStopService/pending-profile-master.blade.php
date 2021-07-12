<!DOCTYPE html>
<html>
<head>

    @include('OneStopService.include._header')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("OneStopService.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    {{-- @include("OneStopService.include._side-menu") --}}
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('OneStopService.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("OneStopService.include._scripts")

</body>
</html>
