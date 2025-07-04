<x-front-layout>
        <!-- Hero Section -->
    <section class="bg-dark text-white py-5">
        <div class="container py-4">
            <div class="text-center">
                <span class="badge bg-success mb-3 fs-6">Property Listings</span>
                <h1 class="display-4 fw-bold mb-3">Premium Properties Available</h1>
                <p class="lead">Discover our carefully curated selection of properties available for short-term and long-term rental. All properties are professionally managed by our expert team.</p>
            </div>
        </div>
    </section>

    <!-- Search & Filters -->
    <section class="py-4 bg-white border-bottom">
        <div class="container">
            <div class="bg-light rounded p-4">
                <form id="propertySearchForm">
                    <div class="row g-3">
                        <div class="col-lg-4">
                            <label for="search" class="form-label fw-medium">Search Properties</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                                <input type="text" class="form-control" id="search" name="search" 
                                       placeholder="Search by title or location...">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <label for="type" class="form-label fw-medium">Property Type</label>
                            <select class="form-select" id="type" name="type">
                                <option value="">All Types</option>
                                <option value="apartment">Apartment</option>
                                <option value="house">House</option>
                                <option value="studio">Studio</option>
                                <option value="penthouse">Penthouse</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="location" class="form-label fw-medium">Location</label>
                            <select class="form-select" id="location" name="location">
                                <option value="">All Locations</option>
                                <option value="canary-wharf">Canary Wharf</option>
                                <option value="covent-garden">Covent Garden</option>
                                <option value="greenwich">Greenwich</option>
                                <option value="shoreditch">Shoreditch</option>
                                <option value="kensington">Kensington</option>
                                <option value="london-bridge">London Bridge</option>
                            </select>
                        </div>
                        <div class="col-lg-3 d-flex align-items-end">
                            <button type="submit" class="btn btn-success me-2">
                                <i class="fas fa-search me-1"></i>Search
                            </button>
                            <button type="button" class="btn btn-outline-secondary" onclick="clearFilters()">
                                <i class="fas fa-times me-1"></i>Clear
                            </button>
                        </div>
                    </div>
                </form>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="text-muted mb-0">Showing <span id="propertyCount">6</span> properties</p>
                    <button class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-filter me-1"></i>More Filters
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Properties Grid -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4" id="propertiesGrid">
                <!-- Property 1 -->
                <div class="col-md-6 col-lg-4 property-item" data-type="apartment" data-location="canary-wharf">
                    <div class="card h-100 shadow-sm property-card">
                        <div class="position-relative">
                            <img src="https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop" 
                                 class="card-img-top" alt="Modern 2-Bed Apartment" style="height: 200px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 m-2">
                                <span class="badge bg-success">Managed by Khiki</span>
                            </div>
                            <div class="position-absolute top-0 end-0 m-2">
                                <button class="btn btn-light btn-sm rounded-circle me-1 heart-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="btn btn-light btn-sm rounded-circle">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-2">
                                <span class="badge bg-light text-dark">Apartment</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Modern 2-Bed Apartment in Canary Wharf</h5>
                            <p class="text-muted mb-2">
                                <i class="fas fa-map-marker-alt me-1"></i>Canary Wharf, London
                            </p>

                            <div class="d-flex gap-3 text-muted small mb-3">
                                <span><i class="fas fa-bed me-1"></i>2</span>
                                <span><i class="fas fa-bath me-1"></i>2</span>
                                <span><i class="fas fa-ruler-combined me-1"></i>850 sq ft</span>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="text-warning me-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="fw-medium">4.9</span>
                                <span class="text-muted small ms-1">(127 reviews)</span>
                            </div>

                            <div class="mb-3">
                                <span class="badge bg-light text-dark me-1 mb-1">WiFi</span>
                                <span class="badge bg-light text-dark me-1 mb-1">Kitchen</span>
                                <span class="badge bg-light text-dark me-1 mb-1">Parking</span>
                                <span class="badge bg-light text-dark">+2 more</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <div class="h5 mb-0">£450/night</div>
                                    <small class="text-muted">£3,200/month</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-success btn-sm view-btn">
                                        <i class="fas fa-eye me-1"></i>View
                                    </button>
                                    <a href="contact.html" class="btn btn-success btn-sm">Inquire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property 2 -->
                <div class="col-md-6 col-lg-4 property-item" data-type="studio" data-location="covent-garden">
                    <div class="card h-100 shadow-sm property-card">
                        <div class="position-relative">
                            <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop" 
                                 class="card-img-top" alt="Luxury Studio" style="height: 200px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 m-2">
                                <span class="badge bg-success">Managed by Khiki</span>
                            </div>
                            <div class="position-absolute top-0 end-0 m-2">
                                <button class="btn btn-light btn-sm rounded-circle me-1 heart-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="btn btn-light btn-sm rounded-circle">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-2">
                                <span class="badge bg-light text-dark">Studio</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Luxury Studio in Central London</h5>
                            <p class="text-muted mb-2">
                                <i class="fas fa-map-marker-alt me-1"></i>Covent Garden, London
                            </p>

                            <div class="d-flex gap-3 text-muted small mb-3">
                                <span><i class="fas fa-bed me-1"></i>1</span>
                                <span><i class="fas fa-bath me-1"></i>1</span>
                                <span><i class="fas fa-ruler-combined me-1"></i>450 sq ft</span>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="text-warning me-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="fw-medium">4.8</span>
                                <span class="text-muted small ms-1">(89 reviews)</span>
                            </div>

                            <div class="mb-3">
                                <span class="badge bg-light text-dark me-1 mb-1">WiFi</span>
                                <span class="badge bg-light text-dark me-1 mb-1">Kitchen</span>
                                <span class="badge bg-light text-dark">Concierge</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <div class="h5 mb-0">£280/night</div>
                                    <small class="text-muted">£2,100/month</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-success btn-sm view-btn">
                                        <i class="fas fa-eye me-1"></i>View
                                    </button>
                                    <a href="contact.html" class="btn btn-success btn-sm">Inquire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property 3 -->
                <div class="col-md-6 col-lg-4 property-item" data-type="house" data-location="greenwich">
                    <div class="card h-100 shadow-sm property-card">
                        <div class="position-relative">
                            <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop" 
                                 class="card-img-top" alt="Spacious House" style="height: 200px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 m-2">
                                <span class="badge bg-success">Managed by Khiki</span>
                            </div>
                            <div class="position-absolute top-0 end-0 m-2">
                                <button class="btn btn-light btn-sm rounded-circle me-1 heart-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="btn btn-light btn-sm rounded-circle">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-2">
                                <span class="badge bg-light text-dark">House</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Spacious 3-Bed House in Greenwich</h5>
                            <p class="text-muted mb-2">
                                <i class="fas fa-map-marker-alt me-1"></i>Greenwich, London
                            </p>

                            <div class="d-flex gap-3 text-muted small mb-3">
                                <span><i class="fas fa-bed me-1"></i>3</span>
                                <span><i class="fas fa-bath me-1"></i>2</span>
                                <span><i class="fas fa-ruler-combined me-1"></i>1,200 sq ft</span>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="text-warning me-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="fw-medium">4.9</span>
                                <span class="text-muted small ms-1">(203 reviews)</span>
                            </div>

                            <div class="mb-3">
                                <span class="badge bg-light text-dark me-1 mb-1">WiFi</span>
                                <span class="badge bg-light text-dark me-1 mb-1">Garden</span>
                                <span class="badge bg-light text-dark me-1 mb-1">Parking</span>
                                <span class="badge bg-light text-dark">+1 more</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <div class="h5 mb-0">£650/night</div>
                                    <small class="text-muted">£4,500/month</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-success btn-sm view-btn">
                                        <i class="fas fa-eye me-1"></i>View
                                    </button>
                                    <a href="contact.html" class="btn btn-success btn-sm">Inquire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property 4 -->
                <div class="col-md-6 col-lg-4 property-item" data-type="apartment" data-location="shoreditch">
                    <div class="card h-100 shadow-sm property-card">
                        <div class="position-relative">
                            <img src="https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop" 
                                 class="card-img-top" alt="Contemporary Apartment" style="height: 200px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 m-2">
                                <span class="badge bg-success">Managed by Khiki</span>
                            </div>
                            <div class="position-absolute top-0 end-0 m-2">
                                <button class="btn btn-light btn-sm rounded-circle me-1 heart-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="btn btn-light btn-sm rounded-circle">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-2">
                                <span class="badge bg-light text-dark">Apartment</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Contemporary 1-Bed in Shoreditch</h5>
                            <p class="text-muted mb-2">
                                <i class="fas fa-map-marker-alt me-1"></i>Shoreditch, London
                            </p>

                            <div class="d-flex gap-3 text-muted small mb-3">
                                <span><i class="fas fa-bed me-1"></i>1</span>
                                <span><i class="fas fa-bath me-1"></i>1</span>
                                <span><i class="fas fa-ruler-combined me-1"></i>600 sq ft</span>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="text-warning me-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="fw-medium">4.7</span>
                                <span class="text-muted small ms-1">(156 reviews)</span>
                            </div>

                            <div class="mb-3">
                                <span class="badge bg-light text-dark me-1 mb-1">WiFi</span>
                                <span class="badge bg-light text-dark me-1 mb-1">Kitchen</span>
                                <span class="badge bg-light text-dark">Rooftop</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <div class="h5 mb-0">£320/night</div>
                                    <small class="text-muted">£2,400/month</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-success btn-sm view-btn">
                                        <i class="fas fa-eye me-1"></i>View
                                    </button>
                                    <a href="contact.html" class="btn btn-success btn-sm">Inquire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property 5 -->
                <div class="col-md-6 col-lg-4 property-item" data-type="apartment" data-location="kensington">
                    <div class="card h-100 shadow-sm property-card">
                        <div class="position-relative">
                            <img src="https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop" 
                                 class="card-img-top" alt="Elegant Flat" style="height: 200px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 m-2">
                                <span class="badge bg-success">Managed by Khiki</span>
                            </div>
                            <div class="position-absolute top-0 end-0 m-2">
                                <button class="btn btn-light btn-sm rounded-circle me-1 heart-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="btn btn-light btn-sm rounded-circle">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-2">
                                <span class="badge bg-light text-dark">Apartment</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Elegant 2-Bed Flat in Kensington</h5>
                            <p class="text-muted mb-2">
                                <i class="fas fa-map-marker-alt me-1"></i>Kensington, London
                            </p>

                            <div class="d-flex gap-3 text-muted small mb-3">
                                <span><i class="fas fa-bed me-1"></i>2</span>
                                <span><i class="fas fa-bath me-1"></i>2</span>
                                <span><i class="fas fa-ruler-combined me-1"></i>950 sq ft</span>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="text-warning me-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="fw-medium">4.9</span>
                                <span class="text-muted small ms-1">(94 reviews)</span>
                            </div>

                            <div class="mb-3">
                                <span class="badge bg-light text-dark me-1 mb-1">WiFi</span>
                                <span class="badge bg-light text-dark me-1 mb-1">Kitchen</span>
                                <span class="badge bg-light text-dark me-1 mb-1">Balcony</span>
                                <span class="badge bg-light text-dark">+1 more</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <div class="h5 mb-0">£520/night</div>
                                    <small class="text-muted">£3,800/month</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-success btn-sm view-btn">
                                        <i class="fas fa-eye me-1"></i>View
                                    </button>
                                    <a href="contact.html" class="btn btn-success btn-sm">Inquire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property 6 -->
                <div class="col-md-6 col-lg-4 property-item" data-type="penthouse" data-location="london-bridge">
                    <div class="card h-100 shadow-sm property-card">
                        <div class="position-relative">
                            <img src="https://images.pexels.com/photos/1643384/pexels-photo-1643384.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop" 
                                 class="card-img-top" alt="Penthouse Suite" style="height: 200px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 m-2">
                                <span class="badge bg-success">Managed by Khiki</span>
                            </div>
                            <div class="position-absolute top-0 end-0 m-2">
                                <button class="btn btn-light btn-sm rounded-circle me-1 heart-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="btn btn-light btn-sm rounded-circle">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-2">
                                <span class="badge bg-light text-dark">Penthouse</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Penthouse Suite in The Shard Area</h5>
                            <p class="text-muted mb-2">
                                <i class="fas fa-map-marker-alt me-1"></i>London Bridge, London
                            </p>

                            <div class="d-flex gap-3 text-muted small mb-3">
                                <span><i class="fas fa-bed me-1"></i>3</span>
                                <span><i class="fas fa-bath me-1"></i>3</span>
                                <span><i class="fas fa-ruler-combined me-1"></i>1,500 sq ft</span>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="text-warning me-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="fw-medium">5.0</span>
                                <span class="text-muted small ms-1">(67 reviews)</span>
                            </div>

                            <div class="mb-3">
                                <span class="badge bg-light text-dark me-1 mb-1">WiFi</span>
                                <span class="badge bg-light text-dark me-1 mb-1">Kitchen</span>
                                <span class="badge bg-light text-dark me-1 mb-1">City Views</span>
                                <span class="badge bg-light text-dark">+1 more</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <div class="h5 mb-0">£850/night</div>
                                    <small class="text-muted">£6,200/month</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-success btn-sm view-btn">
                                        <i class="fas fa-eye me-1"></i>View
                                    </button>
                                    <a href="contact.html" class="btn btn-success btn-sm">Inquire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- No Results Message (Hidden by default) -->
            <div id="noResults" class="text-center py-5" style="display: none;">
                <i class="fas fa-search text-muted mb-3" style="font-size: 3rem;"></i>
                <h3 class="fw-bold mb-2">No properties found</h3>
                <p class="text-muted mb-4">Try adjusting your search criteria or browse all available properties.</p>
                <button class="btn btn-success" onclick="clearFilters()">Clear Filters</button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-success text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-3">Don't See What You're Looking For?</h2>
            <p class="lead mb-4">We have access to many more properties and can help you find the perfect match for your needs and budget.</p>
            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                <a href="contact.html" class="btn btn-light btn-lg px-4">Request Custom Search</a>
                <a href="contact.html" class="btn btn-outline-light btn-lg px-4">List Your Property</a>
            </div>
        </div>
    </section>
</x-front-layout>