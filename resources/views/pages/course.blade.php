@extends('layout.master')
@section('content')

    <div class="page-wrapper">

       
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="banner-section inner-banner-section bg-overlay-black bg_img"
            data-background="{{asset('assets/images/aviation/home_page/bgimg/inner-bg.png')}}">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-12 text-center">
                        <div class="banner-content">
                            <h1 class="title">Our Courses</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

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
        End Call-widget
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Course
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="course-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header">
                            <span class="sub-title"><span>Choose Course</span></span>
                            <h2 class="section-title">Find The Right Course For You</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="course-item">
                            <div class="course-thumb">
                                <img src="{{asset('assets/images/aviation/course_page/course/course-1.png')}}" alt="course">
                                <div class="course-prize">
                                    <span>$ 399.00</span>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-content-header">
                                    <h3 class="title"><a href="course-details.html">Private Pilot License (PPL)</a></h3>
                                    <span class="time"><i class="las la-clock"></i> 45 Hours</span>
                                </div>
                                <div class="course-content-body">
                                    <p>As well as getting to fly to many different destinations as part of their job,
                                        airplane pilots get big discounts on</p>
                                </div>
                                <div class="course-content-footer">
                                    <a href="course-details.html" class="btn--base">Enroll Now <i
                                            class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="course-item">
                            <div class="course-thumb">
                                <img src="{{asset('assets/images/aviation/course_page/course/course-2.png')}}" alt="course">
                                <div class="course-prize">
                                    <span>$ 299.00</span>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-content-header">
                                    <h3 class="title"><a href="course-details.html">Commercial Pilot License</a></h3>
                                    <span class="time"><i class="las la-clock"></i> 35 Hours</span>
                                </div>
                                <div class="course-content-body">
                                    <p>The first small jet-powered civil aircraft was the Morane-Saulnier MS.760 Paris,
                                        developed privately in the early 1950s</p>
                                </div>
                                <div class="course-content-footer">
                                    <a href="course-details.html" class="btn--base">Enroll Now <i
                                            class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="course-item">
                            <div class="course-thumb">
                                <img src="{{asset('assets/images/aviation/course_page/course/course-3.png')}}" alt="course">
                                <div class="course-prize">
                                    <span>$ 499.00</span>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-content-header">
                                    <h3 class="title"><a href="course-details.html">Multi-Engine IFR Rating</a></h3>
                                    <span class="time"><i class="las la-clock"></i> 40 Hours</span>
                                </div>
                                <div class="course-content-body">
                                    <p>Our technology consistently delivers the best pricing for charters – and the
                                        unique ability to buy individual seats.</p>
                                </div>
                                <div class="course-content-footer">
                                    <a href="course-details.html" class="btn--base">Enroll Now <i
                                            class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="course-item">
                            <div class="course-thumb">
                                <img src="{{asset('assets/images/aviation/course_page/course/course-1.png')}}" alt="course">
                                <div class="course-prize">
                                    <span>$ 199.00</span>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-content-header">
                                    <h3 class="title"><a href="course-details.html">Private Pilot License (PPL)</a></h3>
                                    <span class="time"><i class="las la-clock"></i> 30 Hours</span>
                                </div>
                                <div class="course-content-body">
                                    <p>Search the world with ease and transparency.As the only tech-forward private
                                        aviation company</p>
                                </div>
                                <div class="course-content-footer">
                                    <a href="course-details.html" class="btn--base">Enroll Now <i
                                            class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="course-item">
                            <div class="course-thumb">
                                <img src="{{asset('assets/images/aviation/course_page/course/course-2.png')}}" alt="course">
                                <div class="course-prize">
                                    <span>$ 599.00</span>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-content-header">
                                    <h3 class="title"><a href="course-details.html">Commercial Pilot License</a></h3>
                                    <span class="time"><i class="las la-clock"></i> 25 Hours</span>
                                </div>
                                <div class="course-content-body">
                                    <p>Charter an entire jet, or offer the seats you don’t need through our app a need
                                        for full or even fractional jet ownership</p>
                                </div>
                                <div class="course-content-footer">
                                    <a href="course-details.html" class="btn--base">Enroll Now <i
                                            class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="course-item">
                            <div class="course-thumb">
                                <img src="{{asset('assets/images/aviation/course_page/course/course-3.png')}}" alt="course">
                                <div class="course-prize">
                                    <span>$ 699.00</span>
                                </div>
                            </div>
                            <div class="course-content">
                                <div class="course-content-header">
                                    <h3 class="title"><a href="course-details.html">Multi-Engine IFR Rating</a></h3>
                                    <span class="time"><i class="las la-clock"></i> 20 Hours</span>
                                </div>
                                <div class="course-content-body">
                                    <p>XO is not simply a private jet service. Whether you’re traveling for business or
                                        leisure, XO Membership also delivers</p>
                                </div>
                                <div class="course-content-footer">
                                    <a href="course-details.html" class="btn--base">Enroll Now <i
                                            class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Course
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </div>
@endsection