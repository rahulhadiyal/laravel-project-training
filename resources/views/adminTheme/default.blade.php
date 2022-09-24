<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('adminTheme.style')
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
{{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div> --}}

<!-- Navbar -->
    @include('adminTheme.header')
<!-- /.navbar -->

<!-- Main Sidebar Container --> 
    @include('adminTheme.sidebar')
<!-- /.Main Sidebar Container -->

<!-- start content -->
    @yield('content')
<!-- end content -->

<!-- Start Footer-->
    @include('adminTheme.footer')
<!-- End Footer-->


</div>
<!-- ./wrapper -->

@include('adminTheme.script')
</body>
</html>
