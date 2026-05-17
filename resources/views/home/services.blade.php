@extends('layouts/home-layout')

@section('content')

        <section class="pt-5 pb-4">
            <div class="container text-center pt-5">
                <h1 class="display-4 fw-bold gs_reveal">My <span class="text-gradient">Services</span></h1>
                <p class="lead  max-w-2xl mx-auto gs_reveal_up">Delivering high-quality web solutions tailored to your business needs.</p>
            </div>
        </section>

        <!-- Services Grid -->
        <section class="pb-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient"><i class="ph-fill ph-browser fs-1"></i></div>
                            <h4 class="mb-3 text-white">Custom Web App</h4>
                            <p class="">Building bespoke, scalable, and secure web applications from scratch using modern technologies.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient"><i class="ph-fill ph-brackets-curly fs-1"></i></div>
                            <h4 class="mb-3 text-white">Laravel Development</h4>
                            <p class="">Expertise in developing robust backend systems, complex logic, and MVC architecture using Laravel.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient"><i class="ph-fill ph-plugs fs-1"></i></div>
                            <h4 class="mb-3 text-white">REST API Development</h4>
                            <p class="">Designing and building secure, fast, and documented APIs for mobile apps or third-party integrations.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient"><i class="ph-fill ph-layout fs-1"></i></div>
                            <h4 class="mb-3 text-white">Admin Dashboard</h4>
                            <p class="">Creating intuitive and powerful admin panels for managing your application's data effortlessly.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient"><i class="ph-fill ph-database fs-1"></i></div>
                            <h4 class="mb-3 text-white">Database Design</h4>
                            <p class="">Architecting efficient and normalized database structures to ensure data integrity and performance.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient"><i class="ph-fill ph-bug fs-1"></i></div>
                            <h4 class="mb-3 text-white">Bug Fixing & Maint.</h4>
                            <p class="">Identifying and resolving complex bugs, optimizing code, and providing ongoing support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA -->
        <section class="py-5 bg-darker">
            <div class="container text-center">
                <div class="glass-card p-5 neon-border gs_reveal_scale">
                    <h2 class="fw-bold mb-4">Need a custom solution?</h2>
                    <a href="contact.html" class="btn-custom btn-primary-custom btn-lg">Let's Talk <i class="ph ph-paper-plane-tilt ms-2"></i></a>
                </div>
            </div>
        </section>

@endsection