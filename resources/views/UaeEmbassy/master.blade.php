<!DOCTYPE html>
<html>
<head>

    @include('UaeEmbassy.include._header')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("UaeEmbassy.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    @include("UaeEmbassy.include._side-menu")
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('UaeEmbassy.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("UaeEmbassy.include._scripts")

</body>
</html>
