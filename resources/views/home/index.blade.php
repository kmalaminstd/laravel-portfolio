@extends('layouts/home-layout')

@section('content')

{{-- ============ HERO ============ --}}
<section class="hero" id="home">
    <div class="container-site">
        @if($myinfo?->media?->src)
        <div class="hero-visual gs_reveal_scale">
            <div class="hero-visual-frame"></div>
            <img src="{{ asset('/storage/' . $myinfo->media->src) }}" alt="K.M. AL-AMIN">
        </div>
        @endif

        <div class="hero-meta gs_reveal">
            <span><strong>Based in</strong> {{ $myinfo?->location ?? 'Dhaka, Bangladesh' }}</span>
            <span class="avail-pill"><span class="dot"></span> Available for work</span>
            <span><strong>Role</strong> PHP & Laravel Developer</span>
        </div>

        <h1 class="hero-title gs_reveal">
            K.M. <em>AL-AMIN</em>
        </h1>

        <p class="hero-lead gs_reveal_up">
            I build scalable, secure web applications — transforming complex backend logic into seamless digital experiences.
        </p>

        <div class="hero-actions gs_reveal_up">
            <a href="#projects" class="btn btn-primary">View selected work <i class="ph ph-arrow-down"></i></a>
            <a href="/contact" class="btn btn-outline">Start a conversation</a>
        </div>
    </div>
</section>

{{-- ============ ABOUT ============ --}}
<section class="section" id="about">
    <div class="container-site">
        <div class="section-head">
            <div>
                <p class="eyebrow gs_reveal">About</p>
                <h2 class="section-title gs_reveal">How I <em>think</em> & build</h2>
            </div>
            <p class="section-desc gs_reveal_up">Practical systems. Clean architecture. Long-term maintainability.</p>
        </div>

        <div class="about-grid">
            <div class="about-statement gs_reveal_left">
                I approach every project as a systems problem first — then as a product people will actually use.
            </div>
            <div class="about-body gs_reveal_right">
                <p>
                    Hello — I'm K.M. AL-AMIN, a PHP and Laravel developer focused on custom web applications, APIs, and scalable backends. I care about writing code that is clear, efficient, and maintainable.
                </p>
                <p>
                    My work sits at the intersection of solid engineering and thoughtful product decisions: modeling data correctly, designing APIs that other developers enjoy using, and shipping features that hold up under real traffic.
                </p>
                <div class="about-meta">
                    <div class="about-meta-item">
                        <div class="label">Primary stack</div>
                        <div class="value">PHP · Laravel · MySQL</div>
                    </div>
                    <div class="about-meta-item">
                        <div class="label">Supporting</div>
                        <div class="value">JavaScript · Blade · APIs</div>
                    </div>
                    <div class="about-meta-item">
                        <div class="label">Secondary</div>
                        <div class="value">React · Node · Express</div>
                    </div>
                    <div class="about-meta-item">
                        <div class="label">Focus</div>
                        <div class="value">Backend systems & web apps</div>
                    </div>
                </div>
                @if($myinfo?->resume)
                <div style="margin-top: 2rem;">
                    <a href="{{ asset('/storage/' . $myinfo->resume) }}" download class="btn btn-primary">Download CV <i class="ph ph-download-simple"></i></a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- ============ JOURNEY ============ --}}
<section class="section" style="background: var(--surface);">
    <div class="container-site">
        <div class="section-head">
            <div>
                <p class="eyebrow gs_reveal">Experience</p>
                <h2 class="section-title gs_reveal">Current <em>role</em></h2>
            </div>
        </div>

        <div class="journey-block gs_reveal_up">
            <div class="journey-side">
                <div class="role">Web Designer</div>
                <div class="company">World Academy for Research & Development</div>
                <div class="period"><i class="ph ph-calendar-blank"></i> Apr 2025 — Present</div>
                <div class="journey-tech">
                    <span class="tech-chip">HTML</span>
                    <span class="tech-chip">CSS</span>
                    <span class="tech-chip">Bootstrap</span>
                    <span class="tech-chip">JavaScript</span>
                    <span class="tech-chip">PHP</span>
                    <span class="tech-chip">MySQL</span>
                    <span class="tech-chip">Laravel</span>
                </div>
            </div>
            <div>
                <p class="eyebrow" style="margin-bottom: 1rem;">Responsibilities & outcomes</p>
                <ul class="journey-list">
                    <li>Redesigned and developed responsive websites using HTML, CSS, Bootstrap, and JavaScript for improved user experience.</li>
                    <li>Developed a cross-platform Android application with React Native (Expo) to support student engagement and internal workflows.</li>
                    <li>Developed and maintained dynamic web applications using PHP, Laravel, Blade, and MySQL to support academic and administrative operations.</li>
                    <li>Built and integrated RESTful APIs for a blog platform, enabling efficient content management and seamless frontend–backend communication.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ============ SKILLS ============ --}}
<section class="section" id="tech-stack">
    <div class="container-site">
        <div class="skills-layout">
            <div class="skills-intro">
                <p class="eyebrow gs_reveal">Capabilities</p>
                <h2 class="section-title gs_reveal">Tools I <em>reach for</em></h2>
                <p class="gs_reveal_up">Primary focus on PHP and Laravel. JavaScript supports the frontend layer. React, Node, and Express when the problem calls for them.</p>
            </div>
            <div class="skill-groups">
                <div class="gs_reveal_up">
                    <div class="skill-group-label">Core — PHP & Backend</div>
                    <div class="skill-tags">
                        <span class="skill-tag primary">PHP</span>
                        <span class="skill-tag primary">Laravel</span>
                        <span class="skill-tag primary">MySQL</span>
                        <span class="skill-tag">Blade</span>
                        <span class="skill-tag">REST APIs</span>
                        <span class="skill-tag">Eloquent</span>
                    </div>
                </div>
                <div class="gs_reveal_up">
                    <div class="skill-group-label">Supporting — JavaScript & Frontend</div>
                    <div class="skill-tags">
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">HTML / CSS</span>
                        <span class="skill-tag">Bootstrap</span>
                        <span class="skill-tag">Tailwind</span>
                    </div>
                </div>
                <div class="gs_reveal_up">
                    <div class="skill-group-label">Secondary</div>
                    <div class="skill-tags">
                        <span class="skill-tag">React.js</span>
                        <span class="skill-tag">Node.js</span>
                        <span class="skill-tag">Express.js</span>
                    </div>
                </div>
                @if(isset($techs) && $techs->count())
                <div class="gs_reveal_up">
                    <div class="skill-group-label">From the stack</div>
                    <div class="skill-tags">
                        @foreach($techs as $tech)
                            <span class="skill-tag">{{ $tech->name }}</span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- ============ FEATURED PROJECTS ============ --}}
<section class="section" id="projects" style="background: var(--surface);">
    <div class="container-site">
        <div class="section-head">
            <div>
                <p class="eyebrow gs_reveal">Selected work</p>
                <h2 class="section-title gs_reveal">Featured <em>projects</em></h2>
            </div>
            <a href="/projects" class="btn btn-outline btn-sm gs_reveal">All projects <i class="ph ph-arrow-right"></i></a>
        </div>

        <div class="project-showcase">
            @foreach ($projects as $index => $project)
            <article class="project-row {{ $index % 2 === 1 ? 'reverse' : '' }} gs_reveal_up">
                <div class="project-media">
                    <a href="/project/{{ $project->id }}" class="project-media-link" aria-label="View {{ $project->title }}"></a>
                    @foreach ($project->projectMedia as $pm)
                        @if ($pm->media->featured)
                            <img src="{{ asset('/storage/' . $pm->media->src) }}" alt="{{ $project->title }}" loading="lazy">
                        @endif
                    @endforeach
                </div>
                <div class="project-info">
                    <div class="project-index">0{{ $index + 1 }}</div>
                    <h3 class="project-title">
                        <a href="/project/{{ $project->id }}">{{ $project->title }}</a>
                    </h3>
                    <p class="project-summary">{{ $project->short_summary }}</p>
                    <div class="project-techs">
                        @foreach ($project->techStacks as $stack)
                            <span class="tech-chip">{{ $stack->name }}</span>
                        @endforeach
                    </div>
                    <div class="project-links">
                        <a href="/project/{{ $project->id }}" class="btn btn-primary btn-sm">Case study</a>
                        @if ($project->live_link)
                            <a href="{{ $project->live_link }}" target="_blank" rel="noopener" class="btn btn-outline btn-sm">Live site <i class="ph ph-arrow-up-right"></i></a>
                        @endif
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <div style="margin-top: 3.5rem; text-align: center;" class="gs_reveal">
            <a href="/projects" class="btn btn-outline">Browse full archive <i class="ph ph-arrow-right"></i></a>
        </div>
    </div>
</section>

{{-- ============ SERVICES / WHAT I DO ============ --}}
<section class="section" id="services">
    <div class="container-site">
        <div class="section-head">
            <div>
                <p class="eyebrow gs_reveal">Services</p>
                <h2 class="section-title gs_reveal">What I can <em>build</em> for you</h2>
            </div>
        </div>

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
    </div>
</section>

{{-- ============ CTA / CONTACT TEASER ============ --}}
<section class="section" style="background: var(--bg-dark); color: #fff;">
    <div class="container-site" style="text-align: center; max-width: 720px;">
        <p class="eyebrow gs_reveal" style="color: rgba(255,255,255,0.45);">Next step</p>
        <h2 class="section-title gs_reveal" style="color: #fff; margin-bottom: 1.25rem;">
            Have a project in <em style="color: var(--accent);">mind</em>?
        </h2>
        <p class="gs_reveal_up" style="color: rgba(255,255,255,0.6); margin-bottom: 2rem; font-size: 1.05rem;">
            Tell me what you're building. I'll respond within a day with thoughts on approach and timeline.
        </p>
        <a href="/contact" class="btn btn-accent gs_reveal_up">Get in touch <i class="ph ph-arrow-right"></i></a>
    </div>
</section>

@endsection
