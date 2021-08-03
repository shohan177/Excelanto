<!DOCTYPE html>
<html>
<head>

    @include('OneStopService_Child.include._header')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("OneStopService_Child.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    {{-- @include("OneStopService_Child.include._side-menu") --}}
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('OneStopService_Child.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("OneStopService_Child.include._scripts")

</body>
</html>
