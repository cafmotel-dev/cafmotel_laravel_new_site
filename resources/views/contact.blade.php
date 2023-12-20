@extends('app')
@section('content')
<!-- Start Page Title Area -->
 <!-- <script src=
        "https://www.google.com/recaptcha/api.js" async defer>
    </script> -->
 
<section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Contact Us</h1>
            </div>
        </div>

        <div class="shape2"><img src="assets/img/shape/shape2.png" alt="image"></div>
        <div class="shape3"><img src="assets/img/shape/shape3.png" alt="image"></div>
        <div class="shape5"><img src="assets/img/shape/shape5.png" alt="image"></div>
        <div class="shape6"><img src="assets/img/shape/shape6.png" alt="image"></div>
        <div class="shape7"><img src="assets/img/shape/shape7.png" alt="image"></div>
        <div class="shape8"><img src="assets/img/shape/shape8.png" alt="image"></div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <h3>Office In USA</h3>
                        <p>{{env('OFFICE_IN_USA')}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <h3>Office In Canada</h3>
                        <p>{{env('OFFICE_IN_CANADA')}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <h3>Office In India</h3>
                        <p>{{env('OFFICE_IN_INDIA')}}</p>
                    </div>
                </div> --}}



                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <h3>Our Phone</h3>
                        <p>Main Line:{{env('MAIN_LINE')}}<br/> Sales: {{env('SALES')}} <br/> Support :{{env('SUPPORT')}}

</p>
                        
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-envelope'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>
                        <h3>Emails</h3>
                          <p>Sales: <a href="mailto:sales@Cafmotel.com"><span>{{env('SALES_EMAIL')}}</span></a>
                        </p>
                        <p>Support: <a href="mailto:support@Cafmotel.com"><span>{{env('SUPPORT_EMAIL')}}</span></a></p>
                        <p>Channel Partners: <a href="mailto:reseller@Cafmotel.com"> {{env('CHANNEL_PARTNERS_EMAIL')}}</a></p>
                       
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-time-five'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-time-five'></i>
                        </div>
                        <h3>Hours of Operation</h3>
                        <p>Monday - Friday: 09:00 - 20:00</p>
                        <p>Sunday & Saturday: 10:30 - 22:00</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Get in Touch</span>
                <h2>Ready to Get Started?<span class="overlay"></span></h2>
                <p>Your email address will not be published. </p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-image" data-tilt>
                        <img src="assets/img/contact.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                                         <div class="contact-form">
                   
                        <form method="post" role="form"action="{{ route('contact.form') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" required
                                            data-error="Please enter your name" placeholder="Your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" required
                                            data-error="Please enter your email" placeholder="Your email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input  type="text" name="phone" class="form-control" id="phone_number"
                                            required data-error="Please enter your phone number"
                                            placeholder="Your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="6"
                                            required data-error="Please enter your message"
                                            placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
<!-- div to show reCAPTCHA -->

<!-- <div class="g-recaptcha" 
                data-sitekey="6LcPjF4iAAAAADIwgoIVh8A2SE25VYblc3M0qZOp">
            </div> -->
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" name="submit" class="default-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Map Area -->
    <!-- <div id="map">

        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=250 Glen Arbour Way, Hammonds
                            Plain, NS B4B 1T6&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                 



            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                    height: 400px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                    height: 400px;
                }

                .gmap_iframe {
                    height: 400px !important;
                }
            </style>
        </div>
    </div> -->
    <!-- End Map Area -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>           
      <script src="https://cdn.jsdelivr.net/npm/imask"></script>
<script>
      var phoneInput = document.getElementById('phone_number');
    var phoneMask = new IMask(phoneInput, {
        mask: '(000) 000-0000'
    }); 
    </script>
@endsection