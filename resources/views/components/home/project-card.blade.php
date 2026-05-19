@props(["project"])

<div class="glass-card overflow-hidden project-card h-100 group">
    <div class="position-relative overflow-hidden" style="height: 300px;">
        <div class="position-absolute w-100 h-100 bg-dark opacity-50 z-1 project-overlay transition-smooth"></div>
        @foreach ($project->projectMedia as $pm)

        @if ($pm->media->featured)
        <img src="{{ asset('/storage/' . $pm->media->src ) }}"
            class="w-100 h-100 object-fit-cover transition-smooth project-img" alt="Project 1">
        @endif
        @endforeach
        <div class="position-absolute top-50 start-50 translate-middle z-2 project-btns text-center w-100">
            <a href="/project/{{ $project->id }}"
                class="btn-custom btn-primary-custom mx-1 scale-0 transition-smooth btn-project">Details</a>
            @if ($project->live_link)
            <a href="{{ $project->live_link }}"
                class="btn-custom btn-outline-custom mx-1 bg-dark bg-opacity-50 scale-0 transition-smooth btn-project">Live</a>
            @endif
        </div>
    </div>
    <div class="p-4">
        <div class="d-flex gap-2 mb-3">
            @foreach ($project->techStacks as $stack)
            <span
                class="badge bg-opacity-10 bg-primary text-primary border border-primary border-opacity-25 tech-font">{{ $stack->name }}</span>
            @endforeach
        </div>
        <h4 class="text-white mb-2">{{ $project->title }}</h4>
        <p class="mb-0">{{ $project->short_summary }}</p>
    </div>
</div>
