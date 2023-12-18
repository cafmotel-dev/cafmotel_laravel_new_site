@extends('app')
@section('content')

 <!-- Start Main Banner Area -->
    <section class="home-wrapper-area">
        <div class="container">
            <div class="home-slides owl-carousel owl-theme">
                <div class="single-banner-item">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="banner-content">
                                <span class="sub-title mb-2">
                                VOICE AUTOMATION SOLUTIONS</p>
                                <h1 class="mb-2">Conversational AI</h1>

                                <p class="subline">Be Inspired By Communication</p>

                                <div class="btn-box">
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('contact')}}" class="default-btn">Talk to an expert</a>
                                       
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="banner-image">
                                <img src="assets/img/cai3.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

               

            </div>
        </div>

        <div class="shape1"><img src="assets/img/shape/shape1.png" alt="image"></div>
        <div class="shape2"><img src="assets/img/shape/shape2.png" alt="image"></div>
        <div class="shape3"><img src="assets/img/shape/shape3.png" alt="image"></div>
        <!-- <div class="shape4"><img src="assets/img/shape/shape4.png" alt="image"></div> -->
        <div class="shape5"><img src="assets/img/shape/shape5.png" alt="image"></div>
        <div class="shape6"><img src="assets/img/shape/shape6.png" alt="image"></div>
        <div class="shape7"><img src="assets/img/shape/shape7.png" alt="image"></div>
        <div class="shape8"><img src="assets/img/shape/shape8.png" alt="image"></div>
        <div class="shape13"><img src="assets/img/shape/shape13.png" alt="image"></div>
        <div class="shape14"><img src="assets/img/shape/shape14.png" alt="image"></div>
    </section>
    <!-- End Main Banner Area -->

  


    <!-- Start Services Area -->
    <section class="services-area bg-f9f9f9 pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <!-- <span class="sub-title">Services</span> -->
                <h2>Build A Cloud-Based Business Communication Platform</h2>
                <p>Smart way to connect to your leads and convert them in sales with best VoIP phone service </p>
            </div>

            <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                            <img src="assets/img/services/icon/ai.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{url('conversationalai')}}">Conversational AI</a></h3>
                        <p>A positive customer experience can be expedited by determining caller intent quickly.</p>
                        <a href="{{url('conversationalai')}}" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                            <img src="assets/img/services/icon/7.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{asset('canada-virtual-phone-number')}}">Virtual number</a></h3>
                        <p>Get a virtual phone number to route all the business departments to an IVR or mobile without any hassle.</p>
                        <a href="{{asset('canada-virtual-phone-number')}}" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/8.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{asset('canada-toll-free-number')}}">Toll Free</a></h3>
                        <p>
                        Get domestic and international toll free numbers and make it fast to contact your business.
                        </p>
                        <a href="{{asset('canada-toll-free-number')}}" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/2.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{asset('call-center')}}">Distributed Call Center</a></h3>
                        <p>Avail the most of both the inbound call center and outbound call center services on cloud
                        </p>
                        <a href="{{asset('call-center')}}" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/6.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{asset('e-fax')}}">E-Fax</a></h3>
                        <p>Get fax directly to your inbox without having a physical fax machine and send it using our platform.</p>
                        <a href="{{asset('e-fax')}}" class="learn-more-btn"><i class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/1.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{asset('smart-ivr-system')}}">Smart IVR</a></h3>
                        <p>Build a IVR flow to control a large number of incoming calls and direct straight to agents according to the caller's input.
                        </p>
                        <a href="{{asset('smart-ivr-system')}}" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/12.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{url('phone-number-masking')}}">Number masking</a></h3>
                        <p>protection for the privacy of customers, by their phone numbers secure without any exchange of information.</p>
                        <a href="{{url('phone-number-masking')}}" class="learn-more-btn"><i class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/9.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{asset('outbound-call-service')}}">Outbound Calling</a></h3>
                        <p>
                        Enhance the productivity with automated outbound calls for agents and optimize their time strategically.

                        </p>
                        <a href="{{asset('outbound-call-service')}}" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a><br><br>
                    </div>
                </div>

                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/2.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{url('messaging')}}">Text Messaging</a></h3>
                        <p>Through our platform, send promotional and transactional text messages to customers with the same virtual number.</p>
                        <a href="{{url('messaging')}}" class="learn-more-btn"><i class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/7.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{url('call-conferencing-service')}}">Conferencing</a></h3>
                        <p>A simple yet feature-rich audio and web conferencing program to host all meetings online anytime from anywhere.
                        </p>
                        <a href="{{url('call-conferencing-service')}}" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                

                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/13.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="#">API Management</a></h3>
                        <p>White label all activities by integrating all advanced features into your platform with an easy to configure API</p>
                        <a href="" class="learn-more-btn"><i class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/14.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="#">Lead Management</a></h3>
                        <p>Add and manage all your different lead sources in a few clicks using the top- notch integrated lead management platform.
                        </p>
                        <a href="" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/5.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="#">Email Marketting</a></h3>
                        <p>Take your business to the next level with the fast track sales process, send emails to customers while talking over a phone call with them.


                        </p>
                        <a href="#" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/4.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="#">CRM Integration</a></h3>
                        <p>A single, integrated platform providing the best solutions for next-generation communication</p>
                        <a href="#" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/3.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="{{url('click-to-call')}}">Click to Call</a></h3>
                        <p>Enable yourself to connect with customers and agents quickly and efficiently with a click to call.
                        </p>
                        <a href="{{url('click-to-call')}}" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="">
                        <img src="assets/img/services/icon/2.png" alt="" class="img-fluid">
                            <!-- <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div> -->
                        </div>
                        <h3><a href="#">Progressive Dialer</a></h3>
                        <p>Improve agent productivity with progressive dialer software.
                        </p>
                        <a href="#" class="learn-more-btn"><i
                                class="left-icon flaticon-next-button"></i> Learn More <i
                                class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Area -->

  

    <!-- Start Feedback Area -->
    <section class="feedback-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="feedback-image">
                        <img src="assets/img/feedback-img1.jpg" alt="image">
                        <img src="assets/img/feedback-img2.jpg" alt="image">
                        <img src="assets/img/feedback-img3.jpg" alt="image">
                        <img src="assets/img/feedback-img4.jpg" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="feedback-content">
                        <span class="sub-title">Feedback</span>
                        <h2>What Our Clients Are Saying?</h2>

                        <div class="feedback-slides owl-carousel owl-theme">
                            <div class="single-feedback-item">

                                <p>"Happy that Cafmotel have come to such a great use during difficult times, we cloud switch to WFH system for all CS personal and today everyone 
                                            supporting from home and giving customer all essential services - keep it up and a big thanks."</p>

                                <div class="client-info">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/user1.jpg" alt="image">
                                        <div class="title">
                                            <h3>Andrew Gomez</h3>
                                            <span> CIO WeAdvanceNow</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-feedback-item">
                                <p>"Happy that Cafmotel have come to such a great use during difficult times, we cloud switch to WFH system for all CS personal and today everyone 
                                            supporting from home and giving customer all essential services - keep it up and a big thanks."</p>

                                <div class="client-info">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/user2.jpg" alt="image">
                                        <div class="title">
                                            <h3>MRINAL CHAKRABORTY</h3>
                                            <span>CIO WeAdvanceNow</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-feedback-item">
                                <p>"Happy that Cafmotel have come to such a great use during difficult times, we cloud switch to WFH system for all CS personal and today everyone 
                                            supporting from home and giving customer all essential services - keep it up and a big thanks."</p>

                                <div class="client-info">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/user3.jpg" alt="image">
                                        <div class="title">
                                            <h3>MRINAL CHAKRABORTY</h3>
                                            <span> CIO
