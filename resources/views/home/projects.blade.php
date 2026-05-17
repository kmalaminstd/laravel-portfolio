@extends('layouts/home-layout')

@section('content')

    <x-home.page-header page_title="My Work" page_description="A collection of web applications, APIs, and digital solutions I've built to solve complex problems." />

        <!-- Projects Grid Section -->
        <section class="pb-5 mb-5">
            <div class="container">
                <!-- Search & Filters -->
                <div class="row mb-5 align-items-center gs_reveal_up" data-delay="0.2">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <div class="d-flex flex-wrap gap-2" id="filter-container">
                            <button class="btn btn-outline-custom rounded-pill filter-btn active" data-filter="all">All</button>
                            <button class="btn btn-outline-custom rounded-pill filter-btn" data-filter="laravel">Laravel</button>
                            <button class="btn btn-outline-custom rounded-pill filter-btn" data-filter="php">PHP</button>
                            <button class="btn btn-outline-custom rounded-pill filter-btn" data-filter="fullstack">Full Stack</button>
                            <button class="btn btn-outline-custom rounded-pill filter-btn" data-filter="api">API</button>
                            <button class="btn btn-outline-custom rounded-pill filter-btn" data-filter="dashboard">Dashboard</button>
                        </div>
                    </div>
                </div>

                <!-- Grid -->
                <div class="row g-4" id="projects-grid">
                    <!-- Project 1 -->
                    <div class="col-md-6 col-lg-4 project-item gs_reveal_up" data-category="laravel fullstack">
                        <div class="glass-card overflow-hidden project-card h-100 group">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <div class="position-absolute w-100 h-100 bg-dark opacity-50 z-1 project-overlay transition-smooth"></div>
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-100 h-100 object-fit-cover transition-smooth project-img" alt="Project 1">
                                <div class="position-absolute top-50 start-50 translate-middle z-2 project-btns text-center w-100">
                                    <a href="work-details.html" class="btn-custom btn-primary-custom mx-1 scale-0 transition-smooth btn-project btn-sm">Details</a>
                                    <a href="#" class="btn-custom btn-outline-custom mx-1 bg-dark bg-opacity-50 scale-0 transition-smooth btn-project btn-sm">Live</a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5 class="text-white mb-2 project-title">E-Commerce SaaS Platform</h5>
                                <p class="small mb-3">Multi-tenant e-commerce platform with inventory management.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-opacity-10 bg-info text-info border border-info border-opacity-25 tech-font">Laravel</span>
                                    <span class="badge bg-opacity-10 bg-primary text-primary border border-primary border-opacity-25 tech-font">Vue.js</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="col-md-6 col-lg-4 project-item gs_reveal_up" data-category="php dashboard">
                        <div class="glass-card overflow-hidden project-card h-100 group">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <div class="position-absolute w-100 h-100 bg-dark opacity-50 z-1 project-overlay transition-smooth"></div>
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-100 h-100 object-fit-cover transition-smooth project-img" alt="Project 2">
                                <div class="position-absolute top-50 start-50 translate-middle z-2 project-btns text-center w-100">
                                    <a href="work-details.html" class="btn-custom btn-primary-custom mx-1 scale-0 transition-smooth btn-project btn-sm">Details</a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5 class="text-white mb-2 project-title">University Management System</h5>
                                <p class="small mb-3">Portal for students handling attendance and schedules.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-opacity-10 bg-info text-info border border-info border-opacity-25 tech-font">PHP</span>
                                    <span class="badge bg-opacity-10 bg-warning text-warning border border-warning border-opacity-25 tech-font">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="col-md-6 col-lg-4 project-item gs_reveal_up" data-category="laravel api">
                        <div class="glass-card overflow-hidden project-card h-100 group">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <div class="position-absolute w-100 h-100 bg-dark opacity-50 z-1 project-overlay transition-smooth"></div>
                                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-100 h-100 object-fit-cover transition-smooth project-img" alt="Project 3">
                                <div class="position-absolute top-50 start-50 translate-middle z-2 project-btns text-center w-100">
                                    <a href="work-details.html" class="btn-custom btn-primary-custom mx-1 scale-0 transition-smooth btn-project btn-sm">Details</a>
                                    <a href="#" class="btn-custom btn-outline-custom mx-1 bg-dark bg-opacity-50 scale-0 transition-smooth btn-project btn-sm"><i class="ph-fill ph-github-logo"></i></a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5 class="text-white mb-2 project-title">Payment Gateway Integration API</h5>
                                <p class="small mb-3">Secure REST API wrapper for multiple payment providers.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-opacity-10 bg-info text-info border border-info border-opacity-25 tech-font">Laravel</span>
                                    <span class="badge bg-opacity-10 bg-light text-light border border-light border-opacity-25 tech-font">REST API</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 4 -->
                    <div class="col-md-6 col-lg-4 project-item gs_reveal_up" data-category="php fullstack">
                        <div class="glass-card overflow-hidden project-card h-100 group">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <div class="position-absolute w-100 h-100 bg-dark opacity-50 z-1 project-overlay transition-smooth"></div>
                                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-100 h-100 object-fit-cover transition-smooth project-img" alt="Project 4">
                                <div class="position-absolute top-50 start-50 translate-middle z-2 project-btns text-center w-100">
                                    <a href="work-details.html" class="btn-custom btn-primary-custom mx-1 scale-0 transition-smooth btn-project btn-sm">Details</a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5 class="text-white mb-2 project-title">Freelancer Job Portal</h5>
                                <p class="small mb-3">A marketplace connecting clients with skilled freelancers.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-opacity-10 bg-info text-info border border-info border-opacity-25 tech-font">PHP</span>
                                    <span class="badge bg-opacity-10 bg-success text-success border border-success border-opacity-25 tech-font">Bootstrap 5</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="col-md-6 col-lg-4 project-item gs_reveal_up" data-category="laravel dashboard">
                        <div class="glass-card overflow-hidden project-card h-100 group">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <div class="position-absolute w-100 h-100 bg-dark opacity-50 z-1 project-overlay transition-smooth"></div>
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-100 h-100 object-fit-cover transition-smooth project-img" alt="Project 5" style="filter: hue-rotate(90deg);">
                                <div class="position-absolute top-50 start-50 translate-middle z-2 project-btns text-center w-100">
                                    <a href="work-details.html" class="btn-custom btn-primary-custom mx-1 scale-0 transition-smooth btn-project btn-sm">Details</a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5 class="text-white mb-2 project-title">CRM Admin Dashboard</h5>
                                <p class="small mb-3">Advanced analytics and customer relationship management tool.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-opacity-10 bg-info text-info border border-info border-opacity-25 tech-font">Laravel</span>
                                    <span class="badge bg-opacity-10 bg-primary text-primary border border-primary border-opacity-25 tech-font">React</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 6 -->
                    <div class="col-md-6 col-lg-4 project-item gs_reveal_up" data-category="api">
                        <div class="glass-card overflow-hidden project-card h-100 group">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <div class="position-absolute w-100 h-100 bg-dark opacity-50 z-1 project-overlay transition-smooth"></div>
                                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-100 h-100 object-fit-cover transition-smooth project-img" alt="Project 6">
                                <div class="position-absolute top-50 start-50 translate-middle z-2 project-btns text-center w-100">
                                    <a href="work-details.html" class="btn-custom btn-primary-custom mx-1 scale-0 transition-smooth btn-project btn-sm">Details</a>
                                    <a href="#" class="btn-custom btn-outline-custom mx-1 bg-dark bg-opacity-50 scale-0 transition-smooth btn-project btn-sm"><i class="ph-fill ph-github-logo"></i></a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5 class="text-white mb-2 project-title">Weather Data Microservice</h5>
                                <p class="small mb-3">High-performance API fetching and caching weather data.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-opacity-10 bg-success text-success border border-success border-opacity-25 tech-font">Node.js</span>
                                    <span class="badge bg-opacity-10 bg-light text-light border border-light border-opacity-25 tech-font">Redis</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

@push('js')

    <script>

        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectItems = document.querySelectorAll('.project-item');
            const searchInput = document.getElementById('search-projects');

            // Filtering
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove active class from all
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filterValue = btn.getAttribute('data-filter');

                    projectItems.forEach(item => {
                        const categories = item.getAttribute('data-category').split(' ');
                        
                        if (filterValue === 'all' || categories.includes(filterValue)) {
                            // Reset display for GSAP animation
                            item.style.display = 'block';
                            gsap.fromTo(item, { scale: 0.8, opacity: 0 }, { scale: 1, opacity: 1, duration: 0.5, ease: "back.out(1.5)" });
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Search
            if(searchInput) {
                searchInput.addEventListener('input', (e) => {
                    const term = e.target.value.toLowerCase();
                    
                    projectItems.forEach(item => {
                        const title = item.querySelector('.project-title').textContent.toLowerCase();
                        
                        if (title.includes(term)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                    
                    // Reset filter buttons when searching
                    filterBtns.forEach(b => b.classList.remove('active'));
                    document.querySelector('.filter-btn[data-filter="all"]').classList.add('active');
                });
            }
        });
        
    </script>
@endpush

@endsection