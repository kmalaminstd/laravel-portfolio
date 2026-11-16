@extends('layouts/home-layout')

@section('content')

<section class="page-header">
    <div class="container-site">
        <p class="eyebrow gs_reveal">Services</p>
        <h1 class="gs_reveal">What I can <em>build</em></h1>
        <p class="gs_reveal_up">Practical web solutions focused on Laravel backends, custom applications, and maintainable systems.</p>
    </div>
</section>

<section class="section-tight" style="padding-top:0;">
    <div class="container-site">
        <div class="services-list">
            <div class="service-item gs_reveal_up">
                <div class="service-num">01</div>
                <h3>Custom Web Applications</h3>
                <p>Bespoke, scalable applications from the ground up — modeled around your workflows and data.</p>
            </div>
            <div class="service-item gs_reveal_up">
                <div class="service-num">02</div>
                <h3>Laravel Development</h3>
                <p>Robust backend systems, complex domain logic, and clean MVC architecture with Laravel.</p>
            </div>
            <div class="service-item gs_reveal_up">
                <div class="service-num">03</div>
                <h3>Admin Dashboards</h3>
                <p>Intuitive panels for managing content, users, and operations without friction.</p>
            </div>
            <div class="service-item gs_reveal_up">
                <div class="service-num">04</div>
                <h3>Database Design</h3>
                <p>Normalized, efficient schemas that protect integrity and perform under load.</p>
            </div>
            <div class="service-item gs_reveal_up">
                <div class="service-num">05</div>
                <h3>API Design & Integration</h3>
                <p>Secure, documented REST APIs for mobile apps, third parties, and internal services.</p>
            </div>
            <div class="service-item gs_reveal_up">
                <div class="service-num">06</div>
                <h3>Maintenance & Optimization</h3>
                <p>Bug fixes, performance work, and ongoing support so systems stay healthy.</p>
            </div>
        </div>

        <div style="margin-top: 4rem; text-align: center;" class="gs_reveal">
            <p class="eyebrow" style="margin-bottom: 1rem;">Ready when you are</p>
            <h2 class="section-title" style="margin-bottom: 1.5rem;">Let's talk about your next project</h2>
            <a href="/contact" class="btn btn-primary">Get in touch <i class="ph ph-arrow-right"></i></a>
        </div>
    </div>
</section>

@endsection
