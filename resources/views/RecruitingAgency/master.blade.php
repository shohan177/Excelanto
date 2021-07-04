<!DOCTYPE html>
<html>
<head>

    @include('RecruitingAgency.include._header')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("RecruitingAgency.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    @include("RecruitingAgency.include._side-menu")
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('RecruitingAgency.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("RecruitingAgency.include._scripts")

</body>
</html>
