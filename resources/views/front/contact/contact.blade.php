@extends($frontTheme)

@section('frontcontent')

<!-- header -->
@include('front.contact.header')
<!-- //header -->

<!-- inner banner -->
@include('front.contact.animation')
<!-- //inner banner -->

<!-- contact -->
<div class="w3l-contact-info pt-5" id="contact">
    <div class="container py-md-5 py-4">
        <div class="position-relative">
            <h3 class="title-style text-center mb-sm-5 mb-4">Contact Us</h3>
            <div class="title-paw-style">
                <i class="fas fa-paw"></i>
                <i class="fas fa-paw paw-2"></i>
                <i class="fas fa-paw paw-3"></i>
            </div>
        </div>
        <div class="align-self pt-4">
            <div class="contact-infos">
                <div class="single-contact-infos">
                    <div class="icon-box"><i class="fas fa-map-marker-alt color-1"></i></div>
                    <div class="text-box">
                        <h3 class="mb-3">Address info</h3>
                        <p>Coffee bean, 343 cafe coffee lane, #2214 cravel street, NY.</p>
                    </div>
                </div>
                <div class="single-contact-infos">
                    <div class="icon-box"><i class="fas fa-clock color-2"></i></div>
                    <div class="text-box">
                        <h3 class="mb-3">Opening hours</h3>
                        <p class=""> Monday – Friday : 9am - 6pm</p>
                        <p class=""> Saturday : 10am - 4pm</p>
                    </div>
                </div>
                <div class="single-contact-infos">
                    <div class="icon-box"><i class="fas fa-envelope-open-text color-3"></i></div>
                    <div class="text-box">
                        <h3 class="mb-3">Contact info</h3>
                        <p class=""><a href="tel:+1(21) 234 4567">+1(21) 234 4567</a></p>
                        <p class=""> <a href="mailto:info@support.com">info@support.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 pt-md-5">
            <div class="col-lg-6 map order-lg-1 order-2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin"
                    frameborder="0" allowfullscreen=""></iframe>
            </div>
            <div class="col-lg-6 form-inner-cont order-lg-2 order-1 mb-lg-0 mb-5 ps-lg-4">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                    <div class="form-input">
                        <input type="text" name="w3lName" id="w3lName" placeholder="Your name">
                    </div>
                    <div class="form-input">
                        <input type="email" name="w3lSender" id="w3lSender" placeholder="Your email address"
                            required="">
                    </div>
                    <div class="form-input">
                        <textarea name="w3lMessage" id="w3lMessage" placeholder="Your message"
                            required=""></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-style btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //contact -->
@endsection