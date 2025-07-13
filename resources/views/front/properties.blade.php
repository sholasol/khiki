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
                                @php
                                    $locations = $properties->pluck('location')->unique();
                                @endphp
                                @foreach($locations as $location)
                                    <option value="{{ strtolower(str_replace(' ', '-', $location)) }}">{{ $location }}</option>
                                @endforeach
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
                    <p class="text-muted mb-0">Showing <span id="propertyCount">{{ $properties->count() }}</span> properties</p>
                    <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="collapse" data-bs-target="#advancedFilters">
                        <i class="fas fa-filter me-1"></i>More Filters
                    </button>
                </div>
                
                <!-- Advanced Filters (Collapsed by default) -->
                <div class="collapse mt-3" id="advancedFilters">
                    <div class="card card-body bg-light border-0">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Price Range</label>
                                <div class="d-flex align-items-center">
                                    <input type="number" class="form-control form-control-sm" placeholder="Min £">
                                    <span class="mx-2">-</span>
                                    <input type="number" class="form-control form-control-sm" placeholder="Max £">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label fw-medium">Bedrooms</label>
                                <select class="form-select form-select-sm">
                                    <option value="">Any</option>
                                    <option value="1">1+</option>
                                    <option value="2">2+</option>
                                    <option value="3">3+</option>
                                    <option value="4">4+</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label fw-medium">Bathrooms</label>
                                <select class="form-select form-select-sm">
                                    <option value="">Any</option>
                                    <option value="1">1+</option>
                                    <option value="2">2+</option>
                                    <option value="3">3+</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Amenities</label>
                                <div class="d-flex flex-wrap gap-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="wifi">
                                        <label class="form-check-label" for="wifi">WiFi</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="parking">
                                        <label class="form-check-label" for="parking">Parking</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="balcony">
                                        <label class="form-check-label" for="balcony">Balcony</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="garden">
                                        <label class="form-check-label" for="garden">Garden</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Properties Grid -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4" id="propertiesGrid">
                @forelse($properties as $property)
                    <div class="col-md-6 col-lg-4 property-item" data-type="{{ $property->property_type }}" data-location="{{ strtolower(str_replace(' ', '-', $property->location)) }}">
                        <div class="card h-100 shadow-sm property-card">
                            <div class="position-relative">
                                @if($property->image_path)
                                    <img src="{{ asset('storage/' . $property->image_path) }}" 
                                         class="card-img-top" alt="{{ $property->title }}" style="height: 200px; object-fit: cover;">
                                @else
                                    <img src="https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop" 
                                         class="card-img-top" alt="{{ $property->title }}" style="height: 200px; object-fit: cover;">
                                @endif
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
                                    <span class="badge bg-light text-dark">{{ ucfirst($property->property_type) }}</span>
                                </div>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">{{ $property->title }}</h5>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-map-marker-alt me-1"></i>{{ $property->location }}
                                </p>

                                <div class="d-flex gap-3 text-muted small mb-3">
                                    @php
                                        $features = $property->features ? explode(',', $property->features) : [];
                                        $bedrooms = 1;
                                        $bathrooms = 1;
                                        $sqft = rand(450, 1500);
                                        
                                        // Extract bedrooms and bathrooms from features if available
                                        foreach($features as $feature) {
                                            if (preg_match('/(\d+)\s*bed/i', $feature, $matches)) {
                                                $bedrooms = $matches[1];
                                            }
                                            if (preg_match('/(\d+)\s*bath/i', $feature, $matches)) {
                                                $bathrooms = $matches[1];
                                            }
                                        }
                                    @endphp
                                    <span><i class="fas fa-bed me-1"></i>{{ $bedrooms }}</span>
                                    <span><i class="fas fa-bath me-1"></i>{{ $bathrooms }}</span>
                                    <span><i class="fas fa-ruler-combined me-1"></i>{{ $sqft }} sq ft</span>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-warning me-2">
                                        @for($i = 0; $i < 5; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                    </div>
                                    <span class="fw-medium">{{ number_format(4.5 + (rand(0, 10) / 20), 1) }}</span>
                                    <span class="text-muted small ms-1">({{ rand(50, 200) }} reviews)</span>
                                </div>

                                <div class="mb-3">
                                    @if($property->features)
                                        @php
                                            $featureList = array_map('trim', explode(',', $property->features));
                                            $displayFeatures = array_slice($featureList, 0, 3);
                                            $remainingCount = count($featureList) - 3;
                                        @endphp
                                        
                                        @foreach($displayFeatures as $feature)
                                            <span class="badge bg-light text-dark me-1 mb-1">{{ $feature }}</span>
                                        @endforeach
                                        
                                        @if($remainingCount > 0)
                                            <span class="badge bg-light text-dark">+{{ $remainingCount }} more</span>
                                        @endif
                                    @else
                                        <span class="badge bg-light text-dark me-1 mb-1">WiFi</span>
                                        <span class="badge bg-light text-dark me-1 mb-1">Kitchen</span>
                                        <span class="badge bg-light text-dark">Parking</span>
                                    @endif
                                </div>

                                <div class="d-flex justify-content-between align-items-end">
                                    <div>
                                        <div class="h5 mb-0">£{{ number_format($property->price, 0) }}/night</div>
                                        <small class="text-muted">£{{ number_format($property->price * 30 * 0.8, 0) }}/month</small>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('front.property', $property->id) }}" class="btn btn-outline-success btn-sm">
                                            <i class="fas fa-eye me-1"></i>View
                                        </a>
                                        <a href="{{ route('front.contact') }}" class="btn btn-success btn-sm">Inquire</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="py-5">
                            <i class="fas fa-home text-muted mb-4" style="font-size: 4rem;"></i>
                            <h3 class="fw-bold">No properties available at the moment</h3>
                            <p class="text-muted">Please check back later or contact us for custom property search.</p>
                            <a href="{{ route('front.contact') }}" class="btn btn-success mt-3">Contact Us</a>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- No Results Message (Hidden by default) -->
            <div id="noResults" class="text-center py-5" style="display: none;">
                <i class="fas fa-search text-muted mb-3" style="font-size: 3rem;"></i>
                <h3 class="fw-bold mb-2">No properties found</h3>
                <p class="text-muted mb-4">Try adjusting your search criteria or browse all available properties.</p>
                <button class="btn btn-success" onclick="clearFilters()">Clear Filters</button>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-5">
                {{ $properties->links() }}
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-success text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-3">Don't See What You're Looking For?</h2>
            <p class="lead mb-4">We have access to many more properties and can help you find the perfect match for your needs and budget.</p>
            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                <a href="{{ route('front.contact') }}" class="btn btn-light btn-lg px-4">Request Custom Search</a>
                <a href="{{ route('front.contact') }}" class="btn btn-outline-light btn-lg px-4">List Your Property</a>
            </div>
        </div>
    </section>

    <!-- Property Viewing Modal -->
    <div class="modal fade" id="propertyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPropertyTitle">Property Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalPropertyContent">
                    <!-- Content will be loaded dynamically -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-success" id="modalInquireBtn">Inquire Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom JavaScript for Property Filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize property filtering
            const searchForm = document.getElementById('propertySearchForm');
            const searchInput = document.getElementById('search');
            const typeSelect = document.getElementById('type');
            const locationSelect = document.getElementById('location');
            const propertyItems = document.querySelectorAll('.property-item');
            const propertyCount = document.getElementById('propertyCount');
            const noResults = document.getElementById('noResults');
            
            // Search functionality
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                filterProperties();
            });
            
            // Filter on select change
            typeSelect.addEventListener('change', filterProperties);
            locationSelect.addEventListener('change', filterProperties);
            
            function filterProperties() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedType = typeSelect.value;
                const selectedLocation = locationSelect.value;
                let visibleCount = 0;
                
                propertyItems.forEach(item => {
                    const title = item.querySelector('.card-title').textContent.toLowerCase();
                    const location = item.querySelector('.text-muted').textContent.toLowerCase();
                    const type = item.dataset.type;
                    const itemLocation = item.dataset.location;
                    
                    const matchesSearch = title.includes(searchTerm) || location.includes(searchTerm) || searchTerm === '';
                    const matchesType = selectedType === '' || type === selectedType;
                    const matchesLocation = selectedLocation === '' || itemLocation === selectedLocation;
                    
                    if (matchesSearch && matchesType && matchesLocation) {
                        item.style.display = 'block';
                        item.classList.add('fade-in');
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                        item.classList.remove('fade-in');
                    }
                });
                
                // Update count and show/hide no results message
                propertyCount.textContent = visibleCount;
                if (visibleCount === 0) {
                    noResults.style.display = 'block';
                } else {
                    noResults.style.display = 'none';
                }
            }
            
            // Clear filters function
            window.clearFilters = function() {
                searchInput.value = '';
                typeSelect.value = '';
                locationSelect.value = '';
                
                propertyItems.forEach(item => {
                    item.style.display = 'block';
                    item.classList.add('fade-in');
                });
                
                propertyCount.textContent = propertyItems.length;
                noResults.style.display = 'none';
            };
            
            // Heart button functionality
            document.querySelectorAll('.heart-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const icon = this.querySelector('i');
                    
                    if (icon.classList.contains('far')) {
                        icon.classList.remove('far');
                        icon.classList.add('fas');
                        icon.classList.add('text-danger');
                        showToast('Property added to favorites!');
                    } else {
                        icon.classList.remove('fas');
                        icon.classList.remove('text-danger');
                        icon.classList.add('far');
                        showToast('Property removed from favorites!');
                    }
                });
            });
            
            // Toast notification
            function showToast(message) {
                const toastContainer = document.createElement('div');
                toastContainer.className = 'position-fixed bottom-0 end-0 p-3';
                toastContainer.style.zIndex = '5';
                
                const toastEl = document.createElement('div');
                toastEl.className = 'toast align-items-center text-white bg-success border-0';
                toastEl.setAttribute('role', 'alert');
                toastEl.setAttribute('aria-live', 'assertive');
                toastEl.setAttribute('aria-atomic', 'true');
                
                toastEl.innerHTML = `
                    <div class="d-flex">
                        <div class="toast-body">
                            ${message}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                `;
                
                toastContainer.appendChild(toastEl);
                document.body.appendChild(toastContainer);
                
                const toast = new bootstrap.Toast(toastEl, {
                    delay: 3000
                });
                toast.show();
                
                // Remove from DOM after hiding
                toastEl.addEventListener('hidden.bs.toast', function() {
                    document.body.removeChild(toastContainer);
                });
            }
        });
    </script>
</x-front-layout>
