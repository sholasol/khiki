<x-front-layout>
        <!-- Hero Section -->
    <section class="bg-dark text-white py-5">
        <div class="container py-4">
            <div class="text-center">
                <span class="badge bg-success mb-3 fs-6">Get In Touch</span>
                <h1 class="display-4 fw-bold mb-3">Let's Discuss Your Property Goals</h1>
                <p class="lead">Ready to maximize your property investment returns? Get in touch for a free consultation and discover how we can help you achieve your goals.</p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section class="py-5 bg-light">
        <div class="container">
            <!-- Success Message (Hidden by default) -->
            <div id="successMessage" class="alert alert-success alert-dismissible fade" role="alert" style="display: none;">
                <i class="fas fa-check-circle me-2"></i>Thank you for your inquiry! We'll get back to you within 24 hours.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h3 class="card-title mb-1">Send Us a Message</h3>
                            <p class="text-muted mb-0">Fill out the form below and we'll get back to you within 24 hours.</p>
                        </div>
                        <div class="card-body">
                            <form id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name *</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                        <div class="invalid-feedback">Please provide your full name.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="invalid-feedback">Please provide a valid email address.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="service" class="form-label">Service Interest</label>
                                        <select class="form-select" id="service" name="service">
                                            <option value="">Select a service</option>
                                            <option value="Airbnb Management">Airbnb Management</option>
                                            <option value="Project Management">Project Management</option>
                                            <option value="Property Sales">Property Sales</option>
                                            <option value="Landlord Support">Landlord Support</option>
                                            <option value="Investor Services">Investor Services</option>
                                            <option value="General Inquiry">General Inquiry</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="property_type" class="form-label">Property Type</label>
                                        <select class="form-select" id="property_type" name="property_type">
                                            <option value="">Select property type</option>
                                            <option value="Apartment/Flat">Apartment/Flat</option>
                                            <option value="House">House</option>
                                            <option value="Studio">Studio</option>
                                            <option value="Commercial Property">Commercial Property</option>
                                            <option value="Multiple Properties">Multiple Properties</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message *</label>
                                        <textarea class="form-control" id="message" name="message" rows="6" required 
                                                  placeholder="Tell us about your property needs, goals, or any questions you have..."></textarea>
                                        <div class="invalid-feedback">Please provide a message.</div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success btn-lg w-100">
                                            <i class="fas fa-paper-plane me-2"></i>Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">Contact Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-start mb-3">
                                <div class="bg-success bg-opacity-10 rounded p-2 me-3">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Office Address</h6>
                                    <p class="text-muted mb-0 small">123 Business Street<br>London, UK SW1A 1AA</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <div class="bg-success bg-opacity-10 rounded p-2 me-3">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Phone Number</h6>
                                    <a href="tel:+44123456789" class="text-decoration-none">+44 123 456 789</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <div class="bg-success bg-opacity-10 rounded p-2 me-3">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Email Address</h6>
                                    <a href="mailto:info@khikilimited.com" class="text-decoration-none">info@khikilimited.com</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <div class="bg-success bg-opacity-10 rounded p-2 me-3">
                                    <i class="fab fa-whatsapp text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">WhatsApp</h6>
                                    <a href="https://wa.me/44123456789" class="text-decoration-none">+44 123 456 789</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0"><i class="fas fa-clock me-2"></i>Business Hours</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Monday - Friday</span>
                                <span class="fw-medium">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Saturday</span>
                                <span class="fw-medium">10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-muted">Sunday</span>
                                <span class="fw-medium">Closed</span>
                            </div>
                            <hr>
                            <p class="small text-muted mb-0">Emergency support available 24/7 for managed properties</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-3">Visit Our Office</h2>
                <p class="text-muted">Located in the heart of London, we're easily accessible by public transport</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.7812636631234!2d-0.1441685233804557!3d51.49888137181139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760520ad1aaaab%3A0x338c6f249dbb2e8!2sCitibase%20London%20Victoria%20Palace%20Street!5e0!3m2!1sen!2suk!4v1751633920740!5m2!1sen!2suk" 
            class="bg-light rounded p-5 text-center" style="width: 100%; height: 600px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</x-front-layout>