<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khiki Limited - Property Services & Airbnb Management</title>
    <meta name="description" content="Expert property services including Airbnb management, property sales, landlord support, and investor services. Maximize your property investment returns.">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS css/style.css-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <div class="bg-success rounded p-2 me-2">
                    <i class="fas fa-building text-white"></i>
                </div>
                <span class="fw-bold text-dark">Khiki Limited</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-medium active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="properties.html">Properties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="contact.html">Contact</a>
                    </li>
                </ul>

                <div class="d-flex gap-2">
                    <a href="contact.html" class="btn btn-outline-success">Get Quote</a>
                    <a href="admin.html" class="btn btn-success">Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section bg-dark text-white py-5">
        <div class="hero-overlay"></div>
        <div class="container py-5 position-relative">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <span class="badge bg-success mb-3 fs-6">Trusted Property Services Partner</span>
                    <h1 class="display-4 fw-bold mb-4">
                        Maximize Your Property <span class="text-success">Investment Returns</span>
                    </h1>
                    <p class="lead mb-4 text-light">
                        Expert Airbnb management, property sales, and investor services. Let us handle the complexities while you enjoy the profits.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <a href="contact.html" class="btn btn-success btn-lg px-4">
                            <i class="fas fa-home me-2"></i>List Your Property
                        </a>
                        <a href="contact.html" class="btn btn-outline-light btn-lg px-4">
                            Book Free Consultation
                        </a>
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
            </div>

            <div class="text-center mt-5">
                <a href="services.html" class="btn btn-success btn-lg">
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
                <a href="contact.html" class="btn btn-light btn-lg px-4">Get Free Property Audit</a>
                <a href="properties.html" class="btn btn-outline-light btn-lg px-4">View Properties</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a href="index.html" class="d-flex align-items-center text-white text-decoration-none mb-3">
                        <div class="bg-success rounded p-2 me-2">
                            <i class="fas fa-building"></i>
                        </div>
                        <span class="fw-bold">Khiki Limited</span>
                    </a>
                    <p class="text-light mb-3">Your trusted partner for property services, Airbnb management, and investment solutions. Maximizing returns while minimizing your workload.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2">
                    <h5 class="mb-3">Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="services.html" class="text-light text-decoration-none">Airbnb Management</a></li>
                        <li><a href="services.html" class="text-light text-decoration-none">Project Management</a></li>
                        <li><a href="services.html" class="text-light text-decoration-none">Property Sales</a></li>
                        <li><a href="services.html" class="text-light text-decoration-none">Landlord Support</a></li>
                        <li><a href="services.html" class="text-light text-decoration-none">Investor Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-2">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.html" class="text-light text-decoration-none">About Us</a></li>
                        <li><a href="properties.html" class="text-light text-decoration-none">Properties</a></li>
                        <li><a href="blog.html" class="text-light text-decoration-none">Blog</a></li>
                        <li><a href="contact.html" class="text-light text-decoration-none">Contact</a></li>
                        <li><a href="admin.html" class="text-light text-decoration-none">Admin Login</a></li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <h5 class="mb-3">Contact Info</h5>
                    <div class="d-flex align-items-start mb-2">
                        <i class="fas fa-map-marker-alt text-success me-2 mt-1"></i>
                        <div class="text-light">
                            <p class="mb-0">123 Business Street</p>
                            <p class="mb-0">London, UK SW1A 1AA</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:+44123456789" class="text-light text-decoration-none">+44 123 456 789</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope text-success me-2"></i>
                        <a href="mailto:info@khikilimited.com" class="text-light text-decoration-none">info@khikilimited.com</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top border-secondary">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="text-light mb-0">&copy; 2024 Khiki Limited. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="text-light text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-light text-decoration-none">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>