DTDC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape16"><img src="assets/img/shape/shape16.png" alt="image"></div>
    </section>
    <!-- End Feedback Area -->



    <div class="buzz-features-area  bg-f9f9f9   pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span class="sub-title"></span>
                <h2>Built for Businesses</h2>
                <!-- <p>We would be privileged to have you as one of our partners.
                        Join Cafmotel family today and drive your business forward &amp; increase your revenue. Let's grow together!</p> -->
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInUp animated" data-wow-delay="100ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="features-image">
                            <a ><img src="assets/img/services/icon-10-1.png"
                                    alt="image"></a>
                        </div>
                        <h3>
                            <a >Record all Widespread Communication</a>
                        </h3>
                         <p> Through our distributed call center mobile application, track and record all business conversations with your agents made from a personal number anytime from anywhere.</p>
                       <!-- <a href="hosted-pbx.php" class="features-btn">View More <i
                                class="flaticon-next-button"></i></a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInDown animated" data-wow-delay="200ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInDown;">
                        <div class="features-image">
                            <a><img src="assets/img/services/icon-11.png"
                                    alt="image"></a>
                        </div>
                        <h3>
                            <a >Ensure Data Security</a>
                        </h3>
                          <p>Without wondering about maintenance, keep the customer data secure with our advanced platform and channelize it as per your requirements. And that too with advanced data safety.</p>
                      <!-- <a href="lead-management.php" class="features-btn">View More <i
                                class="flaticon-next-button"></i></a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="features-image">
                            <a><img src="assets/img/services/lead-1.png"
                                    alt="image"></a>
                        </div>
                        <h3>
                            <a >Around The Clock Support</a>
                        </h3>
                         <p>No matter what time, always be available for your customers and never miss a business lead with 24/7 support.</p>
                        <!-- <a href="call-center.php" class="features-btn">View More <i
                                class="flaticon-next-button"></i></a> -->
                               
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="features-image">
                            <a><img src="assets/img/services/icon-10-1.png"
                                    alt="image"></a>
                        </div>
                        <h3>
                            <a >Real-time Analytics Dashboards</a>
                        </h3>
                         <p>Customized analytics dashboard curation to get insights by integrating the CRM suite using cloud telephone solutions.</p>
                        <!-- <a href="call-center.php" class="features-btn">View More <i
                                class="flaticon-next-button"></i></a> -->
                               
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="features-image">
                            <a><img src="assets/img/services/icon-11.png"
                                    alt="image"></a>
                        </div>
                        <h3>
                            <a >Personalized Customer Experience</a>
                        </h3>
                         <p>Through personalized IVR feature, improve customer interaction experience with customized greetings in regional languages.</p>
                        <!-- <a href="call-center.php" class="features-btn">View More <i
                                class="flaticon-next-button"></i></a> -->
                               
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="features-image">
                            <a><img src="assets/img/services/icon-12.png"
                                    alt="image"></a>
                        </div>
                        <h3>
                            <a >Global Presence</a>
                        </h3>
                         <p>Widen your customer base using virtual numbers for international locations that too without setting up any office.</p>
                        <!-- <a href="call-center.php" class="features-btn">View More <i
                                class="flaticon-next-button"></i></a> -->
                               
                    </div>
                </div>



            </div>
            


        </div>
    </div>
  <!-- Start Partner Area -->
  <section class="partner-area ptb-70">
        <div class="container">

            <div class="section-title">
                <span class="sub-title">Our Clients</span>
                <h2> Trusted by over 50+ organizations across 3 countries</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna.</p> -->
            </div>

            <div class=" associate-brands owl-carousel owl-theme  ">
                <div class="tem single-partner-item">
                    <img src="assets/img/partners/velocity.png" alt="image">
                </div>

                <div class="item single-partner-item">
                    <img src="assets/img/partners/lendtek.png" alt="image">
                </div>
              
                <div class="single-partner-item">
                    <img src="assets/img/partners/luthersales.png" alt="image">
                </div>

                <div class="single-partner-item">
                    <img src="assets/img/partners/brightny.png" alt="image">
                </div>

                <div class="single-partner-item">
                    <img src="assets/img/partners/weadvancenow.png" alt="image">
                </div>
                <div class="single-partner-item">
                    <img src="assets/img/partners/sunrise.png" alt="image">
                </div>
                <div class="single-partner-item">
                    <img src="assets/img/partners/figcapital.png" alt="image">
                </div>
                <div class="single-partner-item">
                    <img src="assets/img/partners/bluewhalefunding.png" alt="image">
                </div>
                <div class="single-partner-item">
                    <img src="assets/img/partners/trio.png" alt="image">
                </div>
                <!-- <div class="single-partner-item">
                    <img src="assets/img/partner/partner-img6.png" alt="image">
                </div> -->
            </div>



        </div>
    </section>
    <!-- End Partner Area -->

