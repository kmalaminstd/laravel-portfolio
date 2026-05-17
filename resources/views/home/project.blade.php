@extends('layouts/home-layout')

@section('content')

    <!-- Hero Banner -->
        <section class="position-relative overflow-hidden mb-5">
            <div class="container-fluid px-0">
                <div class="position-relative" style="height: 60vh; min-height: 400px;">
                    <div class="position-absolute w-100 h-100 bg-dark opacity-75 z-1"></div>
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Hero Banner" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0">
                    <div class="container h-100 position-relative z-2 d-flex align-items-center">
                        <div class="w-100">
                            <a href="/project" class=" hover-cyan mb-3 d-inline-flex align-items-center gs_reveal_right"><i class="ph ph-arrow-left me-2"></i> Back to Works</a>
                            <h1 class="display-4 fw-bold text-white mb-3 gs_reveal">E-Commerce SaaS Platform</h1>
                            <div class="d-flex gap-3 flex-wrap gs_reveal_up">
                                <span class="badge bg-opacity-10 bg-info text-info border border-info border-opacity-25 tech-font fs-6 py-2 px-3">Laravel 10</span>
                                <span class="badge bg-opacity-10 bg-primary text-primary border border-primary border-opacity-25 tech-font fs-6 py-2 px-3">Vue.js 3</span>
                                <span class="badge bg-opacity-10 bg-warning text-warning border border-warning border-opacity-25 tech-font fs-6 py-2 px-3">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5">
            <div class="container">
                <div class="row g-5">
                    <!-- Main Content (Left) -->
                    <div class="col-lg-8">
                        <div class="glass-card p-4 p-md-5 mb-5 neon-border gs_reveal_up">
                            <h3 class="fw-bold mb-4">Project Overview</h3>
                            <p class="">
                                This project involved building a highly scalable, multi-tenant e-commerce platform from the ground up. 
                                Designed to support hundreds of independent stores under a single SaaS architecture, the platform handles everything from complex inventory management to multi-currency payment processing.
                            </p>
                            
                            <h4 class="fw-bold mt-5 mb-3 text-white">Problem & Solution</h4>
                            <p class="">
                                <strong>Problem:</strong> Small businesses struggled with managing multiple tools for inventory, sales, and analytics. Existing solutions were either too expensive or lacked customization.<br><br>
                                <strong>Solution:</strong> We developed a centralized Laravel-based application utilizing multi-tenancy. This allowed each merchant to have an isolated database schema, ensuring data security while sharing the same core application code. The Vue.js frontend provided a seamless, SPA-like experience for the merchant dashboard.
                            </p>
                        </div>

                        <!-- Screenshots Gallery -->
                        <div class="mb-5">
                            <h3 class="fw-bold mb-4 gs_reveal">Screenshots</h3>
                            <div class="row g-4">
                                <div class="col-md-6 gs_reveal_up">
                                    <div class="overflow-hidden rounded-3 border border-secondary border-opacity-25">
                                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dashboard" class="img-fluid gallery-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="document.getElementById('modalImage').src=this.src">
                                    </div>
                                </div>
                                <div class="col-md-6 gs_reveal_up" data-delay="0.2">
                                    <div class="overflow-hidden rounded-3 border border-secondary border-opacity-25">
                                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Analytics" class="img-fluid gallery-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="document.getElementById('modalImage').src=this.src">
                                    </div>
                                </div>
                                <div class="col-12 gs_reveal_up">
                                    <div class="overflow-hidden rounded-3 border border-secondary border-opacity-25">
                                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Code" class="img-fluid gallery-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="document.getElementById('modalImage').src=this.src">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dev Process -->
                        <div class="glass-card p-4 p-md-5 mb-5 gs_reveal_up">
                            <h3 class="fw-bold mb-4">Development Process</h3>
                            <ul class=" list-unstyled">
                                <li class="mb-3 d-flex gap-3">
                                    <i class="ph-fill ph-check-circle text-accent-cyan mt-1 fs-5"></i>
                                    <span><strong>Phase 1: Architecture Design.</strong> Defined the multi-tenant database structure using stancl/tenancy.</span>
                                </li>
                                <li class="mb-3 d-flex gap-3">
                                    <i class="ph-fill ph-check-circle text-accent-cyan mt-1 fs-5"></i>
                                    <span><strong>Phase 2: Core API.</strong> Developed RESTful APIs using Laravel Sanctum for secure merchant authentication.</span>
                                </li>
                                <li class="mb-3 d-flex gap-3">
                                    <i class="ph-fill ph-check-circle text-accent-cyan mt-1 fs-5"></i>
                                    <span><strong>Phase 3: Frontend Dashboard.</strong> Integrated Vue 3 with Pinia for state management, building a responsive dashboard.</span>
                                </li>
                                <li class="mb-3 d-flex gap-3">
                                    <i class="ph-fill ph-check-circle text-accent-cyan mt-1 fs-5"></i>
                                    <span><strong>Phase 4: Payment Gateway.</strong> Implemented Stripe Connect for automated split payments.</span>
                                </li>
                            </ul>

                            <h4 class="fw-bold mt-5 mb-3 text-white">Challenges Faced</h4>
                            <p class="">
                                Managing cache separation across different tenants without leaking data was the biggest challenge. This was resolved by configuring Redis to prefix keys dynamically based on the current tenant ID.
                            </p>
                        </div>
                    </div>

                    <!-- Sidebar (Right) -->
                    <div class="col-lg-4">
                        <div class="position-sticky" style="top: 100px;">
                            <div class="glass-card p-4 mb-4 neon-border gs_reveal_right">
                                <h5 class="fw-bold mb-4 text-white">Project Details</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3 border-bottom border-secondary border-opacity-25 pb-2">
                                        <span class=" d-block small">Client</span>
                                        <span class="text-white fw-medium">TechNova Solutions</span>
                                    </li>
                                    <li class="mb-3 border-bottom border-secondary border-opacity-25 pb-2">
                                        <span class=" d-block small">Role</span>
                                        <span class="text-white fw-medium">Lead Backend Developer</span>
                                    </li>
                                    <li class="mb-3 border-bottom border-secondary border-opacity-25 pb-2">
                                        <span class=" d-block small">Timeline</span>
                                        <span class="text-white fw-medium">4 Months</span>
                                    </li>
                                    <li>
                                        <span class=" d-block small mb-2">Links</span>
                                        <div class="d-flex gap-2 flex-column">
                                            <a href="#" class="btn-custom btn-primary-custom w-100 text-center"><i class="ph ph-link me-2"></i> Live Preview</a>
                                            <a href="#" class="btn-custom btn-outline-custom w-100 text-center bg-dark bg-opacity-50"><i class="ph-fill ph-github-logo me-2"></i> Source Code</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="glass-card p-4 gs_reveal_right" data-delay="0.2">
                                <h5 class="fw-bold mb-4 text-white">Key Features</h5>
                                <ul class=" ps-3 mb-0">
                                    <li class="mb-2">Multi-tenant Architecture</li>
                                    <li class="mb-2">Role-Based Access Control (RBAC)</li>
                                    <li class="mb-2">Stripe Connect Integration</li>
                                    <li class="mb-2">Real-time Analytics Dashboard</li>
                                    <li class="mb-2">Automated Invoice Generation</li>
                                    <li>Redis Caching Setup</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 gs_reveal">
                    <div class="col-6">
                        <a href="#" class=" hover-cyan d-flex align-items-center">
                            <i class="ph ph-arrow-left fs-4 me-3"></i>
                            <div>
                                <span class="small d-block">Previous Project</span>
                                <strong class="text-white">University Management</strong>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 text-end">
                        <a href="#" class=" hover-cyan d-flex align-items-center justify-content-end">
                            <div>
                                <span class="small d-block">Next Project</span>
                                <strong class="text-white">Payment API</strong>
                            </div>
                            <i class="ph ph-arrow-right fs-4 ms-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

@endsection