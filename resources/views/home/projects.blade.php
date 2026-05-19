@extends('layouts/home-layout')

@section('content')

    <x-home.page-header page_title="My Work" page_description="A collection of web applications, APIs, and digital solutions I've built to solve complex problems." />

        <!-- Projects Grid Section -->
        <section class="pb-5 mb-5">
            <div class="container">
                <!-- Search & Filters -->
                <div class="row mb-5 align-items-center gs_reveal_up" data-delay="0.2">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <div class="d-flex flex-wrap gap-2" id="filter-container">
                            <button class="btn btn-outline-custom rounded-pill filter-btn active" data-filter="all">All</button>
                            @foreach ($categories as $cat)                                
                                <button class="btn btn-outline-custom rounded-pill filter-btn" data-filter="{{ $cat->slug }}">{{ $cat->name }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Grid -->
                <div class="row g-4" id="projects-grid">
                    <!-- Project 1 -->
                    @foreach ($projects as $project)                        
                        <div class="col-md-6 col-lg-4 project-item gs_reveal_up" data-category="{{ $project->category->slug }}">
                            <x-home.project-card :project="$project" />
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

@push('js')

    <script>

        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectItems = document.querySelectorAll('.project-item');
            const searchInput = document.getElementById('search-projects');

            // Filtering
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove active class from all
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filterValue = btn.getAttribute('data-filter');

                    projectItems.forEach(item => {
                        const categories = item.getAttribute('data-category').split(' ');
                        
                        if (filterValue === 'all' || categories.includes(filterValue)) {
                            // Reset display for GSAP animation
                            item.style.display = 'block';
                            gsap.fromTo(item, { scale: 0.8, opacity: 0 }, { scale: 1, opacity: 1, duration: 0.5, ease: "back.out(1.5)" });
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Search
            if(searchInput) {
                searchInput.addEventListener('input', (e) => {
                    const term = e.target.value.toLowerCase();
                    
                    projectItems.forEach(item => {
                        const title = item.querySelector('.project-title').textContent.toLowerCase();
                        
                        if (title.includes(term)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                    
                    // Reset filter buttons when searching
                    filterBtns.forEach(b => b.classList.remove('active'));
                    document.querySelector('.filter-btn[data-filter="all"]').classList.add('active');
                });
            }
        });
        
    </script>
@endpush

@endsection