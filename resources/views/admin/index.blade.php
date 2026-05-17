@extends('layouts.admin-layout')

@section('content')

<!-- Dashboard Widgets -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="glass-card p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class=" mb-1">Total Projects</p>
                            <h3 class="text-white fw-bold mb-0">24</h3>
                        </div>
                        <div class="p-2 bg-info bg-opacity-10 rounded text-info">
                            <i class="ph-fill ph-folder-open fs-3"></i>
                        </div>
                    </div>
                    <span class="text-success small"><i class="ph ph-trend-up"></i> +2 this month</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="glass-card p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class=" mb-1">Unread Messages</p>
                            <h3 class="text-white fw-bold mb-0">12</h3>
                        </div>
                        <div class="p-2 bg-warning bg-opacity-10 rounded text-warning">
                            <i class="ph-fill ph-envelope-simple-open fs-3"></i>
                        </div>
                    </div>
                    <span class="text-danger small"><i class="ph ph-trend-down"></i> -5 this week</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="glass-card p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class=" mb-1">Profile Views</p>
                            <h3 class="text-white fw-bold mb-0">1,204</h3>
                        </div>
                        <div class="p-2 bg-primary bg-opacity-10 rounded text-primary">
                            <i class="ph-fill ph-eye fs-3"></i>
                        </div>
                    </div>
                    <span class="text-success small"><i class="ph ph-trend-up"></i> +15% vs last month</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="glass-card p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class=" mb-1">Skills Listed</p>
                            <h3 class="text-white fw-bold mb-0">15</h3>
                        </div>
                        <div class="p-2 bg-success bg-opacity-10 rounded text-success">
                            <i class="ph-fill ph-code fs-3"></i>
                        </div>
                    </div>
                    <span class=" small">Updated 2 days ago</span>
                </div>
            </div>
        </div>

        <!-- Charts & Tables -->
        <div class="row g-4">
            <!-- Visitors Chart -->
            <div class="col-lg-8">
                <div class="glass-card p-4 h-100">
                    <h5 class="text-white mb-4">Visitor Analytics</h5>
                    <canvas id="visitorsChart" height="100"></canvas>
                </div>
            </div>

            <!-- Recent Messages -->
            <div class="col-lg-4">
                <div class="glass-card p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="text-white mb-0">Recent Messages</h5>
                        <a href="#" class="text-info text-decoration-none small">View All</a>
                    </div>
                    
                    <div class="d-flex flex-column gap-3">
                        <div class="p-3 bg-dark rounded border border-secondary border-opacity-25">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-white fw-medium small">John Doe</span>
                                <span class="" style="font-size: 10px;">2 hours ago</span>
                            </div>
                            <p class=" small mb-0 text-truncate">I have a Laravel project I need help with...</p>
                        </div>
                        <div class="p-3 bg-dark rounded border border-secondary border-opacity-25">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-white fw-medium small">Sarah Smith</span>
                                <span class="" style="font-size: 10px;">Yesterday</span>
                            </div>
                            <p class=" small mb-0 text-truncate">Looking for an API developer for our startup.</p>
                        </div>
                        <div class="p-3 bg-dark rounded border border-secondary border-opacity-25 opacity-75">
                            <div class="d-flex justify-content-between mb-1">
                                <span class=" fw-medium small">Mike Johnson</span>
                                <span class="" style="font-size: 10px;">3 days ago</span>
                            </div>
                            <p class=" small mb-0 text-truncate">Can you help us migrate to Vue 3?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Projects Table -->
            <div class="col-12">
                <div class="glass-card p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="text-white mb-0">Manage Projects</h5>
                        <button class="btn btn-primary btn-sm px-3" style="background-color: var(--accent-indigo); border: none;">+ Add Project</button>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-custom table-borderless">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Category</th>
                                    <th>Date Added</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="rounded" width="40" height="40" style="object-fit: cover;">
                                            <span class="text-white">E-Commerce SaaS Platform</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-secondary bg-opacity-25 text-light">Laravel, Vue</span></td>
                                    <td>Oct 12, 2025</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Published</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-info border-0"><i class="ph ph-pencil-simple"></i></button>
                                        <button class="btn btn-sm btn-outline-danger border-0"><i class="ph ph-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="rounded" width="40" height="40" style="object-fit: cover;">
                                            <span class="text-white">University Management System</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-secondary bg-opacity-25 text-light">PHP, MySQL</span></td>
                                    <td>Sep 05, 2025</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Published</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-info border-0"><i class="ph ph-pencil-simple"></i></button>
                                        <button class="btn btn-sm btn-outline-danger border-0"><i class="ph ph-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="rounded" width="40" height="40" style="object-fit: cover;">
                                            <span class="text-white">Payment Gateway API</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-secondary bg-opacity-25 text-light">API, Laravel</span></td>
                                    <td>Aug 20, 2025</td>
                                    <td><span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Draft</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-info border-0"><i class="ph ph-pencil-simple"></i></button>
                                        <button class="btn btn-sm btn-outline-danger border-0"><i class="ph ph-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection