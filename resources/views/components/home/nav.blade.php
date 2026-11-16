<nav class="site-nav" id="navbar">
    <div class="nav-inner">
        <a class="nav-logo" href="/">
            K.M.<span>ALAMIN</span>
        </a>

        <div class="nav-links">
            <a href="/" @class(['active' => request()->is('/')])>Home</a>
            <a href="{{ url('/#about') }}">About</a>
            <a href="/projects" @class(['active' => request()->is('projects') || request()->is('project/*')])>Work</a>
            <a href="/contact" @class(['active' => request()->is('contact')])>Contact</a>
        </div>

        @if($myinfo?->resume)
        <a href="{{ asset('/storage/'. $myinfo?->resume) }}" download class="nav-cta">Resume</a>
        @endif

        <button class="nav-toggle" id="navToggle" aria-label="Menu" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <div class="nav-mobile" id="navMobile">
        <a href="/">Home</a>
        <a href="{{ url('/#about') }}">About</a>
        <a href="/projects">Work</a>
        <a href="/contact">Contact</a>
        @if($myinfo?->resume)
        <a href="{{ asset('/storage/'. $myinfo?->resume) }}" download class="nav-cta">Resume</a>
        @endif
    </div>
</nav>
