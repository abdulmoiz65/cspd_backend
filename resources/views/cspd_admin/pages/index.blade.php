@extends('cspd_admin.layout.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row g-4">
            <!-- Page Header -->
            <div class="col-12">
                <div class="bg-light rounded p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-1">Admin Dashboard</h2>
                            <p class="text-muted mb-0">Welcome to CSPD Admin Panel</p>
                        </div>
                        <div class="text-end">
                            <small class="text-muted">{{ now()->format('F j, Y') }}</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white rounded">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0">Total Programs</h6>
                                <h2 class="mt-2 mb-0">{{ $stats['total_programs'] ?? 0 }}</h2>
                                <small class="opacity-75">All programs</small>
                            </div>
                            <i class="fas fa-calendar-alt fa-3x opacity-50"></i>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('admin.upcoming.index') }}" class="text-white text-decoration-none small">
                                View All <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white rounded">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0">Upcoming Programs</h6>
                                <h2 class="mt-2 mb-0">{{ $stats['upcoming_programs'] ?? 0 }}</h2>
                                <small class="opacity-75">Scheduled programs</small>
                            </div>
                            <i class="fas fa-calendar-check fa-3x opacity-50"></i>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('admin.upcoming.index') }}" class="text-white text-decoration-none small">
                                View All <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-info text-white rounded">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0">Active Programs</h6>
                                <h2 class="mt-2 mb-0">{{ $stats['active_programs'] ?? 0 }}</h2>
                                <small class="opacity-75">Currently running</small>
                            </div>
                            <i class="fas fa-play-circle fa-3x opacity-50"></i>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('admin.upcoming.index') }}" class="text-white text-decoration-none small">
                                View All <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-dark rounded">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0">NAVTTC Programs</h6>
                                <h2 class="mt-2 mb-0">{{ $stats['navttc_programs'] ?? 0 }}</h2>
                                <small class="opacity-75">NAVTTC affiliated</small>
                            </div>
                            <i class="fas fa-graduation-cap fa-3x opacity-50"></i>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="text-dark text-decoration-none small">
                                View Details <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="col-12">
                <div class="bg-light rounded p-4">
                    <h5 class="mb-4">Quick Actions</h5>
                    <div class="row g-3">
                        <div class="col-xl-3 col-md-6">
                            <a href="{{ route('admin.upcoming.create') }}"
                                class="card quick-action-card text-decoration-none">
                                <div class="card-body text-center py-4">
                                    <i class="fas fa-plus-circle fa-2x text-primary mb-3"></i>
                                    <h6 class="mb-0">Add New Program</h6>
                                    <small class="text-muted">Create training program</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <a href="{{ route('admin.upcoming.index') }}"
                                class="card quick-action-card text-decoration-none">
                                <div class="card-body text-center py-4">
                                    <i class="fas fa-calendar-check fa-2x text-success mb-3"></i>
                                    <h6 class="mb-0">Manage Programs</h6>
                                    <small class="text-muted">View all programs</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <a href="#" class="card quick-action-card text-decoration-none">
                                <div class="card-body text-center py-4">
                                    <i class="fas fa-list-alt fa-2x text-info mb-3"></i>
                                    <h6 class="mb-0">Program Categories</h6>
                                    <small class="text-muted">Manage categories</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <a href="#" class="card quick-action-card text-decoration-none">
                                <div class="card-body text-center py-4">
                                    <i class="fas fa-cog fa-2x text-warning mb-3"></i>
                                    <h6 class="mb-0">Settings</h6>
                                    <small class="text-muted">System settings</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Programs Table -->
            <div class="col-12">
                <div class="bg-light rounded p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Recent Programs</h5>
                        <a href="{{ route('admin.upcoming.index') }}" class="btn btn-sm btn-primary">
                            View All Programs <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>

                    @if (isset($recentPrograms) && count($recentPrograms) > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Program Title</th>
                                        <th>Date</th>
                                        <th>Duration</th>
                                        <th>Timing</th>
                                        <th>Fees</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recentPrograms as $program)
                                        <tr>
                                            <td class="fw-bold">{{ $program->id }}</td>
                                            <td>
                                                <h6 class="mb-0" style="font-size: 14px;">
                                                    {{ Str::limit($program->title, 40) }}</h6>
                                                <small class="text-muted">{{ Str::limit($program->overview, 50) }}</small>
                                            </td>
                                            <td>{{ $program->display_date ?? 'N/A' }}</td>
                                            <td>{{ $program->duration }}</td>
                                            <td>{{ $program->timing }}</td>
                                            <td class="text-success fw-bold">{{ $program->formatted_fees }}</td>
                                            <td>
                                                <span
                                                    class="badge {{ $program->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                                                    {{ ucfirst($program->status) }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-calendar-plus fa-3x text-muted mb-3"></i>
                            <h6>No Programs Found</h6>
                            <p class="text-muted small">Create your first program to get started</p>
                            <a href="{{ route('admin.upcoming.create') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus me-1"></i>Create First Program
                            </a>
                        </div>
                    @endif
                </div>
            </div>




        </div>
    </div>

    <style>
        .card.quick-action-card {
            border: 1px solid #dee2e6;
            transition: all 0.3s ease;
            height: 100%;
        }

        .card.quick-action-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .quick-action-card .card-body {
            padding: 1.5rem 1rem;
        }

        .list-group-item {
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .list-group-item:last-child {
            border-bottom: none;
        }
    </style>
@endsection
