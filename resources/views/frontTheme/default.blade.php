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

    <!-- Content-->
    @yield('frontcontent')
    <!-- End Content-->

    <!-- footer -->
    @include('frontTheme.footer')
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>

    {{-- Script --}}
    @include('frontTheme.script')
    {{-- End Script --}}
</body>

</html>