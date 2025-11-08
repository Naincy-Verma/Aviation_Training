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
            padding: 80px 0;
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

        /* facility section  */
        .facilities-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #F1F4F8 100%);
            position: relative;
            overflow: hidden;
        }

        .facilities-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(201, 169, 97, 0.05) 0%, transparent 70%);
            border-radius: 50%;
        }

        .section-header {
            margin-bottom: 60px;
        }

        .sub-title {
            display: inline-block;
            font-size: 0.9rem;
            color: #c9a961;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 20px;
            letter-spacing: -0.5px;
        }

        .section-description {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #6c757d;
            max-width: 750px;
            margin: 0 auto;
        }

        .facility-row {
            margin-top: 40px;
        }

        /* Facility Card Styles */
        .facilities-section {
            padding: 80px 0;
            background: #F1F4F8;
            position: relative;
            overflow: hidden;
        }

        .pattern-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 50px, rgba(201, 169, 97, 0.02) 50px, rgba(201, 169, 97, 0.02) 100px);
            pointer-events: none;
        }

        /* Section Header */
        .section-header {
            margin-bottom: 80px;
            position: relative;
            z-index: 1;
        }

        .sub-title {
            display: inline-block;
            font-size: 0.85rem;
            color: #c9a961;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 20px;
            letter-spacing: -1px;
            line-height: 1.2;
        }

        .section-description {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #6c757d;
            max-width: 650px;
            margin: 0 auto;
        }

        /* Facility Row */
        .facility-row {
            margin-bottom: 80px;
            position: relative;
        }

        .facility-row:last-child {
            margin-bottom: 0;
        }

        /* Image Column */
        .facility-image-col {
            padding: 0 30px;
        }

        .facility-image-wrapper {
            position: relative;
            border-radius: 0;
            overflow: hidden;
            box-shadow: 20px 20px 0 rgba(201, 169, 97, 0.15);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .facility-image-wrapper:hover {
            box-shadow: 30px 30px 0 rgba(201, 169, 97, 0.25);
            transform: translate(-5px, -5px);
        }

        .facility-img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            display: block;
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .facility-image-wrapper:hover .facility-img {
            transform: scale(1.1);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.6), transparent);
            display: flex;
            align-items: flex-start;
            padding: 30px;
        }

        .featured-facility {
            box-shadow: 20px 20px 0 rgba(201, 169, 97, 0.3);
        }

        .featured-tag {
            position: absolute;
            bottom: 30px;
            right: 30px;
            background: #fff;
            color: #c9a961;
            padding: 12px 30px;
            font-size: 0.85rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        /* Content Column */
        .facility-content-col {
            padding: 0 30px;
        }

        .facility-content {
            padding: 20px 0;
        }

        .facility-label {
            display: inline-block;
            background: #c9a961;
            color: #fff;
            padding: 8px 20px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .premium-label {
            background: linear-gradient(135deg, #c9a961, #d4b76a);
        }

        .luxury-label {
            background: #1a1a1a;
            color: #c9a961;
        }

        .facility-title {
            font-size: 2rem;
            font-weight: 900;
            color: #1a1a1a;
            margin-bottom: 15px;
            letter-spacing: -1px;
            line-height: 1.1;
        }

        .title-underline {
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, #c9a961, transparent);
            margin-bottom: 25px;
        }

        .facility-text {
            font-size: 1.05rem;
            line-height: 1.9;
            color: #6c757d;
            margin-bottom: 35px;
        }

        /* Specs Row */
        .facility-specs-row {
            display: flex;
            gap: 30px;
            margin-bottom: 40px;
        }

        .spec-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .spec-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #c9a961, #d4b76a);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 0;
        }

        .spec-icon i {
            color: #fff;
            font-size: 1.5rem;
        }

        .spec-info h4 {
            font-size: 1.2rem;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 3px;
            line-height: 1;
        }

        .spec-info p {
            font-size: 0.8rem;
            color: #6c757d;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        /* Bottom Section */
        .facility-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 30px;
            border-top: 3px solid #e9ecef;
        }

        .price-section {
            flex: 1;
        }

        .price-label {
            display: block;
            font-size: 0.75rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .price-value {
            font-size: 2rem;
            font-weight: 900;
            color: #c9a961;
            line-height: 1;
            margin: 0;
        }

        .price-value span {
            font-size: 1.2rem;
            color: #6c757d;
            font-weight: 600;
        }

        /* Book Button */
        .btn-facility-book {
            background: #1a1a1a;
            color: #fff;
            padding: 12px 30px;
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            border: 3px solid #1a1a1a;
            transition: all 0.4s ease;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            white-space: nowrap;
        }

        .btn-facility-book:hover {
            background: transparent;
            color: #1a1a1a;
            transform: translateX(10px);
        }

        .btn-facility-book i {
            transition: transform 0.4s ease;
        }

        .btn-facility-book:hover i {
            transform: translateX(8px);
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .section-title {
                font-size: 2.8rem;
            }
            
            .facility-title {
                font-size: 2.5rem;
            }
            
            .facility-img {
                height: 350px;
            }
            
            .facility-row {
                margin-bottom: 60px;
            }
            
            .facility-content-col {
                margin-top: 40px;
            }
            
            .facility-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .btn-facility-book {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .facilities-section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .section-header {
                margin-bottom: 50px;
            }
            
            .facility-title {
                font-size: 2rem;
            }
            
            .facility-img {
                height: 280px;
            }
            
            .facility-specs-row {
                flex-direction: column;
                gap: 20px;
            }
            
            .overlay-badge {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .price-value {
                font-size: 2.5rem;
            }
            
            .facility-image-wrapper {
                box-shadow: 15px 15px 0 rgba(201, 169, 97, 0.15);
            }
        }

        @media (max-width: 576px) {
            .facility-image-col,
            .facility-content-col {
                padding: 0 15px;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .facility-title {
                font-size: 1.75rem;
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
            margin-bottom: 10px;
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
        /* why section */
       .why-section {
    position: relative;
    background: linear-gradient(135deg, #f5e6d3 0%, #e8d4b8 50%, #f5e6d3 100%);
    overflow: hidden;
}

/* Floating Clouds */
.cloud {
    position: absolute;
    width: 100px;
    height: 40px;
    background: rgba(255,255,255,0.4);
    border-radius: 100px;
    opacity: 0.6;
    animation: float-cloud 30s linear infinite;
}
.cloud::before, .cloud::after {
    content: '';
    position: absolute;
    background: rgba(255,255,255,0.4);
    border-radius: 50%;
}
.cloud::before { width: 50px; height: 50px; top: -25px; left: 10px; }
.cloud::after { width: 60px; height: 60px; top: -30px; right: 10px; }

.cloud-1 { top: 10%; left: -10%; animation-delay: 0s; }
.cloud-2 { top: 30%; left: -15%; animation-delay: 8s; }
.cloud-3 { top: 60%; left: -12%; animation-delay: 15s; }

@keyframes float-cloud { to { transform: translateX(120vw); } }

/* Header */
.badge-main {
    background: linear-gradient(135deg, #c41e3a 0%, #8b0000 100%);
    color: #fff;
    padding: 12px 35px;
    border-radius: 50px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    box-shadow: 0 8px 25px rgba(196, 30, 58, 0.4);
}
.main-title { font-size: 42px; font-weight: 900; color: #1a1a1a; }
.main-subtitle { font-size: 18px; color: #666; }

/* Feature Cards */
.feature-card {
    background: #fff;
    border-radius: 20px;
    padding: 35px 25px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.4s;
    border-top: 4px solid #c41e3a;
}
.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}
.feature-icon-box {
    width: 80px; height: 80px;
    margin: 0 auto 25px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: #fff;
    box-shadow: 0 10px 20px rgba(196, 30, 58, 0.3);
    transition: transform 0.4s ease;
}
.feature-card:hover .feature-icon-box {
    transform: rotateY(360deg);
}
.feature-icon-box i { font-size: 36px; color: #fff; }

/* Main Content */
.main-content-card {
    background: #fff;
    border-radius: 25px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    overflow: hidden;
}
.image-column {
    position: relative;
    overflow: hidden;
}
.aircraft-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s ease;
}
.main-content-card:hover .aircraft-image {
    transform: scale(1.1);
}
.image-overlay {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    padding: 20px;
}


/* Text */
.text-column { padding: 50px; }
.content-main-title { font-size: 32px; font-weight: 800; color: #1a1a1a; }
.content-main-title .highlight { color: #c41e3a; }
.content-paragraph { color: #555; }

/* Stats */
.stats-row { gap: 20px; }
.stat-box {
    flex: 1;
    background: #f8f9fa;
    border-left: 4px solid #c41e3a;
    border-radius: 10px;
    text-align: center;
    padding: 20px;
}
.border-warning { border-left-color: #d4af37; }
.border-brown { border-left-color: #8b4513; }
.text-brown { color: #8b4513; }

/* Features List */
.features-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.features-list li {
    padding: 8px 0;
    font-weight: 500;
    color: #333;
}

/* Responsive */
@media (max-width: 768px) {
    .text-column { padding: 30px; }
    .main-title { font-size: 28px; }
}
/* Carrer  section css */
.pilot-hero {
  background:linear-gradient(135deg, #c9a961, #d4b76a); 
  padding: 100px 0;
  position: relative;
  overflow: hidden;
}

/* Gradient Title */
.title-gradient {
  background: linear-gradient(90deg, #004aad, #007bff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Feature Badges */
.badge-feature {
  background: #ffffff;
  border: 2px solid #007bff;
  color: #007bff;
  border-radius: 50px;
  padding: 10px 22px;
  font-weight: 600;
  text-transform: uppercase;
  font-size: 0.85rem;
  transition: all 0.3s ease;
  box-shadow: 0 3px 10px rgba(0, 123, 255, 0.1);
}

.badge-feature:hover {
  background: #007bff;
  color: #fff;
  box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
  transform: translateY(-3px);
}

/* CTA Button */
.btn-explore {
  background: linear-gradient(90deg, #004aad, #00a6ff);
  color: #fff;
  border-radius: 50px;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  box-shadow: 0 5px 20px rgba(0, 123, 255, 0.3);
  transition: all 0.3s ease;
}

.btn-explore:hover {
  background: linear-gradient(90deg, #00a6ff, #004aad);
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(0, 123, 255, 0.5);
}

/* Responsive */
@media (max-width: 768px) {
  .pilot-hero {
    padding: 60px 20px;
  }
  .display-4 {
    font-size: 2rem;
  }
  .badge-feature {
    font-size: 0.8rem;
    padding: 8px 18px;
  }
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
                            <span class="sub-title"><span>Vihanga</span> Aviation</span>
                            <h1 class="title">Take Off Your Career in Aviation</h1>
                                <p>At Vihanga Aviation Training, we empower aspiring aviation professionals with world-class 
                                training programs designed to help you soar high in your career. From pilot training to 
                                ground handling and cabin crew programs — we prepare you for a successful future in the skies.</p>
                                <div class="banner-btn">
                                    <a href="{{url('/courses')}}" class="btn--base"><i class="fas fa-chevron-right mr-2"></i> Explore Courses</a>
                                    <a href="{{url('/contact-us')}}" class="btn--base active">Request Information <i class="icon-Group-2361 ml-2"></i></a>
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
            About section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="about-nav">About Us</div>
                        <h1 class="section-title text-left"> Empowering the Next Generation of Aviation Professionals</h1>
                         <p class="lead-text">
                            At <strong>Vihanga Aviation Training</strong>, we are committed to providing world-class aviation education and practical training that prepare students for successful careers in the aviation industry. Our mission is to nurture talent, build confidence, and help aspiring aviation enthusiasts reach new heights.
                        </p>
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
                            <p class="description-text">
                                Vihanga Aviation offers a wide range of certified training programs — from pilot training and ground handling to cabin crew and airport operations. With a blend of experienced instructors, advanced simulation tools, and global-standard curriculum, we ensure our students receive both technical expertise and professional excellence.
                            </p>
                    
                            <ul class="feature-list">
                                <li>Comprehensive aviation programs for all career levels.</li>
                                <li>Experienced instructors with real-world aviation background.</li>
                                <li>Hands-on training with modern simulation and aircraft equipment.</li>
                            </ul>
                            
                            <a href="{{url('/about')}}" class="btn btn-discover">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


           <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
           Why Section 
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="why-section py-5">
            <!-- Floating Clouds -->
            <div class="cloud cloud-1"></div>
            <div class="cloud cloud-2"></div>
            <div class="cloud cloud-3"></div>

            <!-- Airplane Trail -->
            <div class="airplane-trail"></div>

            <div class="container">
                <!-- Section Header -->
                <div class="section-header text-center mb-5">
                    <div class="badge-container d-inline-flex align-items-center justify-content-center mb-3">
                        <div class="decorative-wing left"></div>
                        <div class="badge-main">Why Vihanga?</div>
                        <div class="decorative-wing"></div>
                    </div>
                    <h2 class="main-title">The Preferred Choice for Flying Training</h2>
                    <p class="main-subtitle">Excellence in Aviation Education Since Inception</p>
                </div>

                <!-- Feature Cards Row -->
                <div class="row features-row mb-5">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon-box bg-danger">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3 class="feature-title">Strategic Location</h3>
                            <p class="feature-description">
                                Perfectly positioned with optimal flying conditions year-round for superior training
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon-box" style="background: linear-gradient(135deg, #d4af37, #c9a870);">
                                <i class="fas fa-plane"></i>
                            </div>
                            <h3 class="feature-title">Youngest Fleet</h3>
                            <p class="feature-description">27+ modern aircraft equipped with cutting-edge aviation technology</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon-box" style="background: linear-gradient(135deg, #8b4513, #5d2e0f);">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3 class="feature-title">Safety First</h3>
                            <p class="feature-description">
                                Highest safety standards with international-grade equipment and protocols
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon-box" style="background: linear-gradient(135deg, #8b0000, #c41e3a);">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h3 class="feature-title">IndiGo Partner</h3>
                            <p class="feature-description">
                                Official IndiGo Cadet Pilot Program training partner institution
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="main-content-card">
                    <div class="row no-gutters">
                        <div class="col-md-6 image-column">
                            <img src="{{asset('assets/images/newimages/home/about1.jpg')}}" 
                                alt="Modern Aircraft Fleet" class="aircraft-image img-fluid">
                        </div>

                        <div class="col-md-6 text-column p-3">
                            <span class="section-tag">Our Fleet Excellence</span>
                            <h3 class="content-main-title">
                                Fleet of <span class="highlight">27 Modern Aircraft</span> and Counting
                            </h3>
                            <p class="content-paragraph">
                                With the latest avionics and safety features, Vihanga has India's youngest fleet.
                                Training on Garmin G1000 Glass Cockpit ensures a smooth transition for cadets into
                                the commercial airliner cockpit. The aircraft models and manufacturers are globally
                                trusted for reliable Flying Training.
                            </p>

                            <div class="d-flex stats-row pt-3">
                                <div class="stat-box border-danger">
                                    <div class="stat-number text-danger">27+</div>
                                    <div class="stat-label">Aircraft</div>
                                </div>
                                <div class="stat-box border-warning">
                                    <div class="stat-number text-warning">100%</div>
                                    <div class="stat-label">Modern</div>
                                </div>
                                <div class="stat-box border-brown">
                                    <div class="stat-number text-brown">G1000</div>
                                    <div class="stat-label">Cockpit</div>
                                </div>
                            </div>

                            <ul class="features-list pt-5">
                                <li><i class="fas fa-check text-danger mr-2"></i> Latest Garmin G1000 Glass Cockpit Technology</li>
                                <li><i class="fas fa-check text-danger mr-2"></i> Advanced Safety Features & Equipment</li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
           Courses section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="course-section ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-header-wrapper">
                            <div class="section-header section-header--style">
                                <span class="sub-title">Choose Course <span class="right-icon"><i
                                            class="icon-Benefits-of-Training"></i></span></span>
                                <h2 class="section-title text-left">Find The Right Aviation Course For You</h2>
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
                                                    <span>₹ 75,000</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="{{url('/courses-details')}}">Private Pilot
                                                            License (PPL)</a></h3>
                                                    <span class="time"><i class="las la-clock"></i> 45 Hours</span>
                                                </div>
                                                <div class="course-content-body">
                                                     <p>Learn the fundamentals of flight and gain the skills to operate an aircraft privately. Our PPL course provides in-depth theoretical and hands-on flight training under expert guidance.</p>
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
                                                    <span>₹ 1,20,000</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="{{url('/courses-details')}}">Commercial Pilot
                                                            License</a></h3>
                                                    <span class="time"><i class="las la-clock"></i> 200 Hours</span>
                                                </div>
                                                <div class="course-content-body">
                                                    <p>Train to become a professional pilot with our CPL program. This course focuses on advanced flight training, navigation, and safety standards required for a commercial aviation career.</p>
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
                                                    <span>₹ 95,000</span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-content-header">
                                                    <h3 class="title"><a href="{{url('/courses-details')}}">Multi-Engine IFR
                                                            Rating</a></h3>
                                                    <span class="time"><i class="las la-clock"></i> 6 Months</span>
                                                </div>
                                                <div class="course-content-body">
                                                            <p>Prepare for an exciting career in the skies with our professional cabin crew course. Learn in-flight service, passenger safety, grooming, and communication skills to excel globally.</p>
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
           CTA section 
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="about-section bg-overlay-base ptb-80 bg_img"
            data-background="{{asset('assets/images/aviation/home_page/jet/jet3.png')}}">
            <div class="about-element">
                <img src="{{asset('assets/images/element/element-8.png')}}" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-7 col-lg-7 mb-30">
                        <div class="about-content">
                              <span class="sub-title"><span>About</span> Vihanga Aviation</span>
                                <h2 class="title">Take Your Aviation Career to New Heights</h2>
                                <p>At Vihanga Aviation Training, we are dedicated to shaping future aviation leaders. 
                                    Our expert instructors, advanced training programs, and real-world learning 
                                    environments ensure that every student gains the skills and confidence to excel in the aviation industry.</p>
                            <div class="about-book-area">
                                <div class="about-book-element">
                                    <img src="{{asset('assets/images/element/element-7.png')}}" alt="element">
                                </div>
                                <div class="about-book-left">
                                   <h3 class="call-title">Call for Admission Assistance</h3>
                                    <span class="call"><a href="tel:+91-98765-43210">+91-98765-43210</a></span>
                                </div>
                                <div class="about-book-right">
                                    <a href="{{url('/contact')}}" class="btn--base"><i class="icon-btn-icon-v2"></i>
                                        Apply Now</a>
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

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
           Facility section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="facilities-section">
            <div class="container">
                <!-- Section Header -->
                <div class="section-header text-center">
                    <span class="sub-title">
                        <span class="left-icon"><i class="icon-title-icon"></i></span> Our Facilities 
                        <span class="right-icon" data-aos="fade-right" data-aos-duration="1200">
                            <i class="icon-Benefits-of-Training"></i>
                        </span>
                    </span>
                    <h2 class="section-title">Luxury Aircraft Built for Your Comfort</h2>
                    <p class="section-description">Experience the pinnacle of private aviation with our meticulously maintained fleet</p>
                </div>
                
                <!-- Light Jets - Left Aligned -->
                <div class="facility-row row align-items-center">
                    <div class="col-lg-6 facility-image-col" data-aos="fade-right">
                        <div class="facility-image-wrapper">
                            <img src="{{asset('assets/images/newimages/home/courses.jpg')}}" alt="Light Jets" class="facility-img">
                            <div class="image-overlay">
                                <div class="overlay-badge">01</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 facility-content-col" data-aos="fade-left">
                        <div class="facility-content">
                            <span class="facility-label">Popular Choice</span>
                            <h3 class="facility-title">Light Jets</h3>
                            <div class="title-underline"></div>
                            <p class="facility-text">Perfect for short to medium range flights with exceptional speed and efficiency. Experience nimble performance combined with luxurious comfort for your regional travel needs.</p>
                            
                            <div class="facility-specs-row">
                                <div class="spec-item">
                                    <div class="spec-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="spec-info">
                                        <h4>13 Passengers</h4>
                                        <p>Comfortable Seating</p>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="spec-info">
                                        <h4>7-8 Hours</h4>
                                        <p>Flight Range</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="facility-bottom">
                                <div class="price-section">
                                    <span class="price-label">Starting From</span>
                                    <h3 class="price-value">$11,000<span>/hr</span></h3>
                                </div>
                                <a href="{{url('/facility')}}" class="btn-facility-book">
                                    Book Your Flight <i class="fas fa-arrow-right"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Midsize Jets - Right Aligned -->
                <div class="facility-row row align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 facility-image-col" data-aos="fade-left">
                        <div class="facility-image-wrapper featured-facility">
                            <img src="{{asset('assets/images/newimages/home/courses.jpg')}}" alt="Midsize Jets" class="facility-img">
                            <div class="image-overlay">
                                <div class="overlay-badge">02</div>
                            </div>
                            <div class="featured-tag">Most Popular</div>
                        </div>
                    </div>
                    <div class="col-lg-6 facility-content-col" data-aos="fade-right">
                        <div class="facility-content">
                            <span class="facility-label premium-label">Premium Selection</span>
                            <h3 class="facility-title">Midsize Jets</h3>
                            <div class="title-underline"></div>
                            <p class="facility-text">Ideal balance of comfort, range, and performance for transcontinental travel. Spacious cabins with premium amenities ensure a first-class experience throughout your journey.</p>
                            
                            <div class="facility-specs-row">
                                <div class="spec-item">
                                    <div class="spec-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="spec-info">
                                        <h4>13 Passengers</h4>
                                        <p>Comfortable Seating</p>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="spec-info">
                                        <h4>7-8 Hours</h4>
                                        <p>Flight Range</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="facility-bottom">
                                <div class="price-section">
                                    <span class="price-label">Starting From</span>
                                    <h3 class="price-value">$11,000<span>/hr</span></h3>
                                </div>
                                <a href="{{url('/facility')}}" class="btn-facility-book">
                                    Book Your Flight <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Heavy Jets - Left Aligned -->
                <div class="facility-row row align-items-center">
                    <div class="col-lg-6 facility-image-col" data-aos="fade-right">
                        <div class="facility-image-wrapper">
                            <img src="{{asset('assets/images/newimages/home/courses.jpg')}}" alt="Heavy Jets" class="facility-img">
                            <div class="image-overlay">
                                <div class="overlay-badge">03</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 facility-content-col" data-aos="fade-left">
                        <div class="facility-content">
                            <span class="facility-label luxury-label">Ultimate Experience</span>
                            <h3 class="facility-title">Heavy Jets</h3>
                            <div class="title-underline"></div>
                            <p class="facility-text">Maximum space and luxury for long-haul international flights with superior amenities. Unmatched comfort and state-of-the-art facilities for the most discerning travelers.</p>
                            
                            <div class="facility-specs-row">
                                <div class="spec-item">
                                    <div class="spec-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="spec-info">
                                        <h4>13 Passengers</h4>
                                        <p>Comfortable Seating</p>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="spec-info">
                                        <h4>7-8 Hours</h4>
                                        <p>Flight Range</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="facility-bottom">
                                <div class="price-section">
                                    <span class="price-label">Starting From</span>
                                    <h3 class="price-value">$11,000<span>/hr</span></h3>
                                </div>
                                <a href="{{url('/facility')}}" class="btn-facility-book">
                                    Book Your Flight <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Background Pattern -->
            <div class="pattern-bg"></div>
        </section>

         <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Career Section Start 
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
       <section class="pilot-hero py-5">
            <div class="container text-center">
                <!-- Header -->
                <h6 class="text-uppercase text-primary font-weight-bold mb-3">
                Dream • Fly • Achieve
                </h6>
                <h1 class="display-4 font-weight-bold mb-3 title-gradient">
                Becoming a Pilot
                </h1>
                <p class="lead text-muted mb-4">
                Turn your passion for flying into a successful global career.
                Train with the best and soar higher with confidence.
                </p>

                <!-- Features -->
                <div class="d-flex flex-wrap justify-content-center mb-4">
                <span class="badge-feature mx-2 mb-2">Global Exposure</span>
                <span class="badge-feature mx-2 mb-2">Leadership Role</span>
                <span class="badge-feature mx-2 mb-2">Financially Rewarding</span>
                <span class="badge-feature mx-2 mb-2">Career as a Pilot</span>
                <span class="badge-feature mx-2 mb-2">Growth Opportunities</span>
                </div>

                <!-- CTA -->
                <a href="#" class="btn btn-explore px-5 py-3 mt-3">
                Explore Pilot Programs
                </a>

                <div class="mt-4">
                <small class="text-secondary">
                    Trusted by 50,000+ aspiring pilots worldwide
                </small>
                </div>
            </div>
        </section>


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          Gallery Section Start 
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="gallery-section ">
           <div class="container">
             <div class="section-label">OUR GALLERY</div>
                <h2 class="section-title">Explore Our Aviation Training Moments</h2>
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
        <section class="faq-section ptb-80">
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 col-lg-7 mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                        <div class="faq-header-area">
                            <span class="sub-title">FAQ</span>
                            <h2 class="title">Why you should choose our training services</h2>
                             <p>Have questions about aviation training? Discover more about our professional pilot programs,
                                cabin crew training, and other aviation career pathways designed to help you reach new heights.</p>
                                <ul class="faq-service-list">
                                    <li><i class="las la-star"></i> Expert Trainers</li>
                                    <li><i class="las la-star"></i> Affordable Fees</li>
                                    <li><i class="las la-star"></i>  Placement</li>
                                </ul>
                        </div>
                        <div class="faq-wrapper">
                            <div class="faq-item active open">
                                <h3 class="faq-title"><span class="title">1. What aviation courses do you offer?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Vihanga Aviation Training offers a wide range of certified aviation courses including
                                    Ground Staff Training, Cabin Crew Training, Airport Management, and Air Ticketing
                                    courses. Each program is designed to meet international aviation standards.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">2. What are the eligibility criteria for admission?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                <p>Applicants must have completed 10+2 or equivalent education. A good command of English,
                                    a presentable personality, and strong communication skills are preferred for admission
                                    into most of our aviation programs.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">3. Do you provide placement support after training?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                   <p>Yes, we provide complete placement assistance to all our students. Vihanga Aviation
                                    Training has tie-ups with reputed airlines, airports, and hospitality sectors to help
                                    our students start their careers successfully.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">4. Are your courses approved and recognized?</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>All our aviation training programs are designed as per DGCA and international aviation
                                        industry standards. Our certifications are recognized by top airlines and aviation
                                        organizations globally.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 mb-30">
                        <div class="faq-thumb aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                            <img src="http://127.0.0.1:8000/assets/images/aviation/about_page/faq/faq.png" alt="faq">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          Contact Section Start 
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="contact-section ptb-80 bg--gray">
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
                            <span class="sub-title">Get in Touch</span>
                            <h2 class="title">AHave Questions? We’re Here to Help</h2>
                                <p class="mb-2">
                                    Ready to begin your aviation journey? Contact us today and let our team guide you to new heights.
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
                                                    <div class="nice-select form--control" tabindex="0">
                                                        <span class="current">Subject</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected">Flight Training</li>
                                                            <li data-value="2" class="option">Admission Inquirye</li>
                                                            <li data-value="3" class="option">Career Guidance</li>
                                                        </ul>
                                                    </div>
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