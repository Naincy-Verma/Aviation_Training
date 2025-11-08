<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work With Us - Aviation Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-gold: rgb(220, 187, 135);
            --gold-hover: rgb(200, 167, 115);
            --dark-bg: #1a1a1a;
        }

        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            background: white;
        } */

        /* Banner Section */
        .banner-section {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), 
                        url('https://images.unsplash.com/photo-1540962351504-03099e0a754b?w=1920') center/cover;
            padding: 150px 0 100px;
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
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><path d="M0 0l50 50-50 50V0z" fill="rgba(220,187,135,0.05)"/></svg>');
            animation: bgMove 20s linear infinite;
        }

        @keyframes bgMove {
            0% { transform: translateX(0); }
            100% { transform: translateX(100px); }
        }

        .banner-content {
            position: relative;
            z-index: 2;
        }

        .banner-content h1 {
            color: white;
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 3px;
            animation: fadeInDown 1s ease-out;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .breadcrumb {
            background: transparent;
            justify-content: center;
            margin: 0;
            padding: 0;
            animation: fadeInUp 1.2s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .breadcrumb-item a {
            color: var(--primary-gold);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .breadcrumb-item a::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }

        .breadcrumb-item a:hover::after {
            width: 100%;
        }

        .breadcrumb-item a:hover {
            color: white;
        }

        .breadcrumb-item.active {
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            color: var(--primary-gold);
            content: "›";
            font-size: 1.3rem;
        }

        /* Hero Stats Section */
        .hero-stats {
            background: var(--primary-gold);
            padding: 50px 0;
            margin-top: -50px;
            position: relative;
            z-index: 3;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
            animation: countUp 1.5s ease-out;
        }

        @keyframes countUp {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: white;
            display: block;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--dark-bg);
            font-weight: 600;
            text-transform: uppercase;
        }

        /* Why Join Aviation Section */
        .why-aviation-section {
            padding: 100px 0;
            background: white;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 70px;
            animation: fadeInUp 1s ease-out;
        }

        .section-title h2 {
            font-size: 3rem;
            color: var(--dark-bg);
            font-weight: 800;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title .gold-line {
            width: 100px;
            height: 4px;
            background: var(--primary-gold);
            margin: 0 auto;
            position: relative;
        }

        .section-title .gold-line::before,
        .section-title .gold-line::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 4px;
            background: var(--primary-gold);
            top: 0;
        }

        .section-title .gold-line::before {
            left: -40px;
        }

        .section-title .gold-line::after {
            right: -40px;
        }

        .aviation-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid transparent;
            height: 100%;
            margin-bottom: 30px;
            opacity: 0;
            animation: cardSlideIn 0.8s ease-out forwards;
        }

        @keyframes cardSlideIn {
            to {
                opacity: 1;
            }
        }

        .aviation-card:nth-child(1) { animation-delay: 0.2s; }
        .aviation-card:nth-child(2) { animation-delay: 0.4s; }
        .aviation-card:nth-child(3) { animation-delay: 0.6s; }
        .aviation-card:nth-child(4) { animation-delay: 0.8s; }

        .aviation-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 60px rgba(220, 187, 135, 0.3);
            border-color: var(--primary-gold);
        }

        .card-icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--primary-gold), var(--gold-hover));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            transition: all 0.5s ease;
            position: relative;
        }

        .card-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: var(--primary-gold);
            opacity: 0.3;
            animation: iconPulse 2s infinite;
        }

        @keyframes iconPulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.3;
            }
            50% {
                transform: scale(1.3);
                opacity: 0;
            }
        }

        .aviation-card:hover .card-icon {
            transform: rotateY(360deg);
            background: linear-gradient(135deg, var(--dark-bg), #333);
        }

        .card-icon i {
            font-size: 2.5rem;
            color: white;
            position: relative;
            z-index: 1;
        }

        .aviation-card h4 {
            font-size: 1.6rem;
            color: var(--dark-bg);
            margin-bottom: 20px;
            font-weight: 700;
            text-align: center;
        }

        .aviation-card p {
            color: #666;
            line-height: 1.9;
            text-align: center;
            font-size: 1.05rem;
        }

        /* Open Positions with Aircraft Background */
        .positions-section {
            padding: 100px 0;
            background: linear-gradient(rgba(26, 26, 26, 0.95), rgba(26, 26, 26, 0.95)),
                        url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1920') center/cover fixed;
            position: relative;
        }

        .position-item {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 30px;
            border-left: 6px solid var(--primary-gold);
            transition: all 0.4s ease;
            opacity: 0;
            transform: translateX(-50px);
            animation: slideInFromLeft 0.8s ease-out forwards;
        }

        @keyframes slideInFromLeft {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .position-item:nth-child(1) { animation-delay: 0.2s; }
        .position-item:nth-child(2) { animation-delay: 0.4s; }
        .position-item:nth-child(3) { animation-delay: 0.6s; }
        .position-item:nth-child(4) { animation-delay: 0.8s; }
        .position-item:nth-child(5) { animation-delay: 1s; }

        .position-item:hover {
            transform: translateX(15px);
            box-shadow: 0 15px 50px rgba(220, 187, 135, 0.4);
            border-left-width: 10px;
        }

        .position-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .position-title h3 {
            font-size: 1.8rem;
            color: var(--dark-bg);
            margin-bottom: 15px;
            font-weight: 700;
        }

        .position-title h3 i {
            color: var(--primary-gold);
            margin-right: 10px;
        }

        .position-meta {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #555;
            font-size: 1rem;
            font-weight: 500;
        }

        .meta-item i {
            color: var(--primary-gold);
            font-size: 1.1rem;
        }

        .position-description {
            color: #666;
            line-height: 1.8;
            margin-bottom: 20px;
            font-size: 1.05rem;
        }

        .requirements {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .requirements h5 {
            color: var(--dark-bg);
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .requirements ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .requirements li {
            padding: 8px 0;
            color: #555;
            position: relative;
            padding-left: 25px;
        }

        .requirements li::before {
            content: '✈';
            position: absolute;
            left: 0;
            color: var(--primary-gold);
            font-weight: bold;
        }

        .apply-btn {
            background: var(--primary-gold);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.4s ease;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 20px rgba(220, 187, 135, 0.4);
        }

        .apply-btn:hover {
            background: var(--dark-bg);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            color: white;
        }

        .apply-btn i {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .apply-btn:hover i {
            transform: translateX(5px);
        }

        /* Training Programs */
        .training-section {
            padding: 100px 0;
            background: white;
        }

        .training-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            height: 400px;
            margin-bottom: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: all 0.5s ease;
        }

        .training-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }

        .training-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .training-card:hover img {
            transform: scale(1.1);
        }

        .training-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
            padding: 40px 30px;
            transition: all 0.4s ease;
        }

        .training-card:hover .training-overlay {
            background: linear-gradient(to top, rgba(220,187,135,0.95), rgba(220,187,135,0.7));
        }

        .training-overlay h4 {
            color: white;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .training-overlay p {
            color: rgba(255,255,255,0.9);
            font-size: 1.05rem;
            margin: 0;
        }

        /* Application Process */
        .process-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
        }

        .process-timeline {
            position: relative;
            padding: 50px 0;
        }

        .process-step {
            display: flex;
            align-items: center;
            margin-bottom: 60px;
            opacity: 0;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .process-step:nth-child(1) { animation-delay: 0.2s; }
        .process-step:nth-child(2) { animation-delay: 0.4s; }
        .process-step:nth-child(3) { animation-delay: 0.6s; }
        .process-step:nth-child(4) { animation-delay: 0.8s; }

        .process-number {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--primary-gold), var(--gold-hover));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 800;
            color: white;
            flex-shrink: 0;
            position: relative;
            box-shadow: 0 10px 30px rgba(220, 187, 135, 0.4);
            transition: all 0.4s ease;
        }

        .process-step:hover .process-number {
            transform: scale(1.15) rotate(360deg);
            background: linear-gradient(135deg, var(--dark-bg), #333);
        }

        .process-number::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border: 3px solid var(--primary-gold);
            border-radius: 50%;
            animation: ripple 2s infinite;
        }

        @keyframes ripple {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        .process-content {
            margin-left: 40px;
            flex: 1;
        }

        .process-content h4 {
            font-size: 1.8rem;
            color: var(--dark-bg);
            margin-bottom: 15px;
            font-weight: 700;
        }

        .process-content p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        /* Testimonials */
        .testimonial-section {
            padding: 100px 0;
            background: var(--dark-bg);
        }

        .testimonial-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            margin-bottom: 30px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 20px;
            font-size: 120px;
            color: var(--primary-gold);
            opacity: 0.1;
            font-family: Georgia, serif;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(220, 187, 135, 0.3);
        }

        .testimonial-content {
            margin-bottom: 25px;
            font-style: italic;
            color: #555;
            line-height: 1.9;
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .author-image {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 3px solid var(--primary-gold);
            object-fit: cover;
        }

        .author-info h5 {
            color: var(--dark-bg);
            font-weight: 700;
            margin-bottom: 5px;
            font-size: 1.2rem;
        }

        .author-info p {
            color: var(--primary-gold);
            margin: 0;
            font-weight: 600;
        }

        /* CTA Section */
        .cta-section {
            padding: 120px 0;
            background: linear-gradient(135deg, var(--primary-gold) 0%, var(--gold-hover) 100%);
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-30px); }
        }

        .cta-content {
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .cta-content h2 {
            color: white;
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: fadeInUp 1s ease-out;
        }

        .cta-content p {
            color: white;
            font-size: 1.4rem;
            margin-bottom: 40px;
            animation: fadeInUp 1.2s ease-out;
        }

        .cta-btn {
            background: white;
            color: var(--primary-gold);
            padding: 20px 50px;
            border-radius: 50px;
            font-weight: 800;
            font-size: 1.2rem;
            text-decoration: none;
            display: inline-block;
            transition: all 0.4s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            animation: fadeInUp 1.4s ease-out;
        }

        .cta-btn:hover {
            background: var(--dark-bg);
            color: white;
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 50px rgba(0,0,0,0.4);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .banner-content h1 {
                font-size: 2.5rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .position-header {
                flex-direction: column;
            }
            
            .process-step {
                flex-direction: column;
                text-align: center;
            }
            
            .process-content {
                margin-left: 0;
                margin-top: 20px;
            }
            
            .stat-number {
                font-size: 2rem;
            }

            .cta-content h2 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Banner Section -->
    <section class="banner-section inner-banner-section bg-overlay-black bg_img">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-12 text-center">
                    <div class="banner-content">
                        <h1 class="title">Join Our Crew</h1>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Work With Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Stats -->
    <section class="hero-stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Flight Instructor Position -->
                    <div class="position-item">
                        <div class="position-header">
                            <div class="position-title">
                                <h3><i class="fas fa-plane"></i> Certified Flight Instructor (CFI)</h3>
                                <div class="position-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Multiple Locations</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock"></i>
                                        <span>Full Time</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-briefcase"></i>
                                        <span>1500+ Flight Hours</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="apply-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <p class="position-description">Join our elite team of flight instructors and help shape the next generation of pilots. We're looking for passionate aviators with excellent communication skills and a commitment to safety.</p>
                        <div class="requirements">
                            <h5>Requirements:</h5>
                            <ul>
                                <li>Valid CFI/CFII certification</li>
                                <li>Minimum 1500 flight hours</li>
                                <li>Excellent communication and teaching skills</li>
                                <li>Current FAA medical certificate</li>
                                <li>Clean flying record</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Chief Pilot Position -->
                    <div class="position-item">
                        <div class="position-header">
                            <div class="position-title">
                                <h3><i class="fas fa-user-tie"></i> Chief Pilot / Director of Operations</h3>
                                <div class="position-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Headquarters</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock"></i>
                                        <span>Full Time</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-briefcase"></i>
                                        <span>5000+ Flight Hours</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="apply-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <p class="position-description">Lead our flight operations and ensure the highest standards of safety and training excellence. This senior leadership role requires extensive aviation experience and proven management capabilities.</p>
                        <div class="requirements">
                            <h5>Requirements:</h5>
                            <ul>
                                <li>ATP certificate required</li>
                                <li>Minimum 5000 flight hours (multi-engine)</li>
                                <li>Previous management experience in aviation training</li>
                                <li>Strong leadership and organizational skills</li>
                                <li>FAA Part 141 school experience preferred</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Ground School Instructor -->
                    <div class="position-item">
                        <div class="position-header">
                            <div class="position-title">
                                <h3><i class="fas fa-chalkboard-teacher"></i> Ground School Instructor</h3>
                                <div class="position-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Main Campus</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock"></i>
                                        <span>Full Time / Part Time</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-briefcase"></i>
                                        <span>2+ Years Experience</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="apply-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <p class="position-description">Deliver engaging ground school instruction covering aviation theory, regulations, meteorology, and navigation. Help students build the knowledge foundation for successful flight careers.</p>
                        <div class="requirements">
                            <h5>Requirements:</h5>
                            <ul>
                                <li>Commercial pilot certificate or higher</li>
                                <li>Ground Instructor certificate (AGI/IGI)</li>
                                <li>Strong presentation and teaching skills</li>
                                <li>Knowledge of FAA regulations and procedures</li>
                                <li>Experience with aviation training materials</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Simulator Instructor -->
                    <div class="position-item">
                        <div class="position-header">
                            <div class="position-title">
                                <h3><i class="fas fa-helicopter"></i> Flight Simulator Instructor</h3>
                                <div class="position-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Training Center</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock"></i>
                                        <span>Full Time</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-briefcase"></i>
                                        <span>2000+ Flight Hours</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="apply-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <p class="position-description">Operate state-of-the-art flight simulators and provide high-quality scenario-based training. Help pilots develop skills in a safe, controlled environment.</p>
                        <div class="requirements">
                            <h5>Requirements:</h5>
                            <ul>
                                <li>CFI with instrument rating</li>
                                <li>Experience with flight simulation technology</li>
                                <li>Type rating on aircraft being simulated (preferred)</li>
                                <li>Strong understanding of CRM and advanced procedures</li>
                                <li>Ability to create realistic training scenarios</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Aviation Safety Officer -->
                    <div class="position-item">
                        <div class="position-header">
                            <div class="position-title">
                                <h3><i class="fas fa-shield-alt"></i> Aviation Safety Officer</h3>
                                <div class="position-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Headquarters</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock"></i>
                                        <span>Full Time</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-briefcase"></i>
                                        <span>3+ Years Experience</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="apply-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <p class="position-description">Ensure compliance with all aviation regulations and maintain our exceptional safety record. Develop and implement safety programs and conduct regular audits.</p>
                        <div class="requirements">
                            <h5>Requirements:</h5>
                            <ul>
                                <li>Commercial pilot certificate minimum</li>
                                <li>Aviation safety management experience</li>
                                <li>Knowledge of FAA Part 141 and Part 61 regulations</li>
                                <li>Strong analytical and documentation skills</li>
                                <li>SMS (Safety Management System) certification preferred</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section class="process-section">
        <div class="container">
            <div class="section-title">
                <h2>Application Process</h2>
                <div class="gold-line"></div>
            </div>
            <div class="process-timeline">
                <div class="process-step">
                    <div class="process-number">1</div>
                    <div class="process-content">
                        <h4>Submit Your Application</h4>
                        <p>Complete our online application form with your resume, certificates, logbook summary, and a cover letter explaining why you want to join our team.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-number">2</div>
                    <div class="process-content">
                        <h4>Initial Screening</h4>
                        <p>Our recruitment team will review your qualifications and experience. Shortlisted candidates will be contacted within 5-7 business days.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-number">3</div>
                    <div class="process-content">
                        <h4>Interview & Assessment</h4>
                        <p>Participate in interviews with our chief pilot and training staff. Flight instructors will complete a practical demonstration and teaching evaluation.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-number">4</div>
                    <div class="process-content">
                        <h4>Welcome to the Team</h4>
                        <p>Successful candidates receive an offer and complete orientation. Begin your journey with comprehensive onboarding and mentorship.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonial-section">
        <div class="container">
            <div class="section-title">
                <h2 style="color: white;">What Our Team Says</h2>
                <div class="gold-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p class="testimonial-content">"Working here transformed my career. The support, equipment, and student quality are unmatched. I've grown more as an instructor in two years here than anywhere else."</p>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200" alt="Captain James" class="author-image">
                            <div class="author-info">
                                <h5>Captain James Wilson</h5>
                                <p>Senior Flight Instructor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p class="testimonial-content">"The professional environment and commitment to excellence make this the perfect place to build a career. Management truly values instructors and invests in our development."</p>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200" alt="Captain Sarah" class="author-image">
                            <div class="author-info">
                                <h5>Captain Sarah Mitchell</h5>
                                <p>Chief Ground Instructor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p class="testimonial-content">"From day one, I felt welcomed and supported. The team culture is incredible, and knowing we're training the next generation of pilots makes every day meaningful."</p>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200" alt="Captain Michael" class="author-image">
                            <div class="author-info">
                                <h5>Captain Michael Torres</h5>
                                <p>Simulator Instructor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Take Flight?</h2>
                <p>Join our team of aviation professionals and make a difference in the skies</p>
                <a href="#" class="cta-btn">View All Positions</a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Pilots Trained</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Expert Instructors</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">98%</span>
                        <span class="stat-label">Success Rate</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join Aviation -->
    <section class="why-aviation-section">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Aviation?</h2>
                <div class="gold-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="aviation-card">
                        <div class="card-icon">
                            <i class="fas fa-plane-departure"></i>
                        </div>
                        <h4>Soar Higher</h4>
                        <p>Join an industry where the sky is not the limit. Experience unparalleled career growth and opportunities.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="aviation-card">
                        <div class="card-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4>Global Impact</h4>
                        <p>Connect the world and make a difference. Your work helps people reach their destinations safely.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="aviation-card">
                        <div class="card-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>Excellence Training</h4>
                        <p>Learn from the best with cutting-edge simulators and world-class instructors at your service.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="aviation-card">
                        <div class="card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Elite Community</h4>
                        <p>Become part of a prestigious network of aviation professionals and lifelong connections.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Programs -->
    <section class="training-section">
        <div class="container">
            <div class="section-title">
                <h2>Training Programs</h2>
                <div class="gold-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="training-card">
                        <img src="https://images.unsplash.com/photo-1583792002630-7d5b02d33639?w=800" alt="Commercial Pilot">
                        <div class="training-overlay">
                            <h4>Commercial Pilot License</h4>
                            <p>Comprehensive training program for aspiring commercial pilots</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="training-card">
                        <img src="https://images.unsplash.com/photo-1583792002292-f925a1d0e8df?w=800" alt="Flight Instructor">
                        <div class="training-overlay">
                            <h4>Flight Instructor Course</h4>
                            <p>Become a certified instructor and shape the next generation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="training-card">
                        <img src="https://images.unsplash.com/photo-1464037866556-6812c9d1c72e?w=800" alt="Airline Transport">
                        <div class="training-overlay">
                            <h4>Airline Transport Pilot</h4>
                            <p>Reach the pinnacle of aviation certification and fly for airlines</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions -->
    <section class="positions-section">
        <div class="container">
            <div class="section-title">
                <h2 style="color: white;">Open Positions</h2>
                <div class="gold-line"></div>
            </div>
            <div class="row">
                <div class="col">
    </body>
    </html>
