@extends('layout.master')
@section('css')
<style>
  /* ------------------------------
    ADMISSION PAGE REDESIGN
  --------------------------------*/

  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(40px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slideInLeft {
    from {
      opacity: 0;
      transform: translateX(-60px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes slideInRight {
    from {
      opacity: 0;
      transform: translateX(60px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
  }

  .banner-section {
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.8), rgba(211, 168, 79, 0.3)), 
                url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1600') center/cover no-repeat;
    padding: 180px 0 120px;
    position: relative;
    overflow: hidden;
  }

  .banner-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 50%, rgba(211, 168, 79, 0.2) 0%, transparent 60%);
    animation: pulse 4s ease-in-out infinite;
  }

  .banner-content {
    position: relative;
    z-index: 2;
    animation: fadeInUp 1s ease-out;
  }

  .banner-content .title {
    font-size: 72px;
    font-weight: 800;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 4px;
    margin-bottom: 20px;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.5);
  }

  .breadcrumb {
    background: transparent;
  }

  .breadcrumb-item a {
    color: #d3a84f;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .breadcrumb-item a:hover {
    color: #fff;
    transform: translateX(5px);
  }

  .breadcrumb-item.active {
    color: #fff;
  }

  .breadcrumb-item + .breadcrumb-item::before {
    color: #d3a84f;
  }

  .admission-section {
    padding: 100px 0;
    background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 50%, #0a0a0a 100%);
    position: relative;
    overflow: hidden;
  }

  .admission-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(211, 168, 79, 0.1) 0%, transparent 70%);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
  }

  .admission-section::after {
    content: '';
    position: absolute;
    bottom: -50%;
    left: -10%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(211, 168, 79, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    animation: float 8s ease-in-out infinite reverse;
  }

  .section-heading {
    text-align: center;
    margin-bottom: 80px;
    position: relative;
    z-index: 2;
    animation: fadeInUp 1s ease-out 0.2s both;
  }

  .section-heading .subtitle {
    color: #d3a84f;
    font-weight: 700;
    letter-spacing: 4px;
    text-transform: uppercase;
    font-size: 14px;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
  }

  .section-heading .subtitle::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 2px;
    background: #d3a84f;
  }

  .section-heading .title {
    font-size: 56px;
    font-weight: 800;
    color: #fff;
    margin-top: 20px;
    letter-spacing: 2px;
  }

  .section-heading p {
    color: rgba(255, 255, 255, 0.7);
    font-size: 18px;
    max-width: 700px;
    margin: 25px auto 0;
    line-height: 1.8;
  }

  .highlight-card {
    background: linear-gradient(145deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.02));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 45px 30px;
    text-align: center;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid rgba(211, 168, 79, 0.2);
    position: relative;
    overflow: hidden;
    animation: fadeInUp 1s ease-out both;
  }

  .highlight-card:nth-child(1) { animation-delay: 0.3s; }
  .highlight-card:nth-child(2) { animation-delay: 0.4s; }
  .highlight-card:nth-child(3) { animation-delay: 0.5s; }

  .highlight-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(211, 168, 79, 0.2), transparent);
    transition: left 0.6s ease;
  }

  .highlight-card:hover::before {
    left: 100%;
  }

  .highlight-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 20px 50px rgba(211, 168, 79, 0.3);
    border-color: #d3a84f;
  }

  .highlight-card .icon-wrapper {
    width: 90px;
    height: 90px;
    margin: 0 auto 25px;
    background: linear-gradient(135deg, #d3a84f, #c2993e);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 30px rgba(211, 168, 79, 0.4);
    transition: all 0.4s ease;
  }

  .highlight-card:hover .icon-wrapper {
    transform: rotate(360deg) scale(1.1);
  }

  .highlight-card i {
    font-size: 42px;
    color: #fff;
  }

  .highlight-card h5 {
    font-weight: 700;
    margin-bottom: 15px;
    color: #fff;
    font-size: 22px;
  }

  .highlight-card p {
    color: rgba(255, 255, 255, 0.7);
    font-size: 15px;
    line-height: 1.6;
  }

  .eligibility-box {
    background: linear-gradient(145deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.03));
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    padding: 45px 40px;
    border-radius: 25px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
    border: 1px solid rgba(211, 168, 79, 0.3);
    position: relative;
    overflow: hidden;
    animation: slideInLeft 1s ease-out 0.6s both;
  }

  .eligibility-box::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(211, 168, 79, 0.1) 0%, transparent 70%);
    animation: float 10s ease-in-out infinite;
  }

  .eligibility-box h4 {
    font-weight: 700;
    margin-bottom: 25px;
    color: #d3a84f;
    font-size: 26px;
    position: relative;
    padding-bottom: 15px;
  }

  .eligibility-box h4::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: #d3a84f;
    transition: width 0.4s ease;
  }

  .eligibility-box:hover h4::after {
    width: 100px;
  }

  .eligibility-box ul {
    list-style: none;
    padding-left: 0;
    position: relative;
  }

  .eligibility-box ul li {
    margin-bottom: 16px;
    font-size: 16px;
    color: rgba(255, 255, 255, 0.85);
    padding-left: 35px;
    position: relative;
    transition: all 0.3s ease;
  }

  .eligibility-box ul li:hover {
    color: #fff;
    transform: translateX(8px);
  }

  .eligibility-box ul li::before {
    content: "✈";
    color: #d3a84f;
    font-size: 20px;
    position: absolute;
    left: 0;
    top: -2px;
    transition: all 0.3s ease;
  }

  .eligibility-box ul li:hover::before {
    transform: translateX(5px) rotate(20deg);
  }

  .admission-form {
    background: linear-gradient(145deg, rgba(211, 168, 79, 0.15), rgba(211, 168, 79, 0.05));
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    border-radius: 25px;
    padding: 50px 45px;
    box-shadow: 0 10px 40px rgba(211, 168, 79, 0.2);
    border: 1px solid rgba(211, 168, 79, 0.4);
    position: relative;
    overflow: hidden;
    animation: slideInRight 1s ease-out 0.6s both;
  }

  .admission-form::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #d3a84f, #c2993e, #d3a84f);
    background-size: 200% 100%;
    animation: shimmer 3s ease-in-out infinite;
  }

  @keyframes shimmer {
    0%, 100% { background-position: 0% 0%; }
    50% { background-position: 100% 0%; }
  }

  .admission-form h3 {
    font-weight: 800;
    font-size: 32px;
    margin-bottom: 35px;
    text-align: center;
    color: #fff;
    position: relative;
    display: inline-block;
    width: 100%;
  }

  .admission-form h3::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: #d3a84f;
  }

  .form-control, .form-select {
    border-radius: 12px;
    border: 2px solid rgba(211, 168, 79, 0.3);
    background: rgba(255, 255, 255, 0.05);
    color: #fff;
    padding: 14px 18px;
    font-size: 15px;
    transition: all 0.3s ease;
    box-shadow: none;
  }

  .form-control::placeholder {
    color: rgba(255, 255, 255, 0.5);
  }

  .form-control:focus, .form-select:focus {
    border-color: #d3a84f;
    background: rgba(255, 255, 255, 0.08);
    box-shadow: 0 0 20px rgba(211, 168, 79, 0.3);
    transform: scale(1.02);
    color: #fff;
  }

  .form-select {
    color: rgba(255, 255, 255, 0.7);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23d3a84f' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  }

  .form-select option {
    background: #1a1a1a;
    color: #fff;
  }

  .btn-gold {
    background: linear-gradient(135deg, #d3a84f, #c2993e);
    color: #fff;
    font-weight: 700;
    padding: 16px 50px;
    border-radius: 12px;
    border: none;
    font-size: 16px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: all 0.4s ease;
    box-shadow: 0 8px 25px rgba(211, 168, 79, 0.4);
    position: relative;
    overflow: hidden;
  }

  .btn-gold::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.6s ease, height 0.6s ease;
  }

  .btn-gold:hover::before {
    width: 300px;
    height: 300px;
  }

  .btn-gold:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 15px 35px rgba(211, 168, 79, 0.6);
    background: linear-gradient(135deg, #e0b960, #d3a84f);
  }

  .btn-gold:active {
    transform: translateY(-1px) scale(1.02);
  }

  @media (max-width: 768px) {
    .banner-content .title {
      font-size: 42px;
    }
    
    .section-heading .title {
      font-size: 36px;
    }
    
    .admission-form, .eligibility-box {
      padding: 35px 25px;
    }
  }
</style>
@endsection

@section('content')
<!-- Banner Section -->
<section class="banner-section">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-xl-10 text-center">
        <div class="banner-content">
          <h1 class="title">Admission</h1>
          <div class="breadcrumb-area mt-4">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admission</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Admission Section -->
<section class="admission-section">
  <div class="container">

    <div class="section-heading">
      <span class="subtitle">Enroll Today</span>
      <h2 class="title">Begin Your Aviation Career</h2>
      <p class="mt-3">
        Apply now to join our aviation academy and take your first flight toward a successful future in the skies.
      </p>
    </div>

    <!-- Highlights -->
    <div class="row g-4 mb-5">
      <div class="col-md-4">
        <div class="highlight-card">
          <div class="icon-wrapper">
            <i class="bi bi-airplane-engines"></i>
          </div>
          <h5>Advanced Flight Simulators</h5>
          <p>Experience realistic flight sessions with world-class simulators and expert instructors.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="highlight-card">
          <div class="icon-wrapper">
            <i class="bi bi-award"></i>
          </div>
          <h5>Certified Programs</h5>
          <p>Our training meets global aviation standards and is recognized by leading aviation bodies.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="highlight-card">
          <div class="icon-wrapper">
            <i class="bi bi-people"></i>
          </div>
          <h5>100% Placement Support</h5>
          <p>We guide every student from training to top career placements in reputed airlines.</p>
        </div>
      </div>
    </div>

    <!-- Two Column Layout -->
    <div class="row g-5 align-items-start">
      <div class="col-lg-6">
        <div class="eligibility-box">
          <h4>Eligibility Criteria</h4>
          <ul>
            <li>Minimum 10+2 with Physics & Mathematics</li>
            <li>Age: 17 years or above</li>
            <li>Medical Fitness Certificate from DGCA approved doctor</li>
            <li>Good communication skills in English</li>
          </ul>

          <h4 class="mt-5">Documents Required</h4>
          <ul>
            <li>10th & 12th Marksheets</li>
            <li>Passport-size Photographs</li>
            <li>ID Proof (Aadhar / Passport)</li>
            <li>Medical Fitness Certificate</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="admission-form">
          <h3>Admission Form</h3>
          <form>
            <div class="row g-3">
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="Full Name" required>
              </div>
              <div class="col-md-6 mb-3">
                <input type="email" class="form-control" placeholder="Email Address" required>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="Phone Number" required>
              </div>
              <div class="col-md-6 mb-3">
                <select class="form-select" id="course" name="course" required>
                  <option selected disabled>-- Select Course --</option>
                  <option value="Pilot Training">Pilot Training</option>
                  <option value="Cabin Crew Training">Cabin Crew Training</option>
                  <option value="Ground Staff Program">Ground Staff Program</option>
                  <option value="Aircraft Maintenance">Aircraft Maintenance</option>
                </select>
              </div>
              <div class="col-12">
                <textarea class="form-control" rows="4" placeholder="Your Message (optional)"></textarea>
              </div>
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-gold">Submit Application</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection