<!DOCTYPE html>
<html>
<head>

    @include('SuperAdmin.include._header')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("SuperAdmin.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    @include("SuperAdmin.include._side-menu")
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('SuperAdmin.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("SuperAdmin.include._scripts")

</body>
</html>