<!-- product area -->
    <div class="buzz-features-area bg-f9f9f9  pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span class="sub-title"></span>
                <h2>Are You Planning to Expand Your Business Globally?</h2>
                <p>We would be privileged to have you as one of our partners.
                        Join Cafmotel family today and drive your business forward &amp; increase your revenue. Let's grow together!</p>
            </div>

            <div class="row text-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInUp animated" data-wow-delay="100ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="features-image">
                            <a ><img src="assets/img/join-our-partner.png"
                                    alt="image" class="img-fluid" style="max-width:70%"></a>
                        </div>
                        <h3>
                            <a >Join Our Partner Program</a>
                        </h3>
                       
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInDown animated" data-wow-delay="200ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInDown;">
                        <div class="features-image">
                            <a>
                                <img src="assets/img/start-selling.png"
                                    alt="image" class="img-fluid" style="max-width:44%">
                                </a>
                        </div>
                        <h3>
                            <a >Start Selling Behalf of us</a>
                        </h3>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="features-image">
                            <a><img src="assets/img/Revenue.png"
                                    alt="image" class="img-fluid" style="max-width: 45%;"></a>
                        </div>
                        <h3>
                            <a >Increase Your revenue</a>
                        </h3>
                       
                               
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                <a href="#" class="default-btn">Become a Channel Partner</a>
                </div>
            </div>


        </div>
    </div>
    <!-- end product area -->
    <section class="partner-area      ptb-70">
        <div class="container">
            <div class="row">
            <div class="section-title">
                <span class="sub-title"></span>
                <h2>FAQ's</h2>
               <!-- <p>Authentic Programs For Your Businesses.</p> -->
            </div>
            <div class="what-we-do-content-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        What are Virtual Numbers?
                                    </a>
    
                                    <div class="accordion-content show" style="">
                                        <p>Virtual Numbers are cloud-based phone number that is not associated with
                                            any particular location and generally used to divert the call to an assigned
                                            phone number(s). It provides a confidential communication environment to
                                            the caller and receiver through masking their identity during the phone call.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        What Are the Advantages of Possessing a Virtual Cell Number?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                        <p>There are lots of benefits of using a virtual number. Some of them are as
