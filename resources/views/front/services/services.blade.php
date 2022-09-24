@extends($frontTheme)

@section('frontcontent')
<!-- header -->
@include('front.services.header')
<!-- //header -->

<!-- inner banner -->
@include('front.services.animation')
<!-- //inner banner -->

<!-- services section -->
<section class="w3l-services py-5">
    <div class="container py-md-5 py-4">
        <div class="position-relative">
            <h3 class="title-style text-center mb-sm-5 mb-4">Why choose us</h3>
            <div class="title-paw-style">
                <i class="fas fa-paw"></i>
                <i class="fas fa-paw paw-2"></i>
                <i class="fas fa-paw paw-3"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box">
                    <i class="fas fa-shopping-bag color-1"></i>
                    <h4><a href="{{ route('front.about') }}" class="title-head">Pet Nutritionist</a></h4>
                    <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duissed et dolor amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-5">
                <div class="area-box">
                    <i class="fas fa-bone color-2"></i>
                    <h4><a href="{{ route('front.about') }}" class="title-head">Quality & Safety</a></h4>
                    <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duissed dolor et amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-5">
                <div class="area-box">
                    <i class="fas fa-stethoscope color-3"></i>
                    <h4><a href="{{ route('front.about') }}" class="title-head">Health & Well-being</a></h4>
                    <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duissed dolor et amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-5">
                <div class="area-box">
                    <i class="fas fa-shopping-bag color-4"></i>
                    <h4><a href="{{ route('front.about') }}" class="title-head">ocean fish meal</a></h4>
                    <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duissed et dolor amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-5">
                <div class="area-box">
                    <i class="fas fa-paw color-1"></i>
                    <h4><a href="{{ route('front.about') }}" class="title-head">Pet Foods</a></h4>
                    <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duissed dolor et amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-5">
                <div class="area-box">
                    <i class="fas fa-dog color-2"></i>
                    <h4><a href="{{ route('front.about') }}" class="title-head">Dog Training</a></h4>
                    <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duissed dolor et amet.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //services section -->

<!-- aboutblock1 section -->
<section class="w3l-homeblock1 blog-bg-sec py-5" id="about">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 homeaboutblock order-lg-first order-last">
                <div class="position-relative img-border">
                    <img src="assets/images/about5.jpg" class="img-fluid video-popup-image radius-image" alt="video-popup">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5 mb-lg-0 mb-5 order-lg-last order-first">
                <div class="position-relative">
                    <h3 class="title-style mb-3">We will make them truly happy</h3>
                    <div class="title-paw-style">
                        <i class="fas fa-paw"></i>
                        <i class="fas fa-paw paw-2"></i>
                        <i class="fas fa-paw paw-3"></i>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </p>
                <div class="mt-4">
                    <ul class="service-list">
                        <li class="service-link"><a href="#url"><i class="fas fa-check-circle"></i>certified groomer</a></li>
                        <li class="service-link"><a href="#url"><i class="fas fa-check-circle"></i>20 years of experience</a></li>
                        <li class="service-link"><a href="#url"><i class="fas fa-check-circle"></i>Animal Lover</a></li>
                    </ul>
                </div>
                <a href="{{ route('front.about') }}" class="btn btn-style mt-4">Learn More</a>
            </div>
        </div>
    </div>
</section>
<!-- //aboutblock1 section -->

<!-- pricing section -->
<section class="w3l-pricing pt-5">
    <div class="container py-md-5 py-4">
        <div class="position-relative">
            <h3 class="title-style text-center mb-sm-5 mb-4">The Best Pricing Plans</h3>
            <div class="title-paw-style">
                <i class="fas fa-paw"></i>
                <i class="fas fa-paw paw-2"></i>
                <i class="fas fa-paw paw-3"></i>
            </div>
        </div>
        <div class="row t-in justify-content-center">
            <div class="col-lg-4 col-md-6 price-main-info">
                <div class="price-inner card box-shadow">

                    <div class="card-body">
                        <h4 class="text-uppercase text-center mb-3">Regular Session</h4>
                        <h5 class="card-title pricing-card-title">Free</h5>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> <span class="fa fa-check"></span> Pet Shower</li>
                            <li> <span class="fa fa-check"></span> Pet Grooming</li>
                            <li class="disable"> <span class="fa fa-check"></span> Hair & Nail Cut</li>
                            <li class="disable"> <span class="fa fa-check"></span> Brush & Blow Dry</li>
                            <li class="disable"> <span class="fa fa-check"></span> Pet Park & Games</li>
                        </ul>
                        <div class="read-more mt-4 pt-lg-2 text-center">
                            <a href="{{ route('front.contact') }}" class="btn btn-style"> Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 price-main-info mt-md-0 mt-4">
                <div class="price-inner card box-shadow active">

                    <div class="card-body">
                        <h4 class="text-uppercase text-center mb-3">Exclusive Session</h4>
                        <h5 class="card-title pricing-card-title">
                            <span class="align-top">$</span>59
                        </h5>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> <span class="fa fa-check"></span> Pet Shower</li>
                            <li> <span class="fa fa-check"></span> Pet Grooming</li>
                            <li> <span class="fa fa-check"></span> Hair & Nail Cut</li>
                            <li class="disable"> <span class="fa fa-check"></span> Brush & Blow Dry</li>
                            <li class="disable"> <span class="fa fa-check"></span> Pet Park & Games</li>
                        </ul>
                        <div class="read-more mt-4 pt-lg-2 text-center">
                            <a href="{{ route('front.contact') }}" class="btn btn-style"> Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 price-main-info mt-lg-0 mt-4">
                <div class="price-inner card box-shadow">

                    <div class="card-body">
                        <h4 class="text-uppercase text-center mb-3">Premium Session</h4>
                        <h5 class="card-title pricing-card-title">
                            <span class="align-top">$</span>99
                        </h5>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> <span class="fa fa-check"></span> Pet Shower</li>
                            <li> <span class="fa fa-check"></span> Pet Grooming</li>
                            <li> <span class="fa fa-check"></span> Hair & Nail Cut</li>
                            <li> <span class="fa fa-check"></span> Brush & Blow Dry</li>
                            <li> <span class="fa fa-check"></span> Pet Park & Games</li>
                        </ul>
                        <div class="read-more mt-4 pt-lg-2 text-center">
                            <a href="{{ route('front.contact') }}" class="btn btn-style"> Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //pricing section -->
@endsection