<!-- header -->
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="#"><img src="{{ asset('frontTheme/images/logo.png') }}" class="img-responsive" alt=""></a>
		</div>
		
		<div class="head-nav">
			<span class="menu"> </span>
			<ul class="cl-effect-1">
				<li><a href="{{ route('front.') }}">Home</a></li>
				<li><a href="{{ route('front.about') }}">About Us</a></li>
				<li><a href="{{ route('front.services') }}">Services</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="404.html">Shortcodes</a></li>
				<li><a href="login.html">Login</a></li>
				<li><a href="{{ route('front.contact') }}">Contact</a></li>
				<div class="clearfix"></div>
			</ul>
		</div>
		<!-- script-for-nav -->
		{{-- <script>
			$( "span.menu" ).click(function() {
			  $( ".head-nav ul" ).slideToggle(300, function() {
				// Animation complete.
			  });
			});
		</script> --}}
		<!-- script-for-nav -->
		<div class="clearfix"> </div>
	</div>
</div>
<!-- header -->