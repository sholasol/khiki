<x-front-layout>
    <!-- Property Header -->
    <section class="bg-dark text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item"><a href="/" class="text-white-50">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('front.properties') }}" class="text-white-50">Properties</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">{{ $property->title }}</li>
                        </ol>
                    </nav>
                    <h1 class="fw-bold mb-2">{{ $property->title }}</h1>
                    <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>{{ $property->location }}</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <div class="d-flex flex-column flex-sm-row gap-2 justify-content-lg-end">
                        <button class="btn btn-outline-light">
                            <i class="far fa-heart me-1"></i>Save
                        </button>
                        <button class="btn btn-outline-light">
                            <i class="fas fa-share-alt me-1"></i>Share
                        </button>
                        <a href="{{ route('front.contact') }}" class="btn btn-success">
                            <i class="fas fa-envelope me-1"></i>Inquire Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Gallery & Details -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Property Images -->
                <div class="col-lg-8">
                    <div class="property-gallery mb-4">
                        @if($property->image_path)
                            <img src="{{ asset('storage/' . $property->image_path) }}" 
                                 alt="{{ $property->title }}" class="img-fluid rounded shadow-sm" 
                                 style="width: 100%; height: 500px; object-fit: cover;">
                        @else
                            <img src="https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1200&h=800&fit=crop" 
                                 alt="{{ $property->title }}" class="img-fluid rounded shadow-sm" 
                                 style="width: 100%; height: 500px; object-fit: cover;">
                        @endif
                    </div>

                    <!-- Property Description -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">About This Property</h4>
                        </div>
                        <div class="card-body">
                            <p>{{ $property->description }}</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <h5 class="mb-3">Property Details</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-home text-success me-2"></i>Type: <span class="fw-medium">{{ ucfirst($property->property_type) }}</span></li>
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
                                        <li class="mb-2"><i class="fas fa-bed text-success me-2"></i>Bedrooms: <span class="fw-medium">{{ $bedrooms }}</span></li>
                                        <li class="mb-2"><i class="fas fa-bath text-success me-2"></i>Bathrooms: <span class="fw-medium">{{ $bathrooms }}</span></li>
                                        <li class="mb-2"><i class="fas fa-ruler-combined text-success me-2"></i>Size: <span class="fw-medium">{{ $sqft }} sq ft</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mb-3">Amenities</h5>
                                    <div class="row">
                                        @if($property->features)
                                            @php
                                                $featureList = array_map('trim', explode(',', $property->features));
                                            @endphp
                                            
                                            @foreach($featureList as $feature)
                                                <div class="col-6 mb-2">
                                                    <i class="fas fa-check-circle text-success me-2"></i>{{ $feature }}
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-check-circle text-success me-2"></i>WiFi
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-check-circle text-success me-2"></i>Kitchen
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-check-circle text-success me-2"></i>Parking
                                            </div>
                                            <div class="col-6 mb-2">
                                                <i class="fas fa-check-circle text-success me-2"></i>Air Conditioning
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">Location</h4>
                        </div>
                        <div class="card-body">
                            <p class="mb-3"><i class="fas fa-map-marker-alt text-success me-2"></i>{{ $property->location }}</p>
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9935.658355237766!2d-0.12885844638611!3d51.50736092318858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2sLondon%2C%20UK!5e0!3m2!1sen!2sus!4v1654789999999!5m2!1sen!2sus" 
                                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Reviews</h4>
                            <div class="d-flex align-items-center">
                                <div class="text-warning me-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="fw-medium">4.8</span>
                                <span class="text-muted ms-1">({{ rand(50, 200) }} reviews)</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Sample Reviews -->
                            <div class="mb-4 pb-4 border-bottom">
                                <div class="d-flex mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle me-3" width="50" height="50" alt="Sarah Johnson">
                                    <div>
                                        <h6 class="mb-1">Sarah Johnson</h6>
                                        <div class="d-flex align-items-center">
                                            <div class="text-warning me-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="fw-medium">5.0</span>
                                        </div>
                                        <p class="mb-0">Great property! Perfect for a family vacation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 pb-4 border-bottom">
                                <div class="d-flex mb-3">
                                    <img src="https://randomuser.me/api/portraits/men/4.jpg" class="rounded-circle me-3" width="50" height="50" alt="John Smith">
                                    <div>
                                        <h6 class="mb-1">John Smith</h6>
                                        <div class="d-flex align-items-center">
                                            <div class="text-warning me-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="fw-medium">4.5</span>
                                        </div>
                                        <p class="mb-0">The location was great, but the property needed some maintenance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 pb-4 border-bottom">
                                <div class="d-flex mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/7.jpg" class="rounded-circle me-3" width="50" height="50" alt="Emily Davis">
                                    <div>
                                        <h6 class="mb-1">Emily Davis</h6>
                                        <div class="d-flex align-items-center">
                                            <div class="text-warning me-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="fw-medium">4.0</span>
                                        </div>
                                        <p class="mb-0">Nice place! Good value for money.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">Property Details</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-home text-success me-2"></i>Type: <span class="fw-medium">{{ ucfirst($property->property_type) }}</span></li>
                                <li class="mb-2"><i class="fas fa-bed text-success me-2"></i>Bedrooms: <span class="fw-medium">{{ $bedrooms }}</span></li>
                                <li class="mb-2"><i class="fas fa-bath text-success me-2"></i>Bathrooms: <span class="fw-medium">{{ $bathrooms }}</span></li>
                                <li class="mb-2"><i class="fas fa-ruler-combined text-success me-2"></i>Size: <span class="fw-medium">{{ $sqft }} sq ft</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">Amenities</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @if($property->features)
                                    @php
                                        $featureList = array_map('trim', explode(',', $property->features));
                                    @endphp
                                    
                                    @foreach($featureList as $feature)
                                        <div class="col-6 mb-2">
                                            <i class="fas fa-check-circle text-success me-2"></i>{{ $feature }}
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-6 mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>WiFi
                                    </div>
                                    <div class="col-6 mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>Kitchen
                                    </div>
                                    <div class="col-6 mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>Parking
                                    </div>
                                    <div class="col-6 mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>Air Conditioning
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">Location</h4>
                        </div>
                        <div class="card-body">
                            <p class="mb-3"><i class="fas fa-map-marker-alt text-success me-2"></i>{{ $property->location }}</p>
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9935.658355237766!2d-0.12885844638611!3d51.50736092318858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2sLondon%2C%20UK!5e0!3m2!1sen!2sus!4v1654789999999!5m2!1sen!2sus" 
                                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">Reviews</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="text-warning me-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="fw-medium">4.8</span>
                                <span class="text-muted ms-1">({{ rand(50, 200) }} reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
