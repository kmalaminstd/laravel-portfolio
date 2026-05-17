@extends('layouts.admin-layout')

@section('content')

        <div class="row g-4">
            <!-- Add Skill Form -->
            <div class="col-lg-4">
                <div class="glass-card p-4">
                    <h5 class="text-white mb-4">Add New Skill</h5>
                    <form method="POST" action="/admin/tech-stack">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Skill Name</label>
                            <input name="name" type="text" class="form-control form-control-custom" placeholder="e.g., React.js">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Icon Class (Phosphor/FontAwesome)</label>
                            <input type="text" name="icon" class="form-control form-control-custom" placeholder="e.g., ph-fill ph-file-js">
                            <small class="text-muted mt-1 d-block">Find icons at phosphoricons.com</small>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="background-color: var(--accent-indigo); border: none;">Save Skill</button>
                    </form>
                </div>
            </div>

            <!-- Existing Skills Grid -->
            <div class="col-lg-8">
                <div class="glass-card p-4 h-100">
                    <h5 class="text-white mb-4">Existing Skills</h5>
                    
                    
                    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-4 g-3">
                        @forelse ($techStacks as $tech)                            
                            <div class="col">
                                <div class="tech-card">
                                    <div class="actions">
                                        <a href="/admin/tech-stack/{{ $tech->id }}/edit" class="btn btn-sm text-info p-0 mx-1"><i class="ph ph-pencil-simple"></i></a>
                                        <form method="POST" action="/admin/tech-stack/{{ $tech->id }}/delete">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-sm text-danger p-0 mx-1"><i class="ph ph-trash"></i></button>
                                        </form>
                                    </div>
                                    {!! $tech->icon !!}
                                    <h6 class="text-white mb-1">{{ $tech->name }}</h6>
                                    <div class="progress mt-2" style="height: 5px; background-color: rgba(255,255,255,0.1);">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>There are no tech stacks</p>
                        @endforelse
                        
                    </div>
                    
                </div>
            </div>
        </div>


@endsection