<!DOCTYPE html>
<html>
<head>

    @include('EmployerCompany.include._header')
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include("EmployerCompany.include._topbar")
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    {{-- @include("EmployerCompany.include._side-menu") --}}
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->


    <div class="content-page">
        @yield('main-content')
        @include('EmployerCompany.include._footer')
    </div>

</div>


<!-- jQuery  -->
@include("EmployerCompany.include._scripts")

</body>
</html>
