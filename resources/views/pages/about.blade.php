@extends('layout.master')
@section('content')

    <div class="page-wrapper"></div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Banner
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <section class="banner-section inner-banner-section bg-overlay-black bg_img"
                data-background="{{asset('assets/images/aviation/home_page/bgimg/inner-bg.png')}}">
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-12 text-center">
                            <div class="banner-content">
                                <h1 class="title">About-Us</h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">About-Us</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          call section 
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="call-widget-wrapper">
                <button type="button" class="call-widget-btn">
                    <span class="num"><i class="icon-call-icon"></i> +91 98765 43210</span>
                    <span class="arrow"></span>
                </button>

                <div class="call-widget-form-area">
                    <form class="book-form">
                        <div class="row justify-content-center mb-20-none">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <div class="book-select">
                                    <label>Training Location</label>
                                    <div class="book-form-icon">
                                        <i class="icon-from-airplane"></i>
                                    </div>
                                    <select class="book-select form--control">
                                        <option selected>Hyderabad</option>
                                        <option>Bangalore</option>
                                        <option>Mumbai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <div class="book-select">
                                    <label>Course Type</label>
                                    <div class="book-form-icon">
                                        <i class="icon-to-airplane"></i>
                                    </div>
                                    <select class="book-select form--control">
                                        <option selected>Cabin Crew</option>
                                        <option>Ground Staff</option>
                                        <option>Airport Management</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <div class="book-select">
                                    <label>Preferred Start Date</label>
                                    <div class="book-form-icon">
                                        <i class="icon-schedule-icon"></i>
                                    </div>
                                    <select class="book-select form--control">
                                        <option selected>10/11/2025</option>
                                        <option>20/11/2025</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 form-group">
                                <label>Number of Students</label>
                                <div class="book-quantity">
                                    <div class="book-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input class="book-plus-minus-box qty" type="text" name="qty" value="1" readonly>
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 form-group">
                                <button type="submit" class="btn--base w-100 mt-10">
                                    <i class="icon-btn-icon"></i> Enroll Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start About
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <section class="about-section about--style page-wrapper-two ptb-80">
                <div class="container">
                    <div class="row justify-content-center mb-30-none">
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="about-thumb" data-aos="fade-right" data-aos-duration="1200">
                                <img src="{{asset('assets/images/aviation/about_page/about-two.png')}}" alt="about">
                                <div class="about-element-two" data-aos="fade-up" data-aos-duration="1200">
                                    <img src="{{asset('assets/images/element/element-15.png')}}" alt="element">
                                </div>
                                <div class="about-video-wrapper">
                                    <div class="video-main">
                                        <div class="promo-video">
                                            <div class="waves-block">
                                                <div class="waves wave-1"></div>
                                                <div class="waves wave-2"></div>
                                                <div class="waves wave-3"></div>
                                            </div>
                                        </div>
                                        <a class="video-icon" data-rel="lightcase:myCollection"
                                            href="https://www.youtube.com/embed/Hw4ctvV25H0">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="about-content" data-aos="fade-left" data-aos-duration="1200">
                                <span class="sub-title text--base">About us</span>
                                <h2 class="title">Building Future Aviation Professionals with Excellence</h2>
                                <p>Vihanga Aviation Training is a premier institute dedicated to shaping skilled and confident aviation professionals. 
                                    We offer world-class training programs in Cabin Crew, Ground Staff, and Airport Management — blending theory, 
                                    hands-on learning, and personality development to prepare our students for a successful career in the aviation industry.
                                </p>
                                <div class="about-book-area">
                                    <div class="about-book-element">
                                        <img src="{{asset('assets/images/element/element-7.png')}}" alt="element">
                                    </div>
                                    <div class="about-book-left">
                                        <h3 class="call-title">Call for Admissions</h3>
                                        <span class="call"><a href="tel:+91 814929 4263">+91 814 929 4263</a></span>
                                    </div>
                                    <div class="about-book-right">
                                        <a href="{{url('/')}}" class="btn--base"><i class="icon-btn-icon-v2"></i>
                                            Book Now</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
           WHY Choose Us
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="choose-section bg--gray ptb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header">
                            <span class="sub-title"><span>Why Us</span></span>
                            <h2 class="section-title">Why Choose Vihanga Aviation Training?</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="choose-item">
                            <div class="choose-thumb">
                                <img src="{{asset('assets/images/aviation/about_page/choose.png')}}" alt="choose">
                            </div>
                            <span class="num">01</span>
                            <h3 class="title">Expert Flight Instructors</h3>
                            <p>Our experienced and certified flight instructors provide personalized training with hands-on expertise to guide you through every step of your aviation journey.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="choose-item">
                            <div class="choose-thumb">
                                <img src="{{asset('assets/images/aviation/about_page/choose.png')}}" alt="choose">
                            </div>
                            <span class="num">02</span>
                            <h3 class="title">Modern Aircraft Fleet</h3>
                            <p>Train with our well-maintained, modern fleet of aircraft equipped with latest avionics and safety features for comprehensive pilot training experience.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="choose-item">
                            <div class="choose-thumb">
                                <img src="{{asset('assets/images/aviation/about_page/choose.png')}}" alt="choose">
                            </div>
                            <span class="num">03</span>
                            <h3 class="title">DGCA Approved Training</h3>
                            <p>We are a DGCA approved flying training organization offering structured courses that meet international aviation standards and regulatory requirements.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="choose-item">
                            <div class="choose-thumb">
                                <img src="{{asset('assets/images/aviation/about_page/choose.png')}}" alt="choose">
                            </div>
                            <span class="num">04</span>
                            <h3 class="title">Flexible Training Programs</h3>
                            <p>From Private Pilot License (PPL) to Commercial Pilot License (CPL), we offer customized training schedules designed to fit your career goals and timeline.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="choose-item">
                            <div class="choose-thumb">
                                <img src="{{asset('assets/images/aviation/about_page/choose.png')}}" alt="choose">
                            </div>
                            <span class="num">05</span>
                            <h3 class="title">High Safety Standards</h3>
                            <p>Safety is our top priority with rigorous maintenance protocols, comprehensive pre-flight checks, and strict adherence to aviation safety regulations.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="choose-item">
                            <div class="choose-thumb">
                                <img src="{{asset('assets/images/aviation/about_page/choose.png')}}" alt="choose">
                            </div>
                            <span class="num">06</span>
                            <h3 class="title">Career Placement Support</h3>
                            <p>We provide career guidance and placement assistance to help our graduates secure positions with leading airlines and aviation companies across India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          Client Testimonial
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
           <section class="client-section ptb-80 bg_img" data-background="assets/images/bg/bg-5.png">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 text-center">
                            <div class="section-header">
                                <span class="sub-title"><span>Testimonial</span></span>
                                <h2 class="section-title">What Our Students Say</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="client-slider-two">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-quote"><i class="icon-quote"></i></div>
                                            <div class="client-content">
                                                <p>Vihanga Aviation Training completely transformed my confidence and skills. The instructors are very supportive and ensure you’re fully prepared for real aviation interviews.</p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-post-meta">
                                                    <div class="user-thumb">
                                                        <img src="{{asset('assets/images/aviation/home_page/client/4.png')}}" alt="user">
                                                    </div>
                                                    <span class="name">Priya Sharma</span>
                                                </div>
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-quote"><i class="icon-quote"></i></div>
                                            <div class="client-content">
                                                <p>The training is very practical and industry-focused. I got placed as Ground Staff right after completing my course — thank you, Vihanga Aviation!</p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-post-meta">
                                                    <div class="user-thumb">
                                                        <img src="{{asset('assets/images/aviation/home_page/client/4.png')}}" alt="user">
                                                    </div>
                                                    <span class="name">Rahul Verma</span>
                                                </div>
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-quote"><i class="icon-quote"></i></div>
                                            <div class="client-content">
                                                <p>From grooming to communication, every session helped me grow. Vihanga Aviation Training truly shaped my aviation career dreams into reality.</p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-post-meta">
                                                    <div class="user-thumb">
                                                        <img src="{{asset('assets/images/aviation/home_page/client/4.png')}}" alt="user">
                                                    </div>
                                                    <span class="name">Sneha Patel</span>
                                                </div>
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            faq section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <section class="faq-section ptb-80">
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 col-lg-7 mb-30" data-aos="fade-right" data-aos-duration="1200">
                        <div class="faq-header-area">
                            <span class="sub-title">FAQ</span>
                            <h2 class="title">Why Choose Vihanga Aviation Training</h2>
                            <p>Have questions about our aviation programs? Here’s what makes Vihanga Aviation Training your best choice for an aviation career.</p>
                        </div>
                        <div class="faq-wrapper">
                            <div class="faq-item active open">
                                <h3 class="faq-title"><span class="title">1. What courses do you offer?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>We offer professional training in Cabin Crew, Ground Staff, and Airport Management, covering both technical knowledge and personality development.</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">2. Do you provide placement assistance?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Yes! We have a strong placement network with leading airlines and airports to help students start their careers confidently.</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">3. Is prior aviation experience required?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>No, our courses are designed for beginners. We train you from the basics to advanced professional standards.</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">4. What is the duration of your courses?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Course durations vary from 6 months to 1 year depending on the program and specialization you choose.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-5 mb-30">
                        <div class="faq-thumb" data-aos="fade-left" data-aos-duration="1200">
                            <img src="{{asset('assets/images/aviation/about_page/faq/faq.png')}}" alt="faq">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection