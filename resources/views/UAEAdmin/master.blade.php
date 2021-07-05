<!DOCTYPE html>
<html>
<head>

    @include('UAEAdmin.include._header')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("UAEAdmin.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    @include("UAEAdmin.include._side-menu")
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('UAEAdmin.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("UAEAdmin.include._scripts")

</body>
</html>
