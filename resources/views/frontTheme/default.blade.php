<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title> 
    @include('frontTheme.style')    
</head>

<body>

    <!-- Front Header -->
    @include('frontTheme.header')
    <!-- End Front Header -->

    <!-- Content-->
    @yield('frontcontent')
    <!-- End Content-->

    <!-- footer -->
    @include('frontTheme.footer')
    <!-- //footer -->

    {{-- Script --}}
    @include('frontTheme.script')
    {{-- End Script --}}
</body>
</html>