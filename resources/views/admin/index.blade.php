<x-admin-layout>
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <p class="text-muted">Welcome to Khiki Limited Property Management</p>
        </div>
    </div>
    
    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Properties</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Property::count() }}</div>
                            <div class="text-xs text-muted">Across all locations</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Active Listings</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Property::count() }}</div>
                            <div class="text-xs text-muted">Currently available</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Property Types</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Property::distinct('property_type')->count('property_type') }}</div>
                            <div class="text-xs text-muted">Different categories</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tags fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Inquiries</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            <div class="text-xs text-muted">Pending responses</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Recent Properties -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Properties</h6>
                    <a href="" class="btn btn-sm btn-primary">View All</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Location</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($propertys as $property)
                                    <tr>
                                        <td>{{ $property->title }}</td>
                                        <td><span class="badge bg-light text-dark">{{ $property->property_type }}</span></td>
                                        <td>£{{ number_format($property->price, 2) }}</td>
                                        <td>{{ $property->location }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('edit.property', $property->id) }}" class="btn btn-outline-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('show.property', $property->id) }}" class="btn btn-outline-info">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-muted">No properties found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-4">
            <!-- Quick Actions Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('createProperty') }}" class="btn btn-success btn-block">
                            <i class="fas fa-plus-circle me-1"></i> Add New Property
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-block">
                            <i class="fas fa-file-alt me-1"></i> Generate Reports
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-block">
                            <i class="fas fa-envelope me-1"></i> Manage Inquiries
                        </a>
                    </div>
                </div>
            </div>

            <!-- Property Types Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Property Types</h6>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        @foreach(\App\Models\Property::select('property_type')->distinct()->get() as $type)
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                {{ ucfirst($type->property_type) }}
                                <span class="badge bg-primary rounded-pill">
                                    {{ \App\Models\Property::where('property_type', $type->property_type)->count() }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
