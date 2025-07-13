<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khiki Property & Projects Management</title>
    <meta name="description" content="UK-based project management and planning consultancy providing expert scheduling, programme control, and property management services.">
    
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
            <a class="navbar-brand d-flex align-items-center" href="/">
                {{-- <div class="bg-success rounded p-2 me-2">
                    <i class="fas fa-building text-white"></i>
                </div> --}}
            <img src="{{asset('assets/logo.jpeg')}}" alt="Khiki Property Logo" class="me-2" style="height: 50px;"/>
                <span class="fw-bold text-dark">Khiki Property</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{request()->routeIs('front.index') ? 'active' : ''}}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{request()->routeIs('front.about') ? 'active' : ''}}" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{request()->routeIs('front.services') ? 'active' : ''}}" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{request()->routeIs('front.properties') ? 'active' : ''}}" href="/properties">Properties</a>
                    </li>
                </ul>

                <div class="d-flex gap-2">
                    <a href="/contact" class="btn btn-outline-success">Get Quote</a>
                    <a href="/login" class="btn btn-success">Sign In</a>
                </div>
            </div>
        </div>
    </nav>

  {{$slot}}

    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a href="/" class="d-flex align-items-center text-white text-decoration-none mb-3">
                        <div class="bg-white rounded p-2 me-2">
                            {{-- <i class="fas fa-building"></i> --}}
                            <img src="{{asset('assets/logo.jpeg')}}" alt="Khiki Property Logo" class="me-2" style="height: 50px;"/>
                        </div>
                        <span class="fw-bold">Khiki Property & Projects</span>
                    </a>
                    <p class="text-light mb-3">UK-based project management and planning consultancy providing expert scheduling, programme control, and property management services.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2">
                    <h5 class="mb-3">Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="/services" class="text-light text-decoration-none">Project Management</a></li>
                        <li><a href="/services" class="text-light text-decoration-none">Tender Planning</a></li>
                        <li><a href="/services" class="text-light text-decoration-none">Delay Analysis</a></li>
                        <li><a href="/services" class="text-light text-decoration-none">Property Management</a></li>
                        <li><a href="/services" class="text-light text-decoration-none">Airbnb Management</a></li>
                    </ul>
                </div>

                <div class="col-lg-2">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/about" class="text-light text-decoration-none">About Us</a></li>
                        <li><a href="/properties" class="text-light text-decoration-none">Properties</a></li>
                        <li><a href="blog.html" class="text-light text-decoration-none">Case Studies</a></li>
                        <li><a href="/contact" class="text-light text-decoration-none">Contact</a></li>
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
                        <a href="mailto:info@khiki.co.uk" class="text-light text-decoration-none">info@khiki.co.uk</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top border-secondary">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="text-light mb-0">&copy; 2024 Khiki Property & Projects Management. All rights reserved.</p>
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
