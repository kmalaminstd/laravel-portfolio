@extends('layouts/home-layout')

@section('content')
        
        <!-- Hero Section -->
        <section id="home" class="min-vh-100 d-flex align-items-center position-relative overflow-hidden">
            <!-- Background Glows -->
            <div class="position-absolute top-0 start-0 translate-middle w-50 h-50 bg-gradient-custom rounded-circle opacity-25" style="filter: blur(100px); z-index: -1;"></div>
            <div class="position-absolute bottom-0 end-0 translate-middle-x w-50 h-50 bg-gradient-custom rounded-circle opacity-25" style="filter: blur(100px); z-index: -1;"></div>

            <div class="container pt-5 mt-5">
                <div class="row align-items-center">
                    <div class="col-lg-7 z-1">
                        <div class="hero-content">
                            <span class="d-inline-block px-3 py-1 rounded-pill mb-3 tech-font fs-6" style="background: rgba(56, 189, 248, 0.1); color: var(--accent-cyan); border: 1px solid rgba(56, 189, 248, 0.2);">
                                Hey , 
                            </span>
                            <h1 class="display-3 fw-bold mb-3 hero-title">
                                I'm <span class="text-gradient">K.M. AL-AMIN</span><br>
                                <span class="hero-subtitle">PHP & Laravel Developer</span>
                            </h1>
                            <p class="lead mb-4 hero-desc pe-lg-5">
                                I build scalable, secure, and performant web applications. 
                                Transforming complex backend logic into seamless digital experiences.
                            </p>
                            <div class="d-flex gap-3 flex-wrap hero-btns">
                                <a href="#projects" class="btn-custom btn-primary-custom">View My Work <i class="ph ph-arrow-right ms-2"></i></a>
                                <a href="/contact" class="btn-custom btn-outline-custom">Contact Me</a>
                            </div>
                            
                            <div class="mt-5 pt-3 d-flex align-items-center gap-4 hero-socials">
                                @if ($myinfo?->github)                                    
                                    <a href="{{ $myinfo?->github }}" class="text-white fs-4 hover-cyan"><i class="ph-fill ph-github-logo"></i></a>
                                @endif
                                @if ($myinfo?->linkedin)                                    
                                    <a href="{{ $myinfo?->linkedin }}" class="text-white fs-4 hover-cyan"><i class="ph-fill ph-linkedin-logo"></i></a>
                                @endif
                                @if ($myinfo?->twitter)                                    
                                    <a href="{{ $myinfo?->twitter }}" class="text-white fs-4 hover-cyan"><i class="ph-fill ph-twitter-logo"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0 position-relative z-1">
                        <div class="hero-image-wrapper glass-card p-2 neon-border rounded-circle mx-auto" style="width: 350px; height: 350px;">
                            <img src="{{ asset('/storage/' . $myinfo?->media?->src) }}" alt="Developer" class="img-fluid rounded-circle w-100 h-100 object-fit-cover">
                        </div>
                        
                        <!-- Floating Tech Badges -->
                        <div class="position-absolute top-0 start-0 translate-middle p-3 glass-card rounded-3 floating-badge" style="animation: float 3s ease-in-out infinite;">
                            <i class="ph-fill ph-file-code fs-1 text-gradient"></i>
                        </div>
                        <div class="position-absolute bottom-0 end-0 translate-middle p-3 glass-card rounded-3 floating-badge" style="animation: float 4s ease-in-out infinite reverse;">
                            <i class="ph-fill ph-database fs-1 text-gradient"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section id="tech-stack" class="section-padding bg-darker overflow-hidden">
            <div class="container text-center">
                <h2 class="section-title mb-5 gs_reveal">My Tech Arsenal</h2>
                <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-4 mt-4 justify-content-center tech-cards-container">
                    <!-- Cards -->
                    @foreach ($techs as $tech)                        
                        <div class="col gs_reveal_scale">
                            <div class="glass-card p-4 text-center tech-card h-100 d-flex flex-column align-items-center justify-content-center">
                                <p class="fs-1 mb-2">
                                    {!! $tech->icon !!}
                                </p>
                                <h6 class="mb-0 tech-font fw-bold">{{ $tech->name }}</h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- About Me Section -->
        <section id="about" class="section-padding position-relative">
            <div class="position-absolute top-50 start-0 translate-middle-y w-50 h-50 bg-gradient-custom rounded-circle opacity-75" style="filter: blur(100px); z-index: -1;"></div>
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-12 offset-lg-1 gs_reveal_right">
                        <h2 class="section-title mb-4">About Me</h2>
                        <h4 class="fw-light mb-4">Passionate about backend logic and crafting robust digital solutions.</h4>
                        <p class="mb-4">
                            Hello! I'm K.M. AL-AMIN, a dedicated PHP and Laravel Developer with a strong foundation in full-stack web development. I specialize in building custom web applications, APIs, and scalable architectures that solve real-world problems.
                        </p>
                        <p class="mb-4">
                            My journey began with a curiosity for how websites work, which quickly evolved into a deep passion for writing clean, efficient, and maintainable code. I thrive on tackling complex backend challenges while ensuring the frontend remains intuitive and visually engaging.
                        </p>
                        
                        <div class="d-flex flex-wrap gap-4 mb-5">
                            <div>
                                <h5 class="text-white mb-1"><i class="ph-fill ph-check-circle text-accent-cyan me-2"></i>Clean Code</h5>
                                <p class="text-muted small">Maintainable architecture</p>
                            </div>
                            <div>
                                <h5 class="text-white mb-1"><i class="ph-fill ph-check-circle text-accent-indigo me-2"></i>Performance</h5>
                                <p class="text-muted small">Optimized solutions</p>
                            </div>
                        </div>

                        <a href="{{ asset('/storage/' . $myinfo?->resume) }}" download class="btn-custom btn-primary-custom">Download CV <i class="ph ph-download-simple ms-2"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="section-padding bg-darker">
            <div class="container">
                <div class="text-center mb-5 gs_reveal">
                    <h2 class="section-title">My Services</h2>
                    <p class="max-w-2xl mx-auto mt-3">Delivering high-quality web solutions tailored to your business needs.</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient">
                                <i class="ph-fill ph-browser fs-1"></i>
                            </div>
                            <h4 class="mb-3 text-white">Custom Web App</h4>
                            <p class="">Building bespoke, scalable, and secure web applications from scratch using modern technologies.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient">
                                <i class="ph-fill ph-brackets-curly fs-1"></i>
                            </div>
                            <h4 class="mb-3 text-white">Laravel Development</h4>
                            <p class="">Expertise in developing robust backend systems, complex logic, and MVC architecture using Laravel.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient">
                                <i class="ph-fill ph-plugs fs-1"></i>
                            </div>
                            <h4 class="mb-3 text-white">REST API Development</h4>
                            <p class="">Designing and building secure, fast, and documented APIs for mobile apps or third-party integrations.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient">
                                <i class="ph-fill ph-layout fs-1"></i>
                            </div>
                            <h4 class="mb-3 text-white">Admin Dashboard</h4>
                            <p class="">Creating intuitive and powerful admin panels for managing your application's data effortlessly.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient">
                                <i class="ph-fill ph-database fs-1"></i>
                            </div>
                            <h4 class="mb-3 text-white">Database Design</h4>
                            <p class="">Architecting efficient and normalized database structures to ensure data integrity and performance.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-5 h-100 neon-border">
                            <div class="mb-4 text-gradient">
                                <i class="ph-fill ph-bug fs-1"></i>
                            </div>
                            <h4 class="mb-3 text-white">Bug Fixing & Maint.</h4>
                            <p class="">Identifying and resolving complex bugs, optimizing code, and providing ongoing support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Projects Section -->
        <section id="projects" class="section-padding">
            <div class="container">
                <div class="d-flex justify-content-between align-items-end mb-5 gs_reveal">
                    <div>
                        <h2 class="section-title mb-0">Featured Projects</h2>
                        <p class="mt-3 mb-0">Some of my recent and impactful works.</p>
                    </div>
                    <a href="/projects" class="btn-custom btn-outline-custom d-none d-md-inline-flex">View All Works <i class="ph ph-arrow-right ms-2"></i></a>
                </div>

                <div class="row g-4">
                    <!-- Project 1 -->
                    @foreach ($projects as $project)                        
                        <div class="col-lg-6 gs_reveal_up">
                            <x-home.project-card :project="$project" />
                        </div>
                    @endforeach
 
                </div>
                
                <div class="text-center mt-5 d-md-none gs_reveal">
                    <a href="/projects" class="btn-custom btn-outline-custom">View All Works <i class="ph ph-arrow-right ms-2"></i></a>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <!-- <section class="py-5 position-relative border-top border-bottom" style="border-color: rgba(255,255,255,0.05) !important; background: linear-gradient(to right, rgba(15,23,42,0.9), rgba(30,41,59,0.9));">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-6 col-md-3 gs_reveal_scale">
                        <h2 class="display-4 fw-bold text-gradient counter" data-target="50">0</h2>
                        <p class="text-muted fw-medium text-uppercase tracking-wider small">Projects Done</p>
                    </div>
                    <div class="col-6 col-md-3 gs_reveal_scale" data-delay="0.1">
                        <h2 class="display-4 fw-bold text-gradient counter" data-target="40">0</h2>
                        <p class="text-muted fw-medium text-uppercase tracking-wider small">Happy Clients</p>
                    </div>
                    <div class="col-6 col-md-3 gs_reveal_scale" data-delay="0.2">
                        <h2 class="display-4 fw-bold text-gradient counter" data-target="5">0</h2>
                        <p class="text-muted fw-medium text-uppercase tracking-wider small">Years Exp.</p>
                    </div>
                    <div class="col-6 col-md-3 gs_reveal_scale" data-delay="0.3">
                        <h2 class="display-4 fw-bold text-gradient counter" data-target="15">0</h2>
                        <p class="text-muted fw-medium text-uppercase tracking-wider small">Technologies</p>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Journey & Timeline Section -->
        <section class="section-padding bg-darker">
            <div class="container">
                <div class="text-center mb-5 gs_reveal">
                    <h2 class="section-title">My Journey</h2>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-12 gs_reveal_up">
                        <div class="glass-card-non-bg p-4 p-md-5 neon-border position-relative overflow-hidden">
                            <!-- Background glow inside card -->
                            <div class="position-absolute top-0 end-0 translate-middle-y bg-gradient-custom opacity-10 rounded-circle" style="width: 300px; height: 300px; filter: blur(50px); z-index: 0;"></div>
                            
                            <div class="position-relative z-1 row g-4 align-items-center">
                                <!-- Left Column: Role & Company -->
                                <div class="col-lg-4 border-end border-secondary border-opacity-25 pe-lg-4">
                                    <h4 class="text-white fw-bold mb-2">Frontend Developer</h4>
                                    <h6 class="text-gradient mb-3">World Academy for Research & Development, UK</h6>
                                    <div class="d-inline-flex align-items-center bg-dark bg-opacity-50 px-3 py-2 rounded-pill tech-font small mb-4">
                                        <i class="ph-fill ph-calendar-blank text-accent-cyan me-2"></i> Apr 2025 - Present
                                    </div>
                                    
                                    <h6 class="text-white mb-3 small text-uppercase tracking-wider">Technologies</h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-opacity-10 bg-primary text-primary border border-primary border-opacity-25">HTML</span>
                                        <span class="badge bg-opacity-10 bg-info text-info border border-info border-opacity-25">CSS</span>
                                        <span class="badge bg-opacity-10 bg-primary text-primary border border-primary border-opacity-25">Bootstrap</span>
                                        <span class="badge bg-opacity-10 bg-warning text-warning border border-warning border-opacity-25">JavaScript</span>
                                        <span class="badge bg-opacity-10 bg-info text-info border border-info border-opacity-25">React.js</span>
                                        <span class="badge bg-opacity-10 bg-info text-info border border-info border-opacity-25">React Native</span>
                                        <span class="badge bg-opacity-10 bg-success text-success border border-success border-opacity-25">Node.js</span>
                                        <span class="badge bg-opacity-10 bg-secondary text-light border border-secondary border-opacity-25">Express.js</span>
                                        <span class="badge bg-opacity-10 bg-primary text-primary border border-primary border-opacity-25">MySQL</span>
                                        <span class="badge bg-opacity-10 bg-light text-light border border-light border-opacity-25">Expo</span>
                                    </div>
                                </div>
                                
                                <!-- Right Column: Responsibilities -->
                                <div class="col-lg-8 ps-lg-4">
                                    <h6 class="text-white mb-3 small text-uppercase tracking-wider">Key Responsibilities & Achievements</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-3 d-flex gap-3">
                                            <i class="ph-fill ph-caret-right text-accent-cyan mt-1"></i>
                                            <span>Redesigned and developed responsive websites using HTML, CSS, Bootstrap, and JavaScript for improved user experience.</span>
                                        </li>
                                        <li class="mb-3 d-flex gap-3">
                                            <i class="ph-fill ph-caret-right text-accent-cyan mt-1"></i>
                                            <span>Developed a cross-platform Android application with React Native (Expo) to support student engagement and internal workflows.</span>
                                        </li>
                                        <li class="mb-3 d-flex gap-3">
                                            <i class="ph-fill ph-caret-right text-accent-cyan mt-1"></i>
                                            <span>Built API-driven systems using Node.js (Express.js) and MySQL for efficient data management and integration.</span>
                                        </li>
                                        <li class="d-flex gap-3">
                                            <i class="ph-fill ph-caret-right text-accent-cyan mt-1"></i>
                                            <span>Designed and implemented modern, dynamic frontend interfaces in React.js to consume APIs and deliver seamless user experiences.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <!-- <section class="section-padding overflow-hidden">
            <div class="container">
                <div class="text-center mb-5 gs_reveal">
                    <h2 class="section-title">Client Feedback</h2>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 gs_reveal_up">
                        <div class="glass-card p-4 text-center h-100 position-relative mt-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Client" class="rounded-circle border border-3 border-info position-absolute top-0 start-50 translate-middle shadow-glow" style="width: 80px; height: 80px; object-fit: cover;">
                            <div class="mt-4 pt-3">
                                <i class="ph-fill ph-quotes text-gradient fs-1 opacity-50 mb-3 d-inline-block"></i>
                                <p class="text-muted fst-italic">"Al-Amin is an exceptional Laravel developer. He completely revamped our backend architecture, improving load times by 40%. Highly recommended!"</p>
                                <h6 class="text-white mb-0 mt-4">David Smith</h6>
                                <span class="text-gradient small tech-font">CEO, TechNova</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 gs_reveal_up" data-delay="0.2">
                        <div class="glass-card p-4 text-center h-100 position-relative mt-4">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Client" class="rounded-circle border border-3 border-info position-absolute top-0 start-50 translate-middle shadow-glow" style="width: 80px; height: 80px; object-fit: cover;">
                            <div class="mt-4 pt-3">
                                <i class="ph-fill ph-quotes text-gradient fs-1 opacity-50 mb-3 d-inline-block"></i>
                                <p class="text-muted fst-italic">"Delivered our complex multi-vendor e-commerce platform ahead of schedule. The code quality is top-notch and communication was flawless."</p>
                                <h6 class="text-white mb-0 mt-4">Sarah Jenkins</h6>
                                <span class="text-gradient small tech-font">Founder, ShopEase</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- CTA Section -->
        <section class="py-5 bg-darker position-relative overflow-hidden">
            <div class="position-absolute top-50 start-50 translate-middle w-100 h-100 bg-gradient-custom opacity-10" style="filter: blur(150px); z-index: 1;"></div>
            <div class="container position-relative z-2">
                <div class="glass-card p-5 text-center neon-border gs_reveal_scale">
                    <h2 class="display-5 fw-bold mb-4">Have an idea in mind?</h2>
                    <p class="lead mb-5 max-w-2xl mx-auto">Let's collaborate and turn your vision into a stunning digital reality. I am currently available for freelance work.</p>
                    <a href="/contact" class="btn-custom btn-primary-custom btn-lg fs-5 px-5">Let's Talk <i class="ph ph-paper-plane-tilt ms-2"></i></a>
                </div>
            </div>
        </section>

@endsection