follows:
                                        <ul><li> Operators can control the calls anytime from anywhere,</li>
                                            <li> Managers can forward the business calls to their phone numbers,</li>
                                            <li>Coupling a virtual number with other services like outbound calls,missed call, solutions, and IVR solutions,</li>
                                            <li>Stops the off-platform transactions by masking the contact numbers of both caller and receiver,</li>
                                            <li>Above all, it can record the conversation during a call.</li>

                                        </ul>
                                    </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        Are the Virtual Number and Toll Free Number Different?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                            <p>
                                                Since a virtual number is not directly associated with a telephone line or any
                                                location. Such numbers work to forward calls to a designated phone number
                                                formatted by a person who holds the virtual number. On the other hand, the
                                                toll free number doesn't let the callers bear any phone call charges. Also, the
                                                owner of the toll-free number incurs the fee of every arriving call. In addition
                                                to this, these numbers generally begin with 1800 and are eleven digits in total.
                                            </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        From Where I Can Get a Virtual Phone Number with Call Recording Program?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                        <p>You don't need to worry about purchasing a virtual phone number with call recording software as Cafmotel is the best place to get such services. With the consent of a caller, all calls get recorded automatically. The service is cloud- based and can be tracked and recorded anytime.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        What Is the Most Reliable Call Forwarding Service for a Startup?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                        <p>Since many services cloud telephony provides, among which call center solution. It is the most reliable option for call forwarding service for a startup. It lets you build a small call center on the cloud. Also, there is no need for physical space for startup businesses, and quite affordable. Based on technology, there is no need for an extra employee in your company to route the incoming calls to the available agents. Above all, irrespective of physical boundaries, everything is accessible anywhere from the cloud.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        What is cloud technology?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                        <p>Cloud Technology allows the users to access stored data in a virtual space through networks, in most cases, via satellite. Using it, Cafmotel offers you its services and makes your business available to operate from anywhere. As "On the cloud" means hosted, it is also another word for Hosted Technology.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        Can I Get a Free Virtual Phone Number?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                        <p>We at Cafmotel have several plans for a startup, among which you can get a free virtual phone number. During the early stage of your startup of 6 months, you can access a free virtual phone number and know more click here.- www.Cafmotel.com</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        What is a VIP Number?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                        <p>A VIP number is also known as Vanity Number, is a fancy number that is easy to remember. Usually, it comes with your desired set of digits or in a specified format that you'd prefer. Besides, you can get it through a small premium by paying a small amount of money..</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        Can I Use Bulk Sms Service Through My Virtual Number If My Number Is on the Cloud?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                        <p>Yes! If you want to use bulk SMS service using your virtual number, you can do that. You can use your virtual number like any ordinary phone number.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        Where Can I Set Up a Virtual Number in North America?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                        <p>You don't need to set up a virtual number in North America. All you have to do is contacting us at +1631 557 1989. And discuss the requirements that you want. The experts at Cafmotel will take care of everything and start receiving calls from your customers from anywhere.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        In Which Countries Are Your Virtual Number Services Available?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                        <p>With a strong presence in North America, Europe, and Australia, Cafmotel serves 35 countries in the APAC region.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        How Can I Avail Your Virtual Number Services Outside North America?
                                    </a>
    
                                    <div class="accordion-content" style="display: none;">
                                        <p>It is quite simple to get a virtual number service outside North America. Connect with a representative at Cafmotel at the dedicated phone number for your region. And we make sure that you connect with the right people. Be it North American, Australia, UK, Mexico, and India. We serve you with a zeal to deliver you the best service in the world. Get in touch with us.</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
        </div>

 


        </div>
    </section>
    <div class="buzz-features-area bg-f9f9f9  bg pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span class="sub-title"></span>
                <h2>What We Guarantee</h2>
                <p>Authentic Programs For Your Businesses.</p>
            </div>

            <div class="row text-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInUp animated" data-wow-delay="100ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="features-image">
                            <a ><img src="assets/img/icon-10.png"
                                    alt="image"></a>
                        </div>
                        <h3>
                            <a >24/7/365 Support</a>
                        </h3>
                       <!-- <p> We are delighted to providing you hassle-free service through a dedicated support team. Our experienced technical support team is accessible 24*7 round the year to assist our customers with any queries or issues.</p> -->
                     <!--     <a href="hosted-pbx.php" class="features-btn">View More <i
                                class="flaticon-next-button"></i></a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInDown animated" data-wow-delay="200ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInDown;">
                        <div class="features-image">
                            <a><img src="assets/img/icon-11.png"
                                    alt="image"></a>
                        </div>
                        <h3>
                            <a >30 Day Money Back Guarantee</a>
                        </h3>
                      <!-- <p>We believe in delivering the utmost customer satisfaction through our services. And we are so sure of our services that we guarantee 100% refund when the customer is not satisfied with the services under 30 days of the purchase.</p> -->
                          <!-- <a href="lead-management.php" class="features-btn">View More <i
                                class="flaticon-next-button"></i></a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="buzz-features-card wow animate__ animate__fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1000ms"
                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="features-image">
                            <a><img src="assets/img/icon-12.png"
                                    alt="image"></a>
                        </div>
                        <h3>
                            <a >99.9% Uptime</a>
                        </h3>
                         <!-- <p>Hosted with AWS in many locations covering North America, our platform provides the full redundancy and failover, helping us to keep an outstanding 99.99% uptime all the time.</p> -->
                        <!--<a href="call-center.php" class="features-btn">View More <i
                                class="flaticon-next-button"></i></a> -->
                               
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                <!-- <a href="about-us.php" class="default-btn mb-2">Become a Channel Partner</a> -->


                <p class="text" style="color:black;">All Packages include a <strong style="font-weight:bold;">30-day money back guarantee.</strong></p>
                <p class="text" style="color:black;">Have a question? Call us at <a href="tel:+16315571989">+1631 557 1989</a> ext 1 or email us at sales@Cafmotel.com.</p>
                </div>
            </div>


        </div>
    </div>
    <!-- Start Project Start Area -->
    <style>
    .ptb-100 {
    padding-top: 38px;
    padding-bottom: 66px;
}
</style>
<!-- Start Project Start Area -->
<section class="project-start-area ptb-100 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="project-start-image">
                        <img src="assets/img/project-start1.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="project-start-content">
                        <!-- <span class="sub-title">Support Center</span> -->
                        <h2>Our support center is available round the clock 365 days.</h2>
                        <p>We'd love to hear from you. Here's how you can reach us.
Interested in the Cafmotel platform but don't know what to choose? Give us a call and we'll offer the solution that works for your industry.</p>
                        <a href="{{url('contact')}}" class="default-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape2"><img src="assets/img/shape/shape2.png" alt="image"></div>
        <div class="shape3"><img src="assets/img/shape/shape3.png" alt="image"></div>
        <div class="shape5"><img src="assets/img/shape/shape5.png" alt="image"></div>
        <div class="shape6"><img src="assets/img/shape/shape6.png" alt="image"></div>
        <div class="shape7"><img src="assets/img/shape/shape7.png" alt="image"></div>
        <div class="shape13"><img src="assets/img/shape/shape13.png" alt="image"></div>
    </section>
    <!-- End Project Start Area -->    
    <!-- End Project Start Area -->

    @endsection
    

   