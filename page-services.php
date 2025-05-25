<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - SafeNet | Comprehensive Support for Women & Children</title>
    <meta name="description" content="SafeNet offers comprehensive support services including emergency shelter, crisis counseling, legal advocacy, and empowerment programs for women and children in need.">
    
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #fff;
        }

        /* Back Button Styles */
        .back-button {
            position: fixed;
            top: 6rem;
            left: 1.5rem;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 2px solid #dc2626;
            color: #dc2626;
            padding: 0.75rem 1.25rem;
            border-radius: 2rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            z-index: 999;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .back-button:hover {
            background: #dc2626;
            color: white;
            transform: translateX(-3px);
            box-shadow: 0 6px 20px rgba(220, 38, 38, 0.3);
        }

        .back-button:active {
            transform: translateX(-1px) scale(0.98);
        }

        .back-arrow {
            font-size: 1rem;
            transition: transform 0.3s ease;
        }

        .back-button:hover .back-arrow {
            transform: translateX(-2px);
        }

        /* Mobile back button adjustments */
        @media (max-width: 768px) {
            .back-button {
                top: 5rem;
                left: 1rem;
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }
        }

        /* Services Page Specific Styles */
        .services-page-wrapper {
            margin: 0;
            padding: 0;
        }

        .services-hero {
            background: linear-gradient(135deg, #dc2626 0%, #ec4899 50%, #7c3aed 100%);
            position: relative;
            overflow: hidden;
            min-height: 80vh;
            display: flex;
            align-items: center;
            color: white;
        }

        .services-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fillOpacity='0.1'%3E%3Ccircle cx='20' cy='20' r='1.5'/%3E%3C/g%3E%3C/svg%3E");
            animation: float 15s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }

        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1.5rem;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 9999px;
            padding: 0.75rem 1.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .hero-title {
            font-size: clamp(3rem, 8vw, 5rem);
            font-weight: 900;
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .title-main {
            display: block;
            background: linear-gradient(to right, #ffffff, #fef3c7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .title-accent {
            display: block;
            background: linear-gradient(to right, #fcd34d, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: clamp(1.125rem, 2vw, 1.5rem);
            opacity: 0.9;
            max-width: 48rem;
            margin: 0 auto 2.5rem;
            line-height: 1.6;
            font-weight: 300;
        }

        .emergency-banner {
            background: rgba(220, 38, 38, 0.9);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 1rem;
            padding: 1.5rem;
            margin: 2rem auto;
            max-width: 48rem;
            text-align: center;
        }

        .emergency-text {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .emergency-number {
            font-size: 2rem;
            font-weight: 900;
            color: #fcd34d;
            margin-bottom: 0.5rem;
        }

        .emergency-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: white;
            color: #dc2626;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .emergency-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Main Content Styles */
        .main-content {
            background: linear-gradient(to bottom, #f9fafb, white);
        }

        .section {
            padding: 5rem 1.5rem;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 900;
            margin-bottom: 1.5rem;
        }

        .gradient-text {
            background: linear-gradient(135deg, #dc2626, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            font-size: 1.25rem;
            color: #6b7280;
            max-width: 48rem;
            margin: 0 auto;
            line-height: 1.6;
        }

        .services-grid {
            display: grid;
            gap: 2rem;
            grid-template-columns: 1fr;
        }

        @media (min-width: 768px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .service-card {
            background: white;
            border-radius: 1.5rem;
            padding: 2rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border: 1px solid #f3f4f6;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--card-accent, linear-gradient(to right, #dc2626, #ec4899));
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            width: 4rem;
            height: 4rem;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 1rem;
        }

        .service-description {
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .service-features {
            margin-bottom: 1.5rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .feature-icon {
            width: 1rem;
            height: 1rem;
            color: #10b981;
            font-weight: bold;
        }

        .feature-text {
            font-size: 0.875rem;
            color: #6b7280;
        }

        .service-button {
            width: 100%;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .service-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Emergency Services */
        .emergency-services {
            background: linear-gradient(to right, #fef2f2, #fdf2f8);
        }

        /* Support Services */
        .support-services {
            background: linear-gradient(to right, #f0f9ff, #faf5ff);
        }

        /* Legal Services */
        .legal-services {
            background: linear-gradient(to right, #faf5ff, #f9fafb);
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, #1f2937 0%, #374151 100%);
            color: white;
        }

        .contact-grid {
            display: grid;
            gap: 2rem;
            grid-template-columns: 1fr;
        }

        @media (min-width: 768px) {
            .contact-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .contact-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1rem;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
        }

        .contact-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .contact-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }

        .contact-info {
            font-size: 1.125rem;
            font-weight: 600;
            color: #fcd34d;
            margin-bottom: 0.5rem;
        }

        .contact-description {
            font-size: 0.875rem;
            opacity: 0.8;
            margin-bottom: 1rem;
        }

        .contact-button {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .contact-button:hover {
            background: white;
            color: #1f2937;
        }

        /* Process Section */
        .process-section {
            background: linear-gradient(to right, #f9fafb, #faf5ff);
        }

        .process-steps {
            display: grid;
            gap: 2rem;
            grid-template-columns: 1fr;
        }

        @media (min-width: 768px) {
            .process-steps {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .process-steps {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .process-step {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border: 1px solid #f3f4f6;
            position: relative;
            transition: all 0.3s ease;
        }

        .process-step:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .step-number {
            position: absolute;
            top: -1rem;
            left: 50%;
            transform: translateX(-50%);
            width: 2rem;
            height: 2rem;
            background: linear-gradient(135deg, #dc2626, #ec4899);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.875rem;
        }

        .step-icon {
            font-size: 2.5rem;
            margin: 1rem 0;
        }

        .step-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.75rem;
        }

        .step-description {
            color: #6b7280;
            line-height: 1.6;
        }

        /* Navigation */
        .nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 1rem 0;
        }

        .nav-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-logo {
            font-size: 1.5rem;
            font-weight: 900;
            color: #dc2626;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: #374151;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #dc2626;
        }

        .nav-emergency {
            background: #dc2626;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .nav-emergency:hover {
            background: #b91c1c;
            transform: scale(1.05);
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .section {
                padding: 3rem 1rem;
            }
            
            .hero-content {
                padding: 0 1rem;
                margin-top: 4rem;
            }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .process-steps {
                grid-template-columns: 1fr;
            }
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            .services-hero::before {
                animation: none;
            }
            
            * {
                transition: none !important;
                animation: none !important;
            }
        }

        button:focus-visible,
        a:focus-visible {
            outline: 2px solid #dc2626;
            outline-offset: 2px;
        }

        /* Loading Animation */
        .loading {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }

        .loading.loaded {
            opacity: 1;
            transform: translateY(0);
        }

        /* Scroll to Top Button */
        .scroll-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: #dc2626;
            color: white;
            border: none;
            border-radius: 50%;
            width: 3rem;
            height: 3rem;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .scroll-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .scroll-to-top:hover {
            background: #b91c1c;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <!-- Back Button -->
    <a href="/" class="back-button" id="backButton">
        <span class="back-arrow">←</span>
        <span>Back to Home</span>
    </a>

  

    <div class="services-page-wrapper">
        <!-- Hero Section -->
        <section class="services-hero">
            <div class="hero-content loading">
                <!-- Hero Badge -->
                <div class="hero-badge">
                    <span>🛡️</span>
                    <span>Comprehensive Support Services</span>
                </div>

                <!-- Main Title -->
                <h1 class="hero-title">
                    <span class="title-main">We're Here to</span>
                    <span class="title-accent">Help You</span>
                </h1>

                <!-- Subtitle -->
                <p class="hero-subtitle">
                    SafeNet offers comprehensive support services for women and children in need. From emergency assistance to long-term empowerment programs, we're committed to helping you build a safer, brighter future.
                </p>

                <!-- Emergency Banner -->
                <div class="emergency-banner">
                    <div class="emergency-text">🚨 In Immediate Danger?</div>
                    <div class="emergency-number">1-800-SAFENET</div>
                    <div style="margin-bottom: 1rem;">Call our 24/7 crisis hotline now</div>
                    <a href="tel:1-800-SAFENET" class="emergency-button">
                        📞 Call Now
                    </a>
                </div>
            </div>
        </section>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Emergency Services Section -->
            <section class="section emergency-services">
                <div class="container">
                    <div class="section-header loading">
                        <h2 class="section-title">
                            <span class="gradient-text">Emergency Services</span>
                        </h2>
                        <p class="section-subtitle">
                            Immediate support when you need it most. Our emergency services are available 24/7 to ensure your safety and well-being.
                        </p>
                    </div>

                    <div class="services-grid">
                        <!-- Crisis Hotline -->
                        <div class="service-card loading" style="--card-accent: linear-gradient(to right, #dc2626, #ef4444);">
                            <div class="service-icon" style="background: linear-gradient(135deg, #dc2626, #ef4444);">
                                📞
                            </div>
                            <h3 class="service-title">24/7 Crisis Hotline</h3>
                            <p class="service-description">
                                Immediate phone support from trained crisis counselors who understand what you're going through.
                            </p>
                            <div class="service-features">
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Available 24 hours a day</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Confidential and anonymous</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Multilingual support</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Safety planning assistance</span>
                                </div>
                            </div>
                            <a href="tel:1-800-SAFENET" class="service-button" style="background: linear-gradient(135deg, #dc2626, #ef4444);">
                                📞 Call 1-800-SAFENET
                            </a>
                        </div>

                        <!-- Emergency Shelter -->
                        <div class="service-card loading" style="--card-accent: linear-gradient(to right, #7c3aed, #8b5cf6);">
                            <div class="service-icon" style="background: linear-gradient(135deg, #7c3aed, #8b5cf6);">
                                🏠
                            </div>
                            <h3 class="service-title">Emergency Shelter</h3>
                            <p class="service-description">
                                Safe, secure housing for women and children who need to leave dangerous situations immediately.
                            </p>
                            <div class="service-features">
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Secure, confidential locations</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">24/7 staffed facilities</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Meals and basic necessities</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Children's programs available</span>
                                </div>
                            </div>
                            <a href="#shelter" class="service-button" style="background: linear-gradient(135deg, #7c3aed, #8b5cf6);">
                                🏠 Find Shelter
                            </a>
                        </div>

                        <!-- Mobile Crisis Response -->
                        <div class="service-card loading" style="--card-accent: linear-gradient(to right, #ec4899, #f472b6);">
                            <div class="service-icon" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                                🚗
                            </div>
                            <h3 class="service-title">Mobile Crisis Response</h3>
                            <p class="service-description">
                                Our trained team can come to you when it's not safe to leave or when you need immediate on-site support.
                            </p>
                            <div class="service-features">
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Rapid response team</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Safety assessment</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Emergency transportation</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Connection to resources</span>
                                </div>
                            </div>
                            <a href="#mobile-crisis" class="service-button" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                                🚗 Request Response
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Support Services Section -->
            <section class="section support-services">
                <div class="container">
                    <div class="section-header loading">
                        <h2 class="section-title">
                            <span class="gradient-text">Support & Counseling</span>
                        </h2>
                        <p class="section-subtitle">
                            Healing and empowerment through professional counseling, support groups, and therapeutic programs.
                        </p>
                    </div>

                    <div class="services-grid">
                        <!-- Individual Counseling -->
                        <div class="service-card loading" style="--card-accent: linear-gradient(to right, #059669, #10b981);">
                            <div class="service-icon" style="background: linear-gradient(135deg, #059669, #10b981);">
                                💬
                            </div>
                            <h3 class="service-title">Individual Counseling</h3>
                            <p class="service-description">
                                One-on-one therapy sessions with licensed counselors who specialize in trauma and domestic violence.
                            </p>
                            <div class="service-features">
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Licensed therapists</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Trauma-informed care</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Flexible scheduling</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Sliding scale fees</span>
                                </div>
                            </div>
                            <a href="#counseling" class="service-button" style="background: linear-gradient(135deg, #059669, #10b981);">
                                💬 Schedule Session
                            </a>
                        </div>

                        <!-- Support Groups -->
                        <div class="service-card loading" style="--card-accent: linear-gradient(to right, #2563eb, #3b82f6);">
                            <div class="service-icon" style="background: linear-gradient(135deg, #2563eb, #3b82f6);">
                                👥
                            </div>
                            <h3 class="service-title">Support Groups</h3>
                            <p class="service-description">
                                Connect with other survivors in a safe, supportive environment facilitated by trained professionals.
                            </p>
                            <div class="service-features">
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Peer support networks</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Weekly meetings</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Childcare provided</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Multiple group options</span>
                                </div>
                            </div>
                            <a href="#support-groups" class="service-button" style="background: linear-gradient(135deg, #2563eb, #3b82f6);">
                                👥 Join Group
                            </a>
                        </div>

                        <!-- Children's Programs -->
                        <div class="service-card loading" style="--card-accent: linear-gradient(to right, #d97706, #f59e0b);">
                            <div class="service-icon" style="background: linear-gradient(135deg, #d97706, #f59e0b);">
                                🧸
                            </div>
                            <h3 class="service-title">Children's Programs</h3>
                            <p class="service-description">
                                Specialized support for children who have witnessed or experienced violence, including therapy and activities.
                            </p>
                            <div class="service-features">
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Age-appropriate therapy</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Educational support</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Recreational activities</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Family reunification</span>
                                </div>
                            </div>
                            <a href="#children-programs" class="service-button" style="background: linear-gradient(135deg, #d97706, #f59e0b);">
                                🧸 Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Legal Services Section -->
            <section class="section legal-services">
                <div class="container">
                    <div class="section-header loading">
                        <h2 class="section-title">
                            <span class="gradient-text">Legal Support</span>
                        </h2>
                        <p class="section-subtitle">
                            Navigate the legal system with confidence through our comprehensive legal advocacy and support services.
                        </p>
                    </div>

                    <div class="services-grid">
                        <!-- Legal Advocacy -->
                        <div class="service-card loading" style="--card-accent: linear-gradient(to right, #7c3aed, #8b5cf6);">
                            <div class="service-icon" style="background: linear-gradient(135deg, #7c3aed, #8b5cf6);">
                                ⚖️
                            </div>
                            <h3 class="service-title">Legal Advocacy</h3>
                            <p class="service-description">
                                Professional advocates to help you understand your rights and navigate court proceedings.
                            </p>
                            <div class="service-features">
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Court accompaniment</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Legal document assistance</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Rights education</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Referrals to attorneys</span>
                                </div>
                            </div>
                            <a href="#legal-advocacy" class="service-button" style="background: linear-gradient(135deg, #7c3aed, #8b5cf6);">
                                ⚖️ Get Legal Help
                            </a>
                        </div>

                        <!-- Protection Orders -->
                        <div class="service-card loading" style="--card-accent: linear-gradient(to right, #dc2626, #ef4444);">
                            <div class="service-icon" style="background: linear-gradient(135deg, #dc2626, #ef4444);">
                                🛡️
                            </div>
                            <h3 class="service-title">Protection Orders</h3>
                            <p class="service-description">
                                Assistance with obtaining restraining orders and other legal protections to keep you safe.
                            </p>
                            <div class="service-features">
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Filing assistance</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Court preparation</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Safety planning</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Follow-up support</span>
                                </div>
                            </div>
                            <a href="#protection-orders" class="service-button" style="background: linear-gradient(135deg, #dc2626, #ef4444);">
                                🛡️ File Order
                            </a>
                        </div>

                        <!-- Family Law Support -->
                        <div class="service-card loading" style="--card-accent: linear-gradient(to right, #ec4899, #f472b6);">
                            <div class="service-icon" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                                👨‍👩‍👧‍👦
                            </div>
                            <h3 class="service-title">Family Law Support</h3>
                            <p class="service-description">
                                Guidance with custody, divorce, and other family law matters that affect you and your children.
                            </p>
                            <div class="service-features">
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Custody assistance</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Divorce support</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Child support guidance</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">✓</span>
                                    <span class="feature-text">Mediation services</span>
                                </div>
                            </div>
                            <a href="#family-law" class="service-button" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                                👨‍👩‍👧‍👦 Get Support
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How We Help Process -->
            <section class="section process-section">
                <div class="container">
                    <div class="section-header loading">
                        <h2 class="section-title">
                            <span class="gradient-text">How We Help You</span>
                        </h2>
                        <p class="section-subtitle">
                            Our comprehensive approach ensures you get the support you need at every step of your journey.
                        </p>
                    </div>

                    <div class="process-steps">
                        <div class="process-step loading">
                            <div class="step-number">1</div>
                            <div class="step-icon">📞</div>
                            <h3 class="step-title">Reach Out</h3>
                            <p class="step-description">
                                Contact us through our hotline, text, or walk into one of our locations. We're here 24/7.
                            </p>
                        </div>

                        <div class="process-step loading">
                            <div class="step-number">2</div>
                            <div class="step-icon">🤝</div>
                            <h3 class="step-title">Safety Assessment</h3>
                            <p class="step-description">
                                We'll work with you to assess your immediate safety needs and create a personalized safety plan.
                            </p>
                        </div>

                        <div class="process-step loading">
                            <div class="step-number">3</div>
                            <div class="step-icon">🛡️</div>
                            <h3 class="step-title">Immediate Support</h3>
                            <p class="step-description">
                                Access emergency shelter, crisis counseling, and other immediate services to ensure your safety.
                            </p>
                        </div>

                        <div class="process-step loading">
                            <div class="step-number">4</div>
                            <div class="step-icon">🌱</div>
                            <h3 class="step-title">Long-term Empowerment</h3>
                            <p class="step-description">
                                Work with our team on counseling, legal support, education, and other services for lasting change.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="section contact-section">
                <div class="container">
                    <div class="section-header loading">
                        <h2 class="section-title" style="color: white;">
                            Get Help Now
                        </h2>
                        <p class="section-subtitle" style="color: rgba(255, 255, 255, 0.8);">
                            Multiple ways to reach us when you need support. We're available 24/7 and ready to help.
                        </p>
                    </div>

                    <div class="contact-grid">
                        <div class="contact-card loading">
                            <div class="contact-icon">📞</div>
                            <h3 class="contact-title">Crisis Hotline</h3>
                            <div class="contact-info">1-800-SAFENET</div>
                            <p class="contact-description">24/7 crisis support and safety planning</p>
                            <a href="tel:1-800-SAFENET" class="contact-button">Call Now</a>
                        </div>

                        <div class="contact-card loading">
                            <div class="contact-icon">💬</div>
                            <h3 class="contact-title">Text Support</h3>
                            <div class="contact-info">Text "HELP" to 741741</div>
                            <p class="contact-description">Confidential text-based crisis counseling</p>
                            <a href="sms:741741?body=HELP" class="contact-button">Text Now</a>
                        </div>

                        <div class="contact-card loading">
                            <div class="contact-icon">💻</div>
                            <h3 class="contact-title">Online Chat</h3>
                            <div class="contact-info">Live Chat Available</div>
                            <p class="contact-description">Secure online chat with trained counselors</p>
                            <a href="#chat" class="contact-button">Start Chat</a>
                        </div>

                        <div class="contact-card loading">
                            <div class="contact-icon">📍</div>
                            <h3 class="contact-title">Walk-In Centers</h3>
                            <div class="contact-info">Multiple Locations</div>
                            <p class="contact-description">Safe spaces where you can get help in person</p>
                            <a href="#locations" class="contact-button">Find Location</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" id="scrollToTop" aria-label="Scroll to top">↑</button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('SafeNet: Services page with back button loaded');

            // Back button functionality
            function setupBackButton() {
                const backButton = document.getElementById('backButton');
                
                // Handle back button click
                backButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Check if there's history to go back to
                    if (window.history.length > 1 && document.referrer) {
                        // Go back to previous page
                        window.history.back();
                    } else {
                        // Fallback to homepage
                        window.location.href = '/';
                    }
                });

                // Add keyboard shortcut for back (Alt + Left Arrow)
                document.addEventListener('keydown', function(e) {
                    if (e.altKey && e.key === 'ArrowLeft') {
                        e.preventDefault();
                        backButton.click();
                    }
                });

                // Show/hide back button based on scroll position
                let lastScrollTop = 0;
                window.addEventListener('scroll', function() {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    
                    if (scrollTop > lastScrollTop && scrollTop > 100) {
                        // Scrolling down - hide back button
                        backButton.style.transform = 'translateX(-100px)';
                        backButton.style.opacity = '0.7';
                    } else {
                        // Scrolling up - show back button
                        backButton.style.transform = 'translateX(0)';
                        backButton.style.opacity = '1';
                    }
                    
                    lastScrollTop = scrollTop;
                });
            }

            // Loading animations
            function animateOnLoad() {
                const loadingElements = document.querySelectorAll('.loading');
                loadingElements.forEach((element, index) => {
                    setTimeout(() => {
                        element.classList.add('loaded');
                    }, index * 100);
                });
            }

            // Intersection Observer for scroll animations
            function setupScrollAnimations() {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('loaded');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                });

                const animatedElements = document.querySelectorAll('.loading');
                animatedElements.forEach(element => {
                    observer.observe(element);
                });
            }

            // Smooth scroll for anchor links
            function setupSmoothScroll() {
                const anchors = document.querySelectorAll('a[href^="#"]');
                anchors.forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        const targetId = this.getAttribute('href');
                        const target = document.querySelector(targetId);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    });
                });
            }

            // Service card interactions
            function setupServiceCardInteractions() {
                const serviceCards = document.querySelectorAll('.service-card');
                serviceCards.forEach(card => {
                    card.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-12px) scale(1.02)';
                    });
                    
                    card.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(-8px) scale(1)';
                    });
                });
            }

            // Emergency button tracking
            function setupEmergencyTracking() {
                const emergencyButtons = document.querySelectorAll('.emergency-button, .contact-button, .nav-emergency');
                emergencyButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        console.log('SafeNet: Emergency contact initiated');
                        
                        // Show confirmation for emergency calls
                        if (this.href && this.href.includes('tel:')) {
                            const confirmed = confirm('You are about to call our emergency hotline. Continue?');
                            if (!confirmed) {
                                event.preventDefault();
                            }
                        }
                    });
                });
            }

            // Scroll to top functionality
            function setupScrollToTop() {
                const scrollToTopBtn = document.getElementById('scrollToTop');
                
                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > 300) {
                        scrollToTopBtn.classList.add('visible');
                    } else {
                        scrollToTopBtn.classList.remove('visible');
                    }
                });

                scrollToTopBtn.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }

            // Mobile menu functionality
            function setupMobileMenu() {
                const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
                const navLinks = document.querySelector('.nav-links');
                
                if (mobileMenuBtn && navLinks) {
                    mobileMenuBtn.addEventListener('click', function() {
                        navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
                        navLinks.style.position = 'absolute';
                        navLinks.style.top = '100%';
                        navLinks.style.left = '0';
                        navLinks.style.right = '0';
                        navLinks.style.background = 'white';
                        navLinks.style.flexDirection = 'column';
                        navLinks.style.padding = '1rem';
                        navLinks.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
                    });
                }
            }

            // Keyboard navigation
            function setupKeyboardNavigation() {
                document.addEventListener('keydown', function(e) {
                    // Emergency hotline shortcut (Ctrl + E)
                    if (e.ctrlKey && e.key === 'e') {
                        e.preventDefault();
                        window.location.href = 'tel:1-800-SAFENET';
                    }
                    
                    // Scroll to top (Home key)
                    if (e.key === 'Home') {
                        e.preventDefault();
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    }
                });
            }

            // Initialize all functionality
            try {
                setupBackButton();
                animateOnLoad();
                setupScrollAnimations();
                setupSmoothScroll();
                setupServiceCardInteractions();
                setupEmergencyTracking();
                setupScrollToTop();
                setupMobileMenu();
                setupKeyboardNavigation();
                
                console.log('SafeNet: All services page scripts with back button initialized successfully');
            } catch (error) {
                console.error('SafeNet: Error initializing scripts:', error);
            }
        });
    </script>
</body>
</html>