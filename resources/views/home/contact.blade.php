@extends('layouts/home-layout')

@section('content')

<section class="contact-hero">
    <div class="container-site">
        <p class="eyebrow gs_reveal">Contact</p>
        <h1 class="gs_reveal">Let's build something <em>solid</em>.</h1>
    </div>
</section>

<section>
    <div class="container-site">
        <div class="contact-layout">
            <div class="contact-info gs_reveal_left">
                <p class="lead">Have a project in mind or want to talk through an idea? Send a message — I usually reply within a day.</p>

                <div class="contact-channels">
                    @if($myinfo?->email)
                    <div class="contact-channel">
                        <div class="label">Email</div>
                        <a href="mailto:{{ $myinfo->email }}">{{ $myinfo->email }}</a>
                    </div>
                    @endif
                    @if($myinfo?->whatsapp)
                    <div class="contact-channel">
                        <div class="label">WhatsApp</div>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $myinfo->whatsapp) }}" target="_blank" rel="noopener">{{ $myinfo->whatsapp }}</a>
                    </div>
                    @endif
                    <div class="contact-channel">
                        <div class="label">Location</div>
                        <div class="value">{{ $myinfo?->location ?? 'Dhaka, Bangladesh' }}</div>
                    </div>
                </div>

                <div class="avail-pill" style="margin-bottom: 1.5rem;">
                    <span class="dot"></span> Open to new projects
                </div>

                <div class="contact-socials">
                    @if ($myinfo?->github)
                        <a href="{{ $myinfo->github }}" target="_blank" rel="noopener" aria-label="GitHub"><i class="ph-fill ph-github-logo"></i></a>
                    @endif
                    @if ($myinfo?->linkedin)
                        <a href="{{ $myinfo->linkedin }}" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="ph-fill ph-linkedin-logo"></i></a>
                    @endif
                    @if ($myinfo?->twitter)
                        <a href="{{ $myinfo->twitter }}" target="_blank" rel="noopener" aria-label="Twitter"><i class="ph-fill ph-twitter-logo"></i></a>
                    @endif
                </div>
            </div>

            <div class="contact-form gs_reveal_right">
                <form action="/contact" method="POST">
                    @csrf
                    @if ($errors->any())
                        <ul style="color: var(--accent); margin-bottom: 1rem; font-size: 0.9rem;">
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-row">
                        <div class="form-group" style="margin-bottom:0;">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control-custom" placeholder="Your name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group" style="margin-bottom:0;">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control-custom" placeholder="you@example.com" required value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control-custom" placeholder="Project inquiry" required value="{{ old('subject') }}">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control-custom" rows="5" placeholder="Tell me about the project, timeline, and goals..." required>{{ old('message') }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="cf-turnstile" data-sitekey="0x4AAAAAAFWtUt4NrIrJzKuP"></div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">
                            Send message <i class="ph ph-paper-plane-tilt"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
