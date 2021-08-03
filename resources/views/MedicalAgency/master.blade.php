<!DOCTYPE html>
<html>
<head>

    @include('MedicalAgency.include._header')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("MedicalAgency.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    @include("MedicalAgency.include._side-menu")
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('MedicalAgency.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("MedicalAgency.include._scripts")

</body>
</html>
