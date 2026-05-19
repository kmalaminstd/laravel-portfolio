@extends('layouts/home-layout')

@section('content')

    <!-- Hero Banner -->
        <section class="position-relative overflow-hidden mb-5">
            <div class="container-fluid px-0">
                <div class="position-relative" style="height: 60vh; min-height: 400px;">
                    <div class="position-absolute w-100 h-100 bg-dark opacity-75 z-1"></div>
                    @foreach ($project->projectMedia as $pm)
                        @if($pm->media->featured)
                            <img src="{{ asset('/storage/' . $pm->media->src) }}" alt="Hero Banner" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0">
                        @endif
                    @endforeach
                    <div class="container h-100 position-relative z-2 d-flex align-items-center">
                        <div class="w-100">
                            <a href="/projects" class=" hover-cyan mb-3 d-inline-flex align-items-center gs_reveal_right"><i class="ph ph-arrow-left me-2"></i> Back to Works</a>
                            <h1 class="display-4 fw-bold text-white mb-3 gs_reveal">{{$project->title}}</h1>
                            <div class="d-flex gap-3 flex-wrap gs_reveal_up">
                                @foreach ($project->techStacks as $tech)                                    
                                    <span class="badge bg-opacity-10 bg-warning text-warning border border-warning border-opacity-25 tech-font fs-6 py-2 px-3">{{ $tech->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5">
            <div class="container">
                <div class="row g-5">
                    <!-- Main Content (Left) -->
                    <div class="col-lg-8">
                        <div class="glass-card p-4 p-md-5 mb-5 neon-border gs_reveal_up">
                            <h3 class="fw-bold mb-4">Project Overview</h3>
                            {!! $project->description !!}
                        </div>

                        <!-- Screenshots Gallery -->
                        <div class="mb-5">
                            <h3 class="fw-bold mb-4 gs_reveal">Screenshots</h3>                                
                            
                            <div class="row g-4">

                                @foreach ($project->projectMedia as $pm)
                                    @if (!$pm->media->featured)                                        
                                        <div class="col-md-6 gs_reveal_up">
                                            <div class="overflow-hidden rounded-3 border border-secondary border-opacity-25">
                                                <img src="{{ asset('/storage/' . $pm->media->src) }}" alt="Dashboard" class="img-fluid gallery-img" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="document.getElementById('modalImage').src=this.src">
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                                
                            </div>

                        </div>

                        <!-- Dev Process -->
                        <div class="glass-card p-4 p-md-5 mb-5 gs_reveal_up">
                            <h3 class="fw-bold mb-4">Development Process</h3>
                            <ul class="list-unstyled">
                                @foreach ($project->process as $process)                                    
                                    <li class="mb-3 d-flex gap-3">
                                        <i class="ph-fill ph-check-circle text-accent-cyan mt-1 fs-5"></i>
                                        <span><strong>{{ $process->name }}</strong> {{ $process->description }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <h4 class="fw-bold mt-5 mb-3 text-white">Challenges Faced</h4>
                            <p class="">
                                {{-- {{ dd($process->challenge) }} --}}
                                {{ $project->challenge->description }}
                            </p>
                        </div>
                        
                    </div>

                    <!-- Sidebar (Right) -->
                    <div class="col-lg-4">
                        <div class="position-sticky" style="top: 100px;">
                            <div class="glass-card p-4 mb-4 neon-border gs_reveal_right">
                                <h5 class="fw-bold mb-4 text-white">Project Details</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3 border-bottom border-secondary border-opacity-25 pb-2">
                                        <span class=" d-block small">Client</span>
                                        <span class="text-white fw-medium">{{ $project->client }}</span>
                                    </li>
                                    <li class="mb-3 border-bottom border-secondary border-opacity-25 pb-2">
                                        <span class=" d-block small">Role</span>
                                        <span class="text-white fw-medium">{{ $project->role }}</span>
                                    </li>
                                    <li class="mb-3 border-bottom border-secondary border-opacity-25 pb-2">
                                        <span class=" d-block small">Timeline</span>
                                        <span class="text-white fw-medium">{{ $project->timeline }}</span>
                                    </li>
                                    <li>
                                        <span class=" d-block small mb-2">Links</span>
                                        <div class="d-flex gap-2 flex-column">
                                            @if ($project->live_link)                                                
                                                <a href="{{ $project->live_link }}" class="btn-custom btn-primary-custom w-100 text-center"><i class="ph ph-link me-2"></i> Live Preview</a>
                                            @endif

                                            @if ($project->github_link)                                                
                                                <a href="{{ $project->github_link }}" class="btn-custom btn-outline-custom w-100 text-center bg-dark bg-opacity-50"><i class="ph-fill ph-github-logo me-2"></i> Source Code</a>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="glass-card p-4 gs_reveal_right" data-delay="0.2">
                                <h5 class="fw-bold mb-4 text-white">Key Features</h5>
                                <ul class=" ps-3 mb-0">
                                    @foreach ($project->feature as $feat)                                        
                                        <li class="mb-2">{{ $feat->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 gs_reveal">
                    <div class="col-6">
                        <a href="#" class=" hover-cyan d-flex align-items-center">
                            <i class="ph ph-arrow-left fs-4 me-3"></i>
                            <div>
                                <span class="small d-block">Previous Project</span>
                                <strong class="text-white">University Management</strong>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 text-end">
                        <a href="#" class=" hover-cyan d-flex align-items-center justify-content-end">
                            <div>
                                <span class="small d-block">Next Project</span>
                                <strong class="text-white">Payment API</strong>
                            </div>
                            <i class="ph ph-arrow-right fs-4 ms-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

@endsection