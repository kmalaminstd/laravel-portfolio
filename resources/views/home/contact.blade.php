@extends('layouts/home-layout')

@section('content')

<!-- Particles Background -->
        <div id="particles-js"></div>
        
        <!-- Header -->
        <section class="pt-5 mt-5 pb-4">
            <div class="container text-center pt-5">
                <h1 class="display-4 fw-bold gs_reveal">Get In <span class="text-gradient">Touch</span></h1>
                <p class="lead  max-w-2xl mx-auto gs_reveal_up">Have a project in mind or just want to say hi? I'd love to hear from you.</p>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="pb-5">
            <div class="container">
                <div class="row g-5 align-items-stretch">
                    
                    <!-- Contact Info -->
                    <div class="col-lg-5 gs_reveal_left">
                        <div class="glass-card p-4 p-md-5 h-100 neon-border d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-4 text-white">Contact Information</h3>
                                <p class=" mb-5">Fill out the form and I will get back to you within 24 hours.</p>
                                
                                <ul class="list-unstyled d-flex flex-column gap-4 mb-5">
                                    <li class="d-flex align-items-center gap-3 group">
                                        <div class="bg-card p-3 rounded-circle border border-secondary border-opacity-25 shadow-glow group-hover:border-cyan">
                                            <i class="ph-fill ph-envelope-simple text-gradient fs-3"></i>
                                        </div>
                                        <div>
                                            <span class="d-block  small">Email Address</span>
                                            <a href="mailto:hello@devalamin.com" class="text-white fw-medium text-decoration-none hover-cyan">hello@devalamin.com</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-3 group">
                                        <div class="bg-card p-3 rounded-circle border border-secondary border-opacity-25 shadow-glow group-hover:border-cyan">
                                            <i class="ph-fill ph-whatsapp-logo text-gradient fs-3"></i>
                                        </div>
                                        <div>
                                            <span class="d-block  small">WhatsApp</span>
                                            <a href="https://wa.me/1234567890" class="text-white fw-medium text-decoration-none hover-cyan">+880 1234 567 890</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-3 group">
                                        <div class="bg-card p-3 rounded-circle border border-secondary border-opacity-25 shadow-glow group-hover:border-cyan">
                                            <i class="ph-fill ph-map-pin text-gradient fs-3"></i>
                                        </div>
                                        <div>
                                            <span class="d-block  small">Location</span>
                                            <span class="text-white fw-medium">Dhaka, Bangladesh</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-4">
                                    <div class="spinner-grow text-success spinner-grow-sm" role="status"></div>
                                    <span class="text-white fw-medium">Available for freelance work</span>
                                </div>
                                <div class="d-flex gap-3">
                                    <a href="#" class="bg-card p-3 rounded-circle  fs-4 hover-cyan transition-smooth border border-secondary border-opacity-25"><i class="ph-fill ph-github-logo"></i></a>
                                    <a href="#" class="bg-card p-3 rounded-circle  fs-4 hover-cyan transition-smooth border border-secondary border-opacity-25"><i class="ph-fill ph-linkedin-logo"></i></a>
                                    <a href="#" class="bg-card p-3 rounded-circle  fs-4 hover-cyan transition-smooth border border-secondary border-opacity-25"><i class="ph-fill ph-twitter-logo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-7 gs_reveal_right">
                        <div class="glass-card p-4 p-md-5 h-100">
                            <form id="contactForm">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label  small">Your Name</label>
                                        <input type="text" class="form-control form-control-custom" placeholder="John Doe" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label  small">Your Email</label>
                                        <input type="email" class="form-control form-control-custom" placeholder="john@example.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label  small">Subject</label>
                                        <input type="text" class="form-control form-control-custom" placeholder="Project Inquiry" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label  small">Message</label>
                                        <textarea class="form-control form-control-custom" rows="5" placeholder="Tell me about your project..." required></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn-custom btn-primary-custom w-100 btn-lg" id="submitBtn">
                                            Send Message <i class="ph ph-paper-plane-tilt ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                
            </div>
        </section>

@endsection