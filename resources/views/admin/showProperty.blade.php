<x-admin-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Property Details</h1>
            <div>
                <a href="{{ route('edit.property', $property->id) }}" class="btn btn-primary btn-sm me-2">
                    <i class="fas fa-edit me-1"></i> Edit
                </a>
                <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left me-1"></i> Back
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $property->title }}</h6>
                    </div>
                    <div class="card-body">
                        @if($property->image_path)
                            <div class="text-center mb-4">
                                <img src="{{ asset('storage/' . $property->image_path) }}" 
                                    alt="{{ $property->title }}" class="img-fluid rounded" 
                                    style="max-height: 400px">
                            </div>
                        @endif

                        <div class="mb-4">
                            <h5 class="font-weight-bold">Description</h5>
                            <p>{{ $property->description }}</p>
                        </div>

                        @if($property->features)
                            <div class="mb-4">
                                <h5 class="font-weight-bold">Features</h5>
                                <ul class="list-group list-group-flush">
                                    @foreach(explode(',', $property->features) as $feature)
                                        <li class="list-group-item bg-light">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            {{ trim($feature) }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Property Information</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-tag me-2 text-primary"></i> Price:</span>
                                <span class="font-weight-bold">£{{ number_format($property->price, 2) }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-home me-2 text-primary"></i> Type:</span>
                                <span class="badge bg-light text-dark">{{ ucfirst($property->property_type) }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-map-marker-alt me-2 text-primary"></i> Location:</span>
                                <span>{{ $property->location }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-calendar me-2 text-primary"></i> Listed:</span>
                                <span>{{ $property->created_at->format('d M Y') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-clock me-2 text-primary"></i> Last Updated:</span>
                                <span>{{ $property->updated_at->format('d M Y') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Actions</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="{{ route('edit.property', $property->id) }}" class="btn btn-primary btn-block">
                                <i class="fas fa-edit me-1"></i> Edit Property
                            </a>
                            <button type="button" class="btn btn-success btn-block" 
                                onclick="window.open('{{ route('front.property', $property->id) }}', '_blank')">
                                <i class="fas fa-eye me-1"></i> View on Website
                            </button>
                            <form action="{{ route('delete.property', $property->id) }}" method="POST" 
                                onsubmit="return confirm('Are you sure you want to delete this property? This action cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-block">
                                    <i class="fas fa-trash me-1"></i> Delete Property
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>