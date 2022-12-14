@extends($frontTheme)

@section('frontcontent')

<div class="container">
	<div class="login-page">
		<div class="account_grid">
			<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
				<h3>NEW CUSTOMERS</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="{{ route('front.register') }}">Create an Account</a>
		   </div>
		   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
				<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form>
					<div>
						<span>Email Address<label>*</label></span>
						<input type="text" name="email"> 
					</div>
					<div>
						<span>Password<label>*</label></span>
						<input type="password" name="password"> 
					</div>
					<a class="forgot" href="#">Forgot Your Password?</a>
					<input type="submit" value="Login">
				</form>
		   </div>	
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

@endsection