@props(["project"])

<article class="project-card" data-category="{{ $project->category->slug ?? '' }}">
    <div class="project-card-media">
        <a href="/project/{{ $project->id }}">
            @foreach ($project->projectMedia as $pm)
                @if ($pm->media->featured)
                    <img src="{{ asset('/storage/' . $pm->media->src) }}" alt="{{ $project->title }}" loading="lazy">
                @endif
            @endforeach
        </a>
    </div>
    <div class="project-card-body">
        <div class="project-techs">
            @foreach ($project->techStacks as $stack)
                <span class="tech-chip">{{ $stack->name }}</span>
            @endforeach
        </div>
        <h3 class="project-title">
            <a href="/project/{{ $project->id }}">{{ $project->title }}</a>
        </h3>
        <p class="project-summary">{{ $project->short_summary }}</p>
        <a href="/project/{{ $project->id }}" class="btn btn-outline btn-sm">View project <i class="ph ph-arrow-right"></i></a>
    </div>
</article>
