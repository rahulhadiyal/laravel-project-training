@extends($frontTheme)

@section('frontcontent')

<!--header -->
@include('front.about.header')
<!-- //header -->
<!-- inner banner -->
@include('front.about.animation')
<!-- //inner banner -->

<!-- aboutblock1 section -->
<section class="w3l-homeblock1 py-5" id="about">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5 mb-lg-0 mb-5">
                <div class="position-relative">
                    <h3 class="title-style mb-3">Who we are and what we do</h3>
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
                            <a href="#url"><i class="fas fa-check-circle"></i>Ut enim adminim</a>
                        </li>
                        <li class="service-link">
                            <a href="#url"><i class="fas fa-check-circle"></i>Quis nostrudexerc ulla</a>
                        </li>
                        <li class="service-link">
                            <a href="#url"><i class="fas fa-check-circle"></i>Nisi ut aliquipex eas</a>
                        </li>
                    </ul>
                </div>
                <a href="about.html" class="btn btn-style mt-4">Learn More</a>
            </div>
            <div class="col-lg-6 homeaboutblock">
                <div class="position-relative img-border">
                    <img src="assets/images/about3.jpg" class="img-fluid video-popup-image radius-image" alt="video-popup">
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
        </div>
    </div>
</section>
<!-- //aboutblock1 section -->

<!-- about section -->
<section class="home-about-w3l py-5">
    <div class="container pb-md-5 pb-4">
        <div class="row">
            <div class="col-md-3 col-6 grids-1">
                <i class="fab fa-medrt color-1"></i>
                <h4 class="title-head mt-2 mb-3">Full diagnostics</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit oluptatem.</p>
            </div>
            <div class="col-md-3 col-6 grids-1">
                <i class="fas fa-medal color-3"></i>
                <h4 class="title-head mt-2 mb-3">Awarded service</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit oluptatem.</p>
            </div>
            <div class="col-md-3 col-6 grids-1 mt-md-0 mt-5">
                <i class="fas fa-bone color-2"></i>
                <h4 class="title-head mt-2 mb-3">Dog Breeding</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit oluptatem.</p>
            </div>
            <div class="col-md-3 col-6 grids-1 mt-md-0 mt-5">
                <i class="fas fa-paw color-4"></i>
                <h4 class="title-head mt-2 mb-3">Dog Training</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit oluptatem.</p>
            </div>
        </div>
    </div>
</section>
<!-- about section -->

<!-- faq section -->
<div class="w3l-faq-block py-5" id="faq">
    <div class="container py-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-lg-0 mb-5">
                <img src="assets/images/about4.jpg" class="img-fluid radius-image" alt="">
            </div>
            <div class="col-lg-7 ps-lg-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 01. Why pet is a part of our life?</button>
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 02. How we take care about our pet? </button>
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
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour"> 04. Why pet is a part of our life?
                            </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
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
        </div>
    </div>
</div>
<!-- //faq section -->

<!-- team -->
<section class="w3l-team py-5" id="team">
    <div class="container py-md-5 py-4">
        <div class="position-relative">
            <h3 class="title-style text-center mb-sm-5 mb-4">Meet our Awesome Team</h3>
            <div class="title-paw-style">
                <i class="fas fa-paw"></i>
                <i class="fas fa-paw paw-2"></i>
                <i class="fas fa-paw paw-3"></i>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-6">
                <div class="team-grids text-center">
                    <img src="assets/images/team1.jpg" class="img-fluid" alt="">
                    <div class="team-info">
                        <div class="caption">
                            <div class="social-icons-section text-center">
                                <a class="fac" href="#url">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="twitter" href="#url">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>John Doe</h4>
                <h6>Pet Trainer</h6>
            </div>
            <div class="col-md-3 col-6">
                <div class="team-grids text-center">
                    <img src="assets/images/team3.jpg" class="img-fluid" alt="">
                    <div class="team-info">
                        <div class="caption">
                            <div class="social-icons-section text-center">
                                <a class="fac" href="#url">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="twitter" href="#url">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Martin ker</h4>
                <h6>Pet Trainer</h6>
            </div>
            <div class="col-md-3 col-6 mt-md-0 mt-sm-5 mt-5">
                <div class="team-grids text-center">
                    <img src="assets/images/team2.jpg" class="img-fluid" alt="">
                    <div class="team-info">
                        <div class="caption">
                            <div class="social-icons-section text-center">
                                <a class="fac" href="#url">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="twitter" href="#url">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h4> Alexander</h4>
                <h6>Pet Trainer</h6>
            </div>
            <div class="col-md-3 col-6 mt-md-0 mt-sm-5 mt-5">
                <div class="team-grids text-center">
                    <img src="assets/images/team4.jpg" class="img-fluid" alt="">
                    <div class="team-info">
                        <div class="caption">
                            <div class="social-icons-section text-center">
                                <a class="fac" href="#url">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="twitter" href="#url">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Elizabeth </h4>
                <h6>Pet Trainer</h6>
            </div>
        </div>
    </div>
</section>
<!-- team -->

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
                                    <div class="test-img"><img src="assets/images/testi1.jpg" class="img-fluid" alt="client-img">
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

<!-- footer -->
<footer class="w3l-footer">
    <div class="shape-footer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
            <path fill-opacity="1">
                <animate attributeName="d" dur="20000ms" repeatCount="indefinite" values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />
            </path>
        </svg>
    </div>
    <div class="w3l-footer-16 py-5">
        <div class="container">
            <div class="row footer-p">
                <div class="col-lg-4 pe-lg-5">
                    <h3>About Us</h3>
                    <p class="mt-3">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quominus id quod maxime placeat facere.</p>
                    <div class="columns-2 mt-lg-5 mt-4">
                        <ul class="social">
                            <li>
                                <a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#google"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li>
                                <a href="#github"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-xl-5 col-6 column">
                            <h3>Quick Link</h3>
                            <ul class="footer-gd-16">
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="#clients">Our Clients</a>
                                </li>
                                <li>
                                    <a href="services.html">Services</a>
                                </li>
                                <li>
                                    <a href="#blog">Blog Posts</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 column">
                            <h3>Contact Info</h3>
                            <ul class="footer-contact-list">
                                <li class="">10001, 5th Avenue, #32841 block, USA</li>
                                <li class="mt-2"><a href="tel:+12 23456790">+1223 456 790</a></li>
                                <li class="mt-2"><a href="mailto:info@example.com">info@example.com</a></li>
                                <li class="mt-2"><a href="mailto:info@example.com">www.example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7 col-sm-8 column mt-lg-0 mt-4 pl-xl-0">
                    <h3>Newsletter </h3>
                    <div class="end-column">
                        <form action="#" class="subscribe" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p class="mt-4">Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div>
            </div>
            <div class="below-section text-center pt-lg-4 mt-5">
                <p class="copy-text">&copy; 2021 Puppy Care. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank"> W3Layouts</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->

<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
</button>
@endsection