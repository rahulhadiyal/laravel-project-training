<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{ asset('frontTheme/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontTheme/js/responsiveslides.min.js') }}"></script>

<!-- script-for-nav -->
<script>
    $( "span.menu" ).click(function() {
      $( ".head-nav ul" ).slideToggle(300, function() {
        // Animation complete.
      });
    });
</script>
<!-- script-for-nav -->

<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>

<script type="text/javascript">
    $(window).load(function() {
        
        $("#flexiselDemo3").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,            
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:480,
                    visibleItems: 2
                }, 
                landscape: { 
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });     
    });
</script>
<script type="text/javascript" src="{{ asset('frontTheme/js/jquery.flexisel.js') }}"></script>