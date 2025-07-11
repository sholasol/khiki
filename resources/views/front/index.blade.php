<x-front-layout>

     <style>
        .hero-section {
            height: 100vh;
            overflow: hidden;
            position: relative;
        }
        
        .carousel-item {
            height: 100vh;
            position: relative;
        }
        
        .carousel-item img {
            height: 100vh;
            object-fit: cover;
            filter: brightness(0.8);
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.3) 100%);
            z-index: 1;
        }
        
        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 90%;
            max-width: 800px;
            text-align: center;
        }
        
        .hero-badge {
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.5s forwards;
        }
        
        .hero-title {
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.8s forwards;
        }
        
        .hero-subtitle {
            opacity: 0;
            animation: fadeInUp 1s ease-out 1.1s forwards;
        }
        
        .hero-buttons {
            opacity: 0;
            animation: fadeInUp 1s ease-out 1.4s forwards;
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
        
        .btn-success {
            background: linear-gradient(45deg, #28a745, #20c997);
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
        }
        
        .btn-outline-light {
            transition: all 0.3s ease;
        }
        
        .btn-outline-light:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
        }
        
        .text-success {
            background: linear-gradient(45deg, #28a745, #20c997);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .testimonial-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .carousel-control-prev,
        .carousel-control-next {
            z-index: 3;
        }
        
        .carousel-indicators {
            z-index: 3;
        }
        
        @media (max-width: 768px) {
            .hero-content {
                width: 95%;
                padding: 0 15px;
            }
            
            .hero-title {
                font-size: 2.5rem !important;
            }
            
            .hero-subtitle {
                font-size: 1.1rem !important;
            }
        }
    </style>


      <!-- Hero Section with Image Slider -->
      <section class="hero-section position-relative">
        <!-- Hero Slider -->
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                 
                <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1600" class="d-block w-100" alt="Luxury Property">
                </div>
                 <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/159306/construction-site-build-construction-work-159306.jpeg?auto=compress&cs=tinysrgb&w=1600" class="d-block w-100" alt="Construction Project">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1600" class="d-block w-100" alt="Modern Apartment">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1600" class="d-block w-100" alt="Elegant Interior">
                </div>
               <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/416405/pexels-photo-416405.jpeg?auto=compress&cs=tinysrgb&w=1600" class="d-block w-100" alt="Project Planning">
                </div>
               
            </div>
            
            <div class="hero-overlay"></div>
            <div class="container position-absolute top-50 start-50 translate-middle z-10 hero-content text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <span class="badge bg-success mb-3 fs-6">UK-Based Consultancy</span>
                        <h1 class="display-4 fw-bold mb-3 text-white">
                            Khiki Property & Projects Management
                        </h1>
                        <h2 class="h3 fw-light mb-4 text-white">Building Certainty Through Planning Excellence</h2>
                        <p class="lead mb-4 text-white">
                            Expert scheduling, programme control, and delivery strategy services across construction, infrastructure, and property sectors.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                            <a href="/services" class="btn btn-success btn-lg px-4">
                                <i class="fas fa-briefcase me-2"></i>Our Services
                            </a>
                            <a href="/contact" class="btn btn-outline-light btn-lg px-4">
                                Plan it right. Build it better.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-lg-3 text-center">
                    <h3 class="display-5 fw-bold text-dark mb-2" data-count="500">500+</h3>
                    <p class="text-muted">Properties Managed</p>
                </div>
                <div class="col-6 col-lg-3 text-center">
                    <h3 class="display-5 fw-bold text-dark mb-2" data-count="98">98%</h3>
                    <p class="text-muted">Client Satisfaction</p>
                </div>
                <div class="col-6 col-lg-3 text-center">
                    <h3 class="display-5 fw-bold text-dark mb-2">£2M+</h3>
                    <p class="text-muted">Revenue Generated</p>
                </div>
                <div class="col-6 col-lg-3 text-center">
                    <h3 class="display-5 fw-bold text-dark mb-2" data-count="5">5+</h3>
                    <p class="text-muted">Years Experience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Property Services</h2>
                <p class="lead text-muted">Comprehensive property solutions designed to maximize your investment returns and minimize your management headaches.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm service-card">
                        <div class="card-body">
                            <div class="bg-success bg-opacity-10 rounded p-3 d-inline-block mb-3">
                                <i class="fas fa-home text-success fs-4"></i>
                            </div>
                            <h5 class="card-title">Airbnb Management</h5>
                            <p class="card-text">Complete Airbnb hosting solutions from listing optimization to guest management</p>
                            <ul class="list-unstyled small text-muted">
                                <li><i class="fas fa-check text-success me-2"></i>24/7 Guest Support</li>
                                <li><i class="fas fa-check text-success me-2"></i>Professional Photography</li>
                                <li><i class="fas fa-check text-success me-2"></i>Dynamic Pricing</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm service-card">
                        <div class="card-body">
                            <div class="bg-primary bg-opacity-10 rounded p-3 d-inline-block mb-3">
                                <i class="fas fa-building text-primary fs-4"></i>
                            </div>
                            <h5 class="card-title">Project Management</h5>
                            <p class="card-text">End-to-end property development and renovation project management</p>
                            <ul class="list-unstyled small text-muted">
                                <li><i class="fas fa-check text-success me-2"></i>Timeline Management</li>
                                <li><i class="fas fa-check text-success me-2"></i>Quality Control</li>
                                <li><i class="fas fa-check text-success me-2"></i>Budget Optimization</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm service-card">
                        <div class="card-body">
                            <div class="bg-warning bg-opacity-10 rounded p-3 d-inline-block mb-3">
                                <i class="fas fa-chart-line text-warning fs-4"></i>
                            </div>
                            <h5 class="card-title">Property Sales</h5>
                            <p class="card-text">Expert property sales services with market analysis and negotiation</p>
                            <ul class="list-unstyled small text-muted">
                                <li><i class="fas fa-check text-success me-2"></i>Market Analysis</li>
                                <li><i class="fas fa-check text-success me-2"></i>Professional Marketing</li>
                                <li><i class="fas fa-check text-success me-2"></i>Negotiation Support</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm service-card">
                        <div class="card-body">
                            <div class="bg-info bg-opacity-10 rounded p-3 d-inline-block mb-3">
                                <i class="fas fa-shield-alt text-info fs-4"></i>
                            </div>
                            <h5 class="card-title">Landlord Support</h5>
                            <p class="card-text">Comprehensive landlord services including tenant management and maintenance</p>
                            <ul class="list-unstyled small text-muted">
                                <li><i class="fas fa-check text-success me-2"></i>Tenant Screening</li>
                                <li><i class="fas fa-check text-success me-2"></i>Rent Collection</li>
                                <li><i class="fas fa-check text-success me-2"></i>Maintenance Coordination</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- New Property Development Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm service-card">
                        <div class="card-body">
                            <div class="bg-danger bg-opacity-10 rounded p-3 d-inline-block mb-3">
                                <i class="fas fa-hammer text-danger fs-4"></i>
                            </div>
                            <h5 class="card-title">Property Development</h5>
                            <p class="card-text">We acquire, refurbish, and reposition residential and commercial assets across the UK</p>
                            <ul class="list-unstyled small text-muted">
                                <li><i class="fas fa-check text-success me-2"></i>Property Sourcing & Feasibility</li>
                                <li><i class="fas fa-check text-success me-2"></i>Residential Conversions</li>
                                <li><i class="fas fa-check text-success me-2"></i>Joint Ventures & Investor Partnerships</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- New Project Management Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm service-card">
                        <div class="card-body">
                            <div class="bg-secondary bg-opacity-10 rounded p-3 d-inline-block mb-3">
                                <i class="fas fa-tasks text-secondary fs-4"></i>
                            </div>
                            <h5 class="card-title">Project Management & Scheduling</h5>
                            <p class="card-text">We help construction firms and developers deliver projects on time and within budget</p>
                            <ul class="list-unstyled small text-muted">
                                <li><i class="fas fa-check text-success me-2"></i>Baseline Programme Development</li>
                                <li><i class="fas fa-check text-success me-2"></i>Critical Path & Float Analysis</li>
                                <li><i class="fas fa-check text-success me-2"></i>Delay Claims & EOT Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="/services" class="btn btn-success btn-lg">
                    View All Services <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">What Our Clients Say</h2>
                <p class="lead text-muted">Real results from real property investors and landlords</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 testimonial-card">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text fst-italic">"Khiki Limited transformed my property investment journey. Their Airbnb management service increased my rental income by 40%."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" 
                                     class="rounded-circle me-3" width="50" height="50" alt="Sarah Johnson">
                                <div>
                                    <h6 class="mb-0">Sarah Johnson</h6>
                                    <small class="text-muted">Property Investor</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 testimonial-card">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text fst-italic">"Professional, reliable, and results-driven. They handle everything so I can focus on growing my portfolio."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" 
                                     class="rounded-circle me-3" width="50" height="50" alt="Michael Chen">
                                <div>
                                    <h6 class="mb-0">Michael Chen</h6>
                                    <small class="text-muted">Landlord</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 testimonial-card">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text fst-italic">"Their investor services helped me make informed decisions. Excellent market insights and ongoing support."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" 
                                     class="rounded-circle me-3" width="50" height="50" alt="Emma Williams">
                                <div>
                                    <h6 class="mb-0">Emma Williams</h6>
                                    <small class="text-muted">First-time Investor</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-success text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-3">Ready to Maximize Your Property Returns?</h2>
            <p class="lead mb-4">Get a free property audit and discover how much more you could be earning from your investment properties.</p>
            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                <a href="/contact" class="btn btn-light btn-lg px-4">Get Free Property Audit</a>
                <a href="/properties" class="btn btn-outline-light btn-lg px-4">View Properties</a>
            </div>
        </div>
    </section>

</x-front-layout>
