@extends('layouts/home-layout')

@section('content')

<section class="project-detail-hero">
    @foreach ($project?->projectMedia as $pm)
        @if($pm?->media?->featured)
            <img src="{{ asset('/storage/' . $pm->media->src) }}" alt="{{ $project->title }}">
        @endif
    @endforeach
    <div class="overlay-content">
        <a href="/projects" class="back-link"><i class="ph ph-arrow-left"></i> Back to work</a>
        <h1>{{ $project?->title }}</h1>
        <div class="project-techs">
            @foreach ($project?->techStacks as $tech)
                <span class="tech-chip" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff;">{{ $tech->name }}</span>
            @endforeach
        </div>
    </div>
</section>

<section class="project-detail-body">
    <div class="container-site">
        <div class="detail-grid">
            <div class="detail-content">
                <div class="gs_reveal_up">
                    <h3>Overview</h3>
                    <div class="prose">
                        {!! $project?->description !!}
                    </div>
                </div>

                @php
                    $gallery = $project->projectMedia->filter(fn($pm) => !$pm->media->featured);
                @endphp
                @if($gallery->count())
                <div class="gs_reveal_up">
                    <h3 style="margin-top: 2.5rem;">Screenshots</h3>
                    <div class="gallery-grid">
                        @foreach ($gallery as $pm)
                            <img src="{{ asset('/storage/' . $pm->media->src) }}"
                                 alt="Screenshot"
                                 class="gallery-img"
                                 data-full="{{ asset('/storage/' . $pm->media->src) }}"
                                 loading="lazy">
                        @endforeach
                    </div>
                </div>
                @endif

                @if($project?->process?->count())
                <div class="gs_reveal_up" style="margin-top: 2rem;">
                    <h3>Development process</h3>
                    <ul class="process-list">
                        @foreach ($project->process as $process)
                            <li>
                                <i class="ph-fill ph-check-circle"></i>
                                <span><strong>{{ $process->name }}</strong> — {{ $process->description }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if($project?->challenge?->description)
                <div class="gs_reveal_up" style="margin-top: 2rem;">
                    <h3>Challenges</h3>
                    <p class="prose">{{ $project->challenge->description }}</p>
                </div>
                @endif
            </div>

            <aside class="detail-sidebar">
                <div class="detail-panel gs_reveal_right">
                    <h5>Project details</h5>
                    @if($project?->client)
                    <div class="detail-meta-row">
                        <span class="label">Client</span>
                        <span class="value">{{ $project->client }}</span>
                    </div>
                    @endif
                    @if($project?->role)
                    <div class="detail-meta-row">
                        <span class="label">Role</span>
                        <span class="value">{{ $project->role }}</span>
                    </div>
                    @endif
                    @if($project?->timeline)
                    <div class="detail-meta-row">
                        <span class="label">Timeline</span>
                        <span class="value">{{ $project->timeline }}</span>
                    </div>
                    @endif
                    @if($project?->category)
                    <div class="detail-meta-row">
                        <span class="label">Category</span>
                        <span class="value">{{ $project->category->name }}</span>
                    </div>
                    @endif
                </div>

                <div class="detail-panel gs_reveal_right">
                    <h5>Links</h5>
                    <div style="display:flex;flex-direction:column;gap:0.75rem;">
                        @if($project?->live_link)
                            <a href="{{ $project->live_link }}" target="_blank" rel="noopener" class="btn btn-primary btn-sm" style="justify-content:center;">Live site <i class="ph ph-arrow-up-right"></i></a>
                        @endif
                        @if($project?->github_link)
                            <a href="{{ $project->github_link }}" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="justify-content:center;">GitHub <i class="ph ph-github-logo"></i></a>
                        @endif
                        <a href="/projects" class="btn btn-outline btn-sm" style="justify-content:center;">All projects</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- Lightweight lightbox --}}
<div id="lightbox" style="display:none;position:fixed;inset:0;z-index:10000;background:rgba(0,0,0,0.9);align-items:center;justify-content:center;padding:2rem;cursor:zoom-out;">
    <img id="lightboxImg" src="" alt="" style="max-width:100%;max-height:90vh;object-fit:contain;">
</div>

@push('js')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const lb = document.getElementById('lightbox');
    const lbImg = document.getElementById('lightboxImg');
    document.querySelectorAll('.gallery-img').forEach(img => {
        img.style.cursor = 'zoom-in';
        img.addEventListener('click', () => {
            lbImg.src = img.dataset.full || img.src;
            lb.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });
    lb.addEventListener('click', () => {
        lb.style.display = 'none';
        document.body.style.overflow = '';
    });
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && lb.style.display === 'flex') {
            lb.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
});
</script>
@endpush

@endsection
