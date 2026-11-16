<footer class="site-footer">
    <div class="container-site">
        <div class="footer-top">
            <div>
                <div class="footer-brand">K.M.<span>ALAMIN</span></div>
                <p>PHP & Laravel developer building practical web applications and robust backend systems.</p>
                <div class="footer-socials">
                    @if ($myinfo?->github)
                        <a href="{{ $myinfo?->github }}" target="_blank" rel="noopener" aria-label="GitHub"><i class="ph-fill ph-github-logo"></i></a>
                    @endif
                    @if ($myinfo?->linkedin)
                        <a href="{{ $myinfo?->linkedin }}" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="ph-fill ph-linkedin-logo"></i></a>
                    @endif
                    @if ($myinfo?->twitter)
                        <a href="{{ $myinfo?->twitter }}" target="_blank" rel="noopener" aria-label="Twitter"><i class="ph-fill ph-twitter-logo"></i></a>
                    @endif
                    @if ($myinfo?->email)
                        <a href="mailto:{{ $myinfo?->email }}" aria-label="Email"><i class="ph-fill ph-envelope"></i></a>
                    @endif
                </div>
            </div>
            <div class="footer-col">
                <h5>Navigate</h5>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ url('/#about') }}">About</a></li>
                    <li><a href="/projects">Work</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Focus</h5>
                <ul>
                    <li><a href="/projects">Web Applications</a></li>
                    <li><a href="/projects">Laravel Backend</a></li>
                    <li><a href="/projects">API Design</a></li>
                    <li><a href="/projects">Admin Systems</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Contact</h5>
                <ul>
                    <li>
                        @if($myinfo?->location)
                            <span style="color:rgba(255,255,255,0.55);font-size:0.9rem;">{{ $myinfo->location }}</span>
                        @else
                            <span style="color:rgba(255,255,255,0.55);font-size:0.9rem;">Dhaka, Bangladesh</span>
                        @endif
                    </li>
                    <li>
                        @if($myinfo?->email)
                            <a href="mailto:{{ $myinfo->email }}">{{ $myinfo->email }}</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ now()->year }} K.M. AL-AMIN. All rights reserved.</p>
            <p>Built with care — Laravel & craft.</p>
        </div>
    </div>
</footer>
