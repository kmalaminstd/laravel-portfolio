@extends('layouts/home-layout')

@section('content')

<x-home.page-header
    page_title="Selected work"
    page_description="Web applications, APIs, and digital solutions built to solve real problems."
/>

<section class="section-tight" style="padding-top: 0;">
    <div class="container-site">
        <div class="filter-bar gs_reveal_up">
            <button class="filter-btn active" data-filter="all" type="button">All</button>
            @foreach ($categories as $cat)
                <button class="filter-btn" data-filter="{{ $cat->slug }}" type="button">{{ $cat->name }}</button>
            @endforeach
        </div>

        <div class="projects-grid" id="projects-grid">
            @foreach ($projects as $project)
                <div class="project-item" data-category="{{ $project->category->slug ?? '' }}">
                    <x-home.project-card :project="$project" />
                </div>
            @endforeach
        </div>

        @if($projects->hasPages())
            <div style="margin-top: 3rem; display: flex; justify-content: center;">
                {{ $projects->links() }}
            </div>
        @endif
    </div>
</section>

@push('js')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filterValue = btn.getAttribute('data-filter');

            projectItems.forEach(item => {
                const cat = item.getAttribute('data-category') || '';
                if (filterValue === 'all' || cat === filterValue) {
                    item.style.display = '';
                    if (typeof gsap !== 'undefined') {
                        gsap.fromTo(item, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.45, ease: 'power2.out' });
                    }
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endpush

@endsection
