@extends('layout.master')

@section('css')
<style>
    .service-wrapper {
        position: relative;
        height: 500px;
        border-radius: 10px;
    }

    .service-wrapper .bg-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=1500&q=80') center/cover no-repeat;
        z-index: 1;
    }

    .service-wrapper .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 2;
    }

    /* ---- Boxes ---- */
    .service-box {
        background-color: transparent;
        /* border: 1px solid rgba(255, 255, 255, 0.15); */
        transition: all 0.4s ease;
        position: relative;
        z-index: 3;
    }

    .service-box:hover {
        background-color: rgb(209, 175, 119);
        color: #fff !important;
    }

    .service-box:hover h5,
    .service-box:hover p {
        color: #fff !important;
    }

    .service-box.active {
        background-color: rgb(209, 175, 119);
        color: #fff;
    }

    .service-box.active:hover {
        background-color: transparent;
        color: #fff;
        border-color: rgba(255, 255, 255, 0.3);
    }

    h5 {
        color: #fff;
    }
    /* about page */
     .about-section {
            padding: 60px 0;
            background-color: #fff;
        }
        
        .section-title {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2;
            margin-bottom: 30px;
            color: #2c2c2c;
        }
        
        .lead-text {
            font-size: 1rem;
            line-height: 1.8;
            color: #666;
            margin-bottom: 0;
        }
        
        .about-nav {
            font-size: 0.85rem;
            color: #c9a961;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        .img-container {
            overflow: hidden;
            width: 100%;
        }
        
        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        
        .left-main-image {
            height: 550px;
        }
        
        .top-right-image {
            height: 280px;
            margin-bottom: 20px;
        }
        
        .bottom-images {
            height: 250px;
        }
        
        /* .content-box {
            padding: 30px 0 0 0;
        } */
        
        .feature-list {
            list-style: none;
            padding: 0;
            margin: 15px 0 20px 0;
        }
        
        .feature-list li {
            padding: 5px 0;
            padding-left: 30px;
            position: relative;
            font-size: 0.95rem;
            color: #666;
        }
        
        .feature-list li:before {
            content: "›";
            position: absolute;
            left: 0;
            color: #c9a961;
            font-size: 1.8rem;
            font-weight: bold;
            line-height: 1;
        }
        
        .btn-discover {
            background-color: #c9a961;
            color: #fff;
            padding: 14px 35px;
            border: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }
        
        .btn-discover:hover {
            background-color: #b8984e;
            color: #fff;
        }
        
        .description-text {
            font-size: 0.95rem;
            line-height: 1.8;
            color: #666;
            margin-bottom: 10px;
        }
        
        @media (max-width: 991px) {
            .section-title {
                font-size: 2.5rem;
            }
            
            .left-main-image {
                height: 400px;
                margin-bottom: 20px;
            }
            
            .top-right-image {
                height: 300px;
            }
            
            .bottom-images {
                height: 220px;
                margin-bottom: 15px;
            }
        }
        
        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }
        }

        /* Courses section  */
        .courses-section {
            padding: 80px 0;
            background-color: #F1F4F8;
        }
        
        .section-label {
            font-size: 0.85rem;
            color: #c9a961;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
            font-weight: 500;
            text-align: center;
        }
        
        .section-title {
            font-size: 2.8rem;
            font-weight: 300;
            line-height: 1.3;
            margin-bottom: 20px;
            color: #2c2c2c;
            /* text-align: center; */
        }
        
        .section-description {
            font-size: 0.95rem;
            line-height: 1.8;
            color: #666;
            text-align: center;
            max-width: 850px;
            margin: 0 auto 50px;
        }
        
        .course-card {
            background: #fff;
            border: none;
            height: 100%;
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
        }
        
        .course-card-header {
            padding: 30px 30px 15px;
            background: #fff;
        }
        
        .course-type {
            font-size: 1.5rem;
            font-weight: 300;
            color: #2c2c2c;
            margin-bottom: 18px;
            padding-bottom: 15px;
            border-bottom: 3px solid #c9a961;
            width: fit-content;
        }
        
        .course-specs {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: nowrap;
        }
        
       .spec-item {
            display: inline-flex;
            align-items: center;
            font-size: 0.8rem;
            color: #666;
            white-space: nowrap;
        }
        
        .spec-item i {
            color: #c9a961;
            font-size: 0.9rem;
            margin-right: 6px;
        }
        
        .course-image {
            width: 100%;
            height: 240px;
            object-fit: cover;
            display: block;
            padding: 10px;
        }
        
        .course-card-body {
            padding: 25px 30px 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .course-description {
            font-size: 0.9rem;
            line-height: 1.7;
            color: #666;
            margin-bottom: auto;
            padding-bottom: 25px;
        }
        
        .btn-book {
            width: 100%;
            background-color: #c9a961;
            color: #fff;
            padding: 13px;
            border: none;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        
        .btn-book:hover {
            background-color: #b8984e;
            color: #fff;
        }
        
        @media (max-width: 991px) {
            .section-title {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .section-title {
                font-size: 1.8rem;
            }
            
            .course-specs {
                flex-wrap: wrap;
                gap: 10px;
            }
            
            .course-image {
                height: 200px;
            }
        }
        /* gallery */
        .gallery-section {
            padding: 80px 0;
            background: #f9fafa;
        }
  .section-label {
    color: rgb(220, 187, 135);
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 15px;
    text-align: center;
  }
  .section-title {
    color: rgb(33, 37, 41);
    font-size: 42px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 60px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
  }
  .gallery-item {
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
    cursor: pointer;
    border-radius: 8px;
  }
  .gallery-item img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
  }
  .gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(220, 187, 135, 0.9);
    opacity: 0;
    transition: opacity 0.4s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .gallery-item:hover .gallery-overlay {
    opacity: 1;
  }

  .gallery-item:hover img {
    transform: scale(1.1);
  }
  .plus-icon {
    width: 60px;
    height: 60px;
    background: rgb(33, 37, 41);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    position: relative;
  }
  .plus-icon::before,
  .plus-icon::after {
    content: '';
    position: absolute;
    background: rgb(255, 255, 255);
    transition: background 0.3s ease;
  }
  .plus-icon::before {
    width: 24px;
    height: 3px;
  }
  .plus-icon::after {
    width: 3px;
    height: 24px;
  }
  .plus-icon:hover {
    background: rgb(255, 255, 255);
  }
  .plus-icon:hover::before,
  .plus-icon:hover::after {
    background: rgb(33, 37, 41);
  }

  /* 🔍 Added for popup effect */
  .image-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.85);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }
  .image-popup img {
    max-width: 90%;
    max-height: 80%;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
  }
  .close-popup {
    position: absolute;
    top: 40px;
    right: 60px;
    font-size: 36px;
    color: #fff;
    cursor: pointer;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.3s ease;
  }
  .close-popup:hover {
    background: rgba(255, 255, 255, 0.3);
  }
