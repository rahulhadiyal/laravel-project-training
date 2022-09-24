@extends('frontTheme.default')

@section('frontcontent')
<!-- header -->
@include('front.home.header')
<!-- //header -->

<!-- animation -->
@include('front.home.animation')
<!-- //animation -->
<!-- about section -->
<section class="home-about-w3l py-5">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5">
                <div class="position-relative">
                    <h3 class="title-style mb-3">How we can help you properly</h3>
                    <div class="title-paw-style">
                        <i class="fas fa-paw"></i>
                        <i class="fas fa-paw paw-2"></i>
                        <i class="fas fa-paw paw-3"></i>
                    </div>
                </div>
                <p class="text-para">Aurabitur id gravida risus. Fusce eget ex fermentum, ultricies nisi ac sed, lacinia est. Quisque ut lectus consequat, venenatis eros et, sed commodo risus. Nullam sitamet laoreet elit. Suspendisse non init magnaa velit efficitur, dolor eget ex fermentum.</p>
                <a href="about.html" class="btn btn-style mt-sm-5 mt-4">Discover More</a>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <div class="row">
                    <div class="col-6 grids-1">
                        <i class="fab fa-medrt color-1"></i>
                        <h4 class="title-head mt-2 mb-3">Full diagnostics</h4>                             <p>Sed ut perspiciatis unde omnis iste natus error sit oluptatem.</p>
                    </div>
                    <div class="col-6 grids-1">
                        <i class="fas fa-medal color-3"></i>
                        <h4 class="title-head mt-2 mb-3">Awarded service</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit oluptatem.</p>
                    </div>
                    <div class="col-6 grids-1 mt-5">
                        <i class="fas fa-bone color-2"></i>
                        <h4 class="title-head mt-2 mb-3">Dog Breeding</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit oluptatem.</p>
                    </div>
                    <div class="col-6 grids-1 mt-5">
                        <i class="fas fa-paw color-4"></i>
                        <h4 class="title-head mt-2 mb-3">Dog Training</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit oluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section -->

<!-- aboutblock1 section -->
<section class="w3l-homeblock1 py-5" id="about">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 homeaboutblock order-lg-first order-last">
                <div class="position-relative img-border">
                    <img src="assets/images/video.jpg" class="img-fluid video-popup-image radius-image"
                        alt="video-popup">

                    <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                        <span class="video-play-icon">
                            <span class="fa fa-play"></span>
                        </span>
                    </a>
                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <iframe src="https://player.vimeo.com/video/436935040" allowfullscreen></iframe>
                    </div>
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
                        <li class="service-link">
                            <a href="about.html">
                                <i class="fas fa-check-circle"></i>certified groomer
                            </a>
                        </li>
                        <li class="service-link">
                            <a href="about.html">
                                <i class="fas fa-check-circle"></i>20 years of experience
                            </a>
                        </li>
                        <li class="service-link">
                            <a href="about.html">
                                <i class="fas fa-check-circle"></i>Animal Lover
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="about.html" class="btn btn-style mt-4">Learn More</a>
            </div>
        </div>
    </div>
</section>
<!-- //aboutblock1 section -->

<!-- faq section -->
<div class="w3l-faq-block py-5" id="faq">
    <div class="container py-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-7 pe-lg-5 order-lg-first order-last">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                01. Why pet is a part of our life?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                sunt explicabo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 02. How we take care about our pet?</button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                sunt explicabo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 03. Which pet you choose and why? </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                sunt explicabo.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mb-lg-0 mb-5 order-lg-last order-first">
                <div class="position-relative">
                    <h3 class="title-style mb-3">We are working for the community</h3>
                    <div class="title-paw-style">
                        <i class="fas fa-paw"></i>
                        <i class="fas fa-paw paw-2"></i>
                        <i class="fas fa-paw paw-3"></i>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </p>
                <p class="mt-2 mb-sm-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </p>
                <a href="tel:+(21) 255 999 8888" class="call-style d-flex align-items-center"><i class="fas fa-phone-volume me-2"></i> +(21) 255 999 8888</a>
            </div>
        </div>
    </div>
</div>
<!-- //faq section -->

<!-- grids section -->
<section class="w3l-bottom-grids-6 pb-5 pt-4" id="services">
    <div class="container pb-lg-5 pb-4">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="area-box">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h4><a href="services.html" class="title-head">Pet Care</a></h4>
                    <p>Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed etdolor amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="area-box">
                    <i class="fas fa-paw"></i>
                    <h4><a href="services.html" class="title-head">Dog Training</a></h4>
                    <p>Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed doloret amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="area-box">
                    <i class="fas fa-dog"></i>
                    <h4><a href="services.html" class="title-head">Dog Vacation</a></h4>
                    <p>Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed doloret amet.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //grids section -->

<!-- stats section -->
<section class="homeblock-stats py-5" id="stats">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="position-relative">
                    <h3 class="title-style mb-2">Our activities & experience</h3>
                    <div class="title-paw-style">
                        <i class="fas fa-paw"></i>
                        <i class="fas fa-paw paw-2"></i>
                        <i class="fas fa-paw paw-3"></i>
                    </div>
                </div>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim idest laborum.</p>
                <div class="row mt-4 pt-2">
                    <div class="col-6">
                        <div class="counter color-bg-1">
                            <div class="count-title d-flex align-items-center">
                                <div class="timer count-number">630</div>
                                <span class="ms-2">+</span>
                            </div>
                            <p class="count-text">Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="counter color-bg-2">
                            <div class="count-title d-flex align-items-center">
                                <div class="timer count-number">80</div>
                                <span class="ms-2">+</span>
                            </div>
                            <p class="count-text">Professionals</p>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="counter color-bg-3">
                            <div class="count-title d-flex align-items-center">
                                <div class="timer count-number">820</div>
                                <span class="ms-2">+</span>
                            </div>
                            <p class="count-text">Adopted Pets</p>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="counter color-bg-4">
                            <div class="count-title d-flex align-items-center">
                                <div class="timer count-number">90</div>
                                <span class="ms-2">+</span>
                            </div>
                            <p class="count-text">Awards</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 ps-xl-0 mt-lg-0 mt-5">
                <img src="assets/images/about1.jpg" class="img-fluid radius-image" alt="">
            </div>
        </div>
    </div>
</section>
<!-- //stats section -->

<!-- blog section -->
<div class="w3l-grids-block-5 blog-bg-sec py-5">
    <div class="container py-md-5 py-4">
        <div class="position-relative mb-lg-5 mb-4">
            <h3 class="title-style mb-2 text-center">Latest Blog Post</h3>
            <div class="title-paw-style">
                <i class="fas fa-paw"></i>
                <i class="fas fa-paw paw-2"></i>
                <i class="fas fa-paw paw-3"></i>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 grids5-info">
                <a href="#blog"><img src="assets/images/blog1.jpg" alt="" class="img-fluid radius-image" /></a>
                <div class="blog-info-grid">
                    <h5><span class="fa fa-clock-o"></span> Aug 1, 2021</h5>
                    <h4><a href="#blog">Domestic animals can save you from loneliness</a></h4>
                    <div class="blog-info mt-3">
                        <a href="#read">Read More <span class="fa fa-arrow-right ms-1"></span></a>
                        <a href="#comments"><span class="fa fa-comment-o"></span> 3 comments</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids5-info mt-md-0 mt-5">
                <a href="#blog"><img src="assets/images/blog2.jpg" alt="" class="img-fluid radius-image" /></a>
                <div class="blog-info-grid">
                    <h5><span class="fa fa-clock-o"></span> Aug 2, 2021</h5>
                    <h4><a href="#blog">How to bond with your new rescue pet? </a></h4>
                    <div class="blog-info mt-3">
                        <a href="#read">Read More <span class="fa fa-arrow-right ms-1"></span></a>
                        <a href="#comments"><span class="fa fa-comment-o"></span> 3 comments</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids5-info mt-lg-0 mt-5">
                <a href="#blog"><img src="assets/images/blog3.jpg" alt="" class="img-fluid radius-image" /></a>
                <div class="blog-info-grid">
                    <h5><span class="fa fa-clock-o"></span> Aug 3, 2021</h5>
                    <h4><a href="#blog">What happens if a dog doesn’t get adopted? </a></h4>
                    <div class="blog-info mt-3">
                        <a href="#read">Read More <span class="fa fa-arrow-right ms-1"></span></a>
                        <a href="#comments"><span class="fa fa-comment-o"></span> 3 comments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //blog section -->

<!-- testimonials -->
<section class="w3l-clients py-5" id="testimonials">
    <div class="container pt-md-5 pt-4">
        <div class="row w3-testimonial-grids align-items-center">
            <div class="col-lg-6 w3-testimonial-content-top pr-lg-5">
                <div class="position-relative mb-lg-4 mb-sm-2 mb-4">
                    <h3 class="title-style">What our clients think about us</h3>
                    <div class="title-paw-style">
                        <i class="fas fa-paw"></i>
                        <i class="fas fa-paw paw-2"></i>
                        <i class="fas fa-paw paw-3"></i>
                    </div>
                </div>
                <div id="owl-demo1" class="owl-carousel owl-theme py-sm-2 mb-4">
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                        laudantium
                                        voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                        Dolores molestias adipisci dolor sit amet! by the Desire to achieve
                                        Success.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img">
                                        <img src="assets/images/testi1.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>John wilson</h3>
                                        <p class="indentity">Subtitle goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                        laudantium
                                        voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                        Dolores molestias adipisci dolor sit amet! by the Desire to achieve
                                        Success.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="assets/images/testi2.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Julia sakura</h3>
                                        <p class="indentity">Subtitle goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                        laudantium
                                        voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                        Dolores molestias adipisci dolor sit amet! by the Desire to achieve
                                        Success.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="assets/images/testi3.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Roy Mmdson</h3>
                                        <p class="indentity">Subtitle goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                        laudantium
                                        voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                        Dolores molestias adipisci dolor sit amet! by the Desire to achieve
                                        Success.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="assets/images/testi2.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Mike Thyson</h3>
                                        <p class="indentity">Subtitle goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 position-relative ps-lg-5 mt-lg-0 mt-5 pt-lg-0 pt-sm-4">
                <img src="assets/images/about2.jpg" alt="" class="radius-image img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- //testimonials -->
@endsection