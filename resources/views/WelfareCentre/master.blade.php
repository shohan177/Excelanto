<!DOCTYPE html>
<html>
<head>

    @include('WelfareCentre.include._header')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("WelfareCentre.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    @include("WelfareCentre.include._side-menu")
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('WelfareCentre.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("WelfareCentre.include._scripts")

</body>
</html>