</style>
@endsection
@section('content')

<div class="page-wrapper">
       <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="banner-section" >
            <div class="banner-element" data-aos="fade-left" data-aos-duration="1200">
                <img src="{{asset('assets/images/element/element-1.png')}}" alt="element">
            </div>
            <div class="banner-element-two">
                <img src="{{asset('assets/images/element/element-3.png')}}" alt="element">
            </div>
            <div class="banner-element-three">
                <img src="{{asset('assets/images/element/element-4.png')}}" alt="element">
            </div>
            <div class="banner-element-four">
                <img src="{{asset('assets/images/element/element-5.png')}}" alt="element">
            </div>
            <div class="banner-social-area">
                <ul class="banner-social">
                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#0" class="active"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#0"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xxl-5 col-xl-6 col-lg-12 mb-30">
                        <div class="banner-content" data-aos="fade-right" data-aos-duration="1800">
                            <span class="sub-title"><span>Fly</span>next</span>
                            <h1 class="title">Book a private jet instantly</h1>
                            <p>Curly Airline proudly raises the bar and exceeds the standard for luxury and corporate
                                private jet charter services. We pride ourselves on offering a professional service.</p>
                            <div class="banner-btn">
                                <a href="package-details.html" class="btn--base"><i
                                        class="fas fa-chevron-right mr-2"></i> Make Your Trip</a>
                                <a href="contact.html" class="btn--base active">Request Quote <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 col-lg-6 mb-30" style= "height:200px;">
                        <div class="banner-thumb">
                            <img src="{{asset('assets/images/element/element-2.png')}}" alt="element">
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Call-widget
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="call-widget-wrapper">
            <button type="button" class="call-widget-btn"><span class="num"><i class="icon-call-icon"></i> +1 814 929
                    4263</span> <span class="arrow"></span></button>
            <div class="call-widget-form-area">
                <form class="book-form">
                    <div class="row justify-content-center mb-20-none">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                            <div class="book-select">
                                <label>From</label>
                                <div class="book-form-icon">
                                    <i class="icon-from-airplane"></i>
                                </div>
                                <select class="book-select form--control">
                                    <option value="dhaka" selected>Dhaka</option>
                                    <option value="london">London</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                            <div class="book-select">
                                <label>To</label>
                                <div class="book-form-icon">
                                    <i class="icon-to-airplane"></i>
                                </div>
                                <select class="book-select form--control">
                                    <option value="london" selected>London</option>
                                    <option value="dhaka">Dhaka</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                            <div class="book-select">
                                <label>Date</label>
                                <div class="book-form-icon">
                                    <i class="icon-schedule-icon"></i>
                                </div>
                                <select class="book-select form--control">
                                    <option value="25/12/2021" selected>25/12/2021</option>
                                    <option value="30/12/2021">30/12/2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 form-group">
                            <label>Passenger</label>
                            <div class="book-quantity">
                                <div class="book-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="book-plus-minus-box qty" type="text" name="qty" value="1" readonly>
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 form-group">
                            <button type="submit" class="btn--base w-100 mt-10"><i class="icon-btn-icon"></i> Book
                                Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            About section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="about-nav">About Us</div>
                        <h1 class="section-title text-left
                        ">Elevating Private Travel with Every Flight</h1>
                        <p class="lead-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc convallis odio sed diam eleifend, sed tellus suscipit nec laoreet purus vestibulum.</p>
                        
                        <div class="img-container left-main-image mt-4">
                            <img src="{{asset('assets/images/newimages/home/about1.jpg')}}" alt="Woman working in private jet">
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class="col-lg-6">
                        <!-- Top Large Image -->
                        <div class="img-container top-right-image">
                            <img src="{{asset('assets/images/newimages/home/about2.jpg')}}" alt="Private jet exterior">
                        </div>
                        
                        <!-- Two Bottom Images Side by Side -->
                        <div class="row mb-3">
                            <div class="col-6 pr-2">
                                <div class="img-container bottom-images">
                                    <img src="{{asset('assets/images/newimages/home/about3.jpg')}}" alt="Private jet interior view 1">
                                </div>
                            </div>
                            <div class="col-6 pl-2">
                                <div class="img-container bottom-images">
                                    <img src="{{asset('assets/images/newimages/home/about4.jpg')}}" alt="Private jet interior view 2">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Content Below Images -->
                        <div class="content-box">
                            <p class="description-text">Aenean tincidunt tortor diam, vel feugiat leo rhoncus ut. Morbi sed cursus turpis, ac feugia sapien. Sed quis dolor quis mauris malesuada porta. Vivamus dignissim neque eget dolor lacinia, vel diam pulvinar erat molestie. Quisque tristique ornare velit vitae vehicula.</p>
                            
                            <ul class="feature-list">
                                <li>Integer eu accumsan elit, sit amet iaculis purus.</li>
                                <li>Donec placerat urna non erat viverra sapien.</li>
                                <li>Maecenas tincidunt accumsan elit ac vehicula.</li>
                            </ul>
                            
                            <a href="{{url('/about')}}" class="btn btn-discover">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
           Courses section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
       
         <section class="course-section ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-header-wrapper">
                            <div class="section-header section-header--style">
                                <span class="sub-title">Choose Course <span class="right-icon"><i
                                            class="icon-Benefits-of-Training"></i></span></span>
                                <h2 class="section-title">Find The Right Course For You</h2>
                            </div>
                            <div class="section-header-btn-area">
                                <a href="{{url('/courses')}}" class="btn--base">View All Course <i
                                        class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-10-none">
                    <div class="col-xl-12">
                        <div class="course-slider-wrapper">
                            <div class="course-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="{{asset('assets/images/newimages/home/courses.jpg')}}" alt="course">
                                                <div class="course-prize">
                                                    <span>$ 399.00</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="{{url('/courses-details')}}">Private Pilot
                                                            License (PPL)</a></h3>
                                                    <span class="time"><i class="las la-clock"></i> 45 Hours</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>As well as getting to fly to many different destinations as part
                                                        of their job, airplane pilots get big discounts on</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="{{url('/courses-details')}}" class="btn--base">Enroll Now <i
                                                            class="icon-Group-2361 ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="{{asset('assets/images/newimages/home/courses.jpg')}}" alt="course">
                                                <div class="course-prize">
                                                    <span>$ 499.00</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="{{url('/courses-details')}}">Commercial Pilot
                                                            License</a></h3>
                                                    <span class="time"><i class="las la-clock"></i> 35 Hours</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>The first small jet-powered civil aircraft was the
                                                        Morane-Saulnier MS.760 Paris, developed privately in the early
                                                        1950s</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="{{url('/courses-details')}}" class="btn--base">Enroll Now <i
                                                            class="icon-Group-2361 ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <img src="{{asset('assets/images/newimages/home/courses.jpg')}}" alt="course">
                                                <div class="course-prize">
                                                    <span>$ 599.00</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="{{url('/courses-details')}}">Multi-Engine IFR
                                                            Rating</a></h3>
                                                    <span class="time"><i class="las la-clock"></i> 20 Hours</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>Our technology consistently delivers the best pricing for
                                                        charters – and the unique ability to buy individual seats.</p>
                                                </div>
                                                <div class="course-content-footer">
                                                    <a href="{{url('/courses-details')}}" class="btn--base">Enroll Now <i
                                                            class="icon-Group-2361 ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
           Facility section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="courses-section">
            <div class="container">
                <!-- Section Header -->
                 <div class="section-header text-center">
                            <span class="sub-title "><span class="left-icon"><i class="icon-title-icon"></i></span> Our
                                 Facilities <span class="right-icon aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200"><i class="icon-Benefits-of-Training"></i></span></span>
                    <h2 class="section-title text-center">Luxury Aircraft Built for Your Comfort</h2>
                    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lobortis, tellus eget finibus ultricies, risus libero imperdiet elit, sit amet dignissim ipsum leo nec ligula tempor ante.</p>
                </div>
                
                <!-- Course Cards -->
                <div class="row">
                    <!-- Light Jets Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="course-card">
                            <div class="course-card-header">
                                <h3 class="course-type">Light Jets</h3>
                                <div class="course-specs">
                                    <div class="spec-item">
                                        <i class="fas fa-users"></i>
                                        <span>13 Passengers</span>
                                    </div>
                                    <div class="spec-item">
                                        <i class="fas fa-clock"></i>
                                        <span>7-8 Hours</span>
                                    </div>
                                    <div class="spec-item">
                                        <i class="fas fa-dollar-sign"></i>
                                        <span>$11,000/hr</span>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/newimages/home/courses.jpg')}}" alt="Light Jet" class="course-image">
                            <div class="course-card-body">
                                <p class="course-description">Sed lacinia accumsan erat, faucibus suscipit nisl viverra at. Nullam id condimentum velit. Aenean bibendum leo nulla.</p>
                                <a href="{{url('/facility')}}" class="btn btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Midsize Jets Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="course-card">
                            <div class="course-card-header">
                                <h3 class="course-type">Midsize Jets</h3>
                                <div class="course-specs">
                                    <div class="spec-item">
                                        <i class="fas fa-users"></i>
                                        <span>13 Passengers</span>
                                    </div>
                                    <div class="spec-item">
                                        <i class="fas fa-clock"></i>
                                        <span>7-8 Hours</span>
                                    </div>
                                    <div class="spec-item">
                                        <i class="fas fa-dollar-sign"></i>
                                        <span>$11,000/hr</span>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/newimages/home/courses.jpg')}}" alt="Midsize Jet" class="course-image">
                            <div class="course-card-body">
                                <p class="course-description">Sed lacinia accumsan erat, faucibus suscipit nisl viverra at. Nullam id condimentum velit. Aenean bibendum leo nulla.</p>
                                 <a href="{{url('/facility')}}" class="btn btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Heavy Jets Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="course-card">
                            <div class="course-card-header">
                                <h3 class="course-type">Heavy Jets</h3>
                                <div class="course-specs">
                                    <div class="spec-item">
                                        <i class="fas fa-users"></i>
                                        <span>13 Passengers</span>
                                    </div>
                                    <div class="spec-item">
                                        <i class="fas fa-clock"></i>
                                        <span>7-8 Hours</span>
                                    </div>
                                    <div class="spec-item">
                                        <i class="fas fa-dollar-sign"></i>
                                        <span>$11,000/hr</span>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/newimages/home/courses.jpg')}}" alt="Heavy Jet" class="course-image">
                            <div class="course-card-body">
                                <p class="course-description">Sed lacinia accumsan erat, faucibus suscipit nisl viverra at. Nullam id condimentum velit. Aenean bibendum leo nulla.</p>
                                 <a href="{{url('/facility')}}" class="btn btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
           CTA section 
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="about-section bg-overlay-base ptb-120 bg_img"
            data-background="{{asset('assets/images/aviation/home_page/jet/jet3.png')}}">
            <div class="about-element">
                <img src="{{asset('assets/images/element/element-8.png')}}" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-7 col-lg-7 mb-30">
                        <div class="about-content">
                            <span class="sub-title"><span>About</span> Flynext</span>
                            <h2 class="title">Private Jet Charters save your
                                time and give more comfort</h2>
                            <p>Flynext is the only way to fully travel on your terms. Whether it’s accessing a remote
                                destination or taking back control of productivity and flight scheduling</p>
                            <div class="about-book-area">
                                <div class="about-book-element">
                                    <img src="{{asset('assets/images/element/element-7.png')}}" alt="element">
                                </div>
                                <div class="about-book-left">
                                    <h3 class="call-title">Call for book an order</h3>
                                    <span class="call"><a href="tel:8-800-10-500">8-800-10-500</a></span>
                                </div>
                                <div class="about-book-right">
                                    <a href="service-details.html" class="btn--base"><i class="icon-btn-icon-v2"></i>
                                        Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 mb-30">
                        <div class="about-thumb-video">
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
            </div>
        </section>
       
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          Gallery Section Start 
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="gallery-section ">
           <div class="container">
             <div class="section-label">OUR GALLERY</div>
                <h2 class="section-title">Checkout our flights & travel photos</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                        <img src="{{asset('assets/images/aviation/gallery_aviation/1.jpg')}}" alt="Business travelers">
                        <div class="gallery-overlay">
                            <div class="plus-icon"></div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                        <img src="{{asset('assets/images/aviation/gallery_aviation/2.png')}}" alt="Luxury jet interior">
                        <div class="gallery-overlay">
                            <div class="plus-icon"></div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                        <img src="{{asset('assets/images/aviation/gallery_aviation/3.jpg')}}" alt="Traveler boarding">
                        <div class="gallery-overlay">
                            <div class="plus-icon"></div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                        <img src="{{asset('assets/images/aviation/gallery_aviation/4.jpg')}}" alt="Passengers relaxing">
                        <div class="gallery-overlay">
                            <div class="plus-icon"></div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                        <img src="{{asset('assets/images/aviation/gallery_aviation/5.jpg')}}" alt="Flight attendant">
                        <div class="gallery-overlay">
                            <div class="plus-icon"></div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600" alt="View from plane">
                        <div class="gallery-overlay">
                            <div class="plus-icon"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="section-header-btn-area text-center">
                        <a href="{{url('/gallery')}}" class="btn--base">View All Gallery <i class="icon-Group-2361 ml-2"></i></a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
         Faq Section Start 
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="faq-section ptb-120">
            <div class="container">
                <div class="section-header text-center">
                            <span class="sub-title "><span class="left-icon"><i class="icon-title-icon"></i></span> Our
                                 Faq <span class="right-icon aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200"><i class="icon-Benefits-of-Training"></i></span></span>
                    <h2 class="section-title text-center">World-Class Aviation Facilities</h2>
                     <p class="section-description">
                        Our aviation training center offers advanced facilities designed to provide hands-on learning and real-world experience. 
                        Equipped with modern classrooms, flight simulators, briefing rooms, and comfortable lounges, we ensure a perfect blend of 
                        technology and comfort for our trainees. Every area is crafted to meet global aviation standards and create a professional 
                        environment for learning and growth.
                    </p>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-12 col-lg-12 mb-30">
                        <div class="faq-header-area">
                            <h3 class="title">Managing Your Deals</h3>
                        </div>
                        <div class="faq-wrapper">
                            <div class="faq-item active open">
                                <h3 class="faq-title"><span class="title">1. What types of aircrafts are
                                        available?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Whether you’re flying in a small, medium, or large group, VIP Jets offers a wide
                                        variety of aircrafts suited for groups of all sizes. With the VIP Jets 25-Hour
                                        Card, you have the flexibility to choose the size and age class.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">2. How many people do they hold?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Whether you’re flying in a small, medium, or large group, VIP Jets offers a wide
                                        variety of aircrafts suited for groups of all sizes. With the VIP Jets 25-Hour
                                        Card, you have the flexibility to choose the size and age class.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">3. Can I use more than one of your aircrafts
                                        at a time?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Whether you’re flying in a small, medium, or large group, VIP Jets offers a wide
                                        variety of aircrafts suited for groups of all sizes. With the VIP Jets 25-Hour
                                        Card, you have the flexibility to choose the size and age class.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">4. Where can I fly on one of your private
                                        jets?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Whether you’re flying in a small, medium, or large group, VIP Jets offers a wide
                                        variety of aircrafts suited for groups of all sizes. With the VIP Jets 25-Hour
                                        Card, you have the flexibility to choose the size and age class.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          Contact Section Start 
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="contact-section ptb-120 bg--gray">
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.1899657893728!2d90.42380431666383!3d23.779746865573756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7499f257eab%3A0xe6b4b9eacea70f4a!2sManama+Tower!5e0!3m2!1sen!2sbd!4v1561542597668!5m2!1sen!2sbd" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="contact-form-inner aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                            <div class="contact-left-content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                            <span class="sub-title">Talk to us</span>
                            <h2 class="title">Any Question?
                                Fell Free to
                                Contact</h2>
                                <p class="mb-2">
                                    With a vast array of popular private planes to choose from, travelling by private jet
                                    charter is the most efficient
                                </p>
                        </div>
                        <div class="contact-form-area">
                                <form class="contact-form">
                                    <div class="row justify-content-center mb-20-none">
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="icon-name_icone"></i></label>
                                            <input type="text" class="form--control" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="las la-envelope"></i></label>
                                            <input type="email" class="form--control" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <label class="icon"><i class="icon-call_icone"></i></label>
                                            <input type="number" class="form--control" name="phone" placeholder="Phone" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 form-group">
                                            <div class="contact-select">
                                                <select class="form--control" style="display: none;">
                                                    <option value="1">Subject</option>
                                                    <option value="2">Subject one</option>
                                                    <option value="3">Subject two</option>
                                                </select><div class="nice-select form--control" tabindex="0"><span class="current">Subject</span><ul class="list"><li data-value="1" class="option selected">Subject</li><li data-value="2" class="option">Subject one</li><li data-value="3" class="option">Subject two</li></ul></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <label class="icon"><i class="icon-massage"></i></label>
                                            <textarea class="form--control" placeholder="Message" required=""></textarea>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <button type="submit" class="btn--base mt-10">Submit Now <i class="icon-Group-2361 ml-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
</div>
<div id="imagePopup" class="image-popup" style="display:none;">
  <span class="close-popup">&times;</span>
  <img src="" alt="Popup Image">
</div>
@endsection
@section('js')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const plusIcons = document.querySelectorAll('.plus-icon');
    const popup = document.getElementById('imagePopup');
    const popupImage = popup.querySelector('img');
    const closeBtn = popup.querySelector('.close-popup');

    plusIcons.forEach(icon => {
      icon.addEventListener('click', function (e) {
        e.stopPropagation();
        const img = this.closest('.gallery-item').querySelector('img');
        popupImage.src = img.src;
        popup.style.display = 'flex';
      });
    });

    closeBtn.addEventListener('click', function () {
      popup.style.display = 'none';
    });

    popup.addEventListener('click', function (e) {
      if (e.target === popup) popup.style.display = 'none';
    });
  });
</script>
@endsection