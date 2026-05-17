@extends('layouts.admin-layout')

@section('content')

        <div class="row g-4">
            <!-- Add Skill Form -->
            <div class="col-12">
                <div class="glass-card p-4">
                    <h5 class="text-white mb-4">Add New Skill</h5>
                    <form method="POST" action="/admin/tech-stack/{{ $techstack->id }}/update">
                        @csrf
                        @method("PATCH")
                        <div class="mb-3">
                            <label class="form-label">Skill Name</label>
                            <input name="name" type="text" class="form-control form-control-custom" placeholder="e.g., React.js" value="{{ $techstack->name }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Icon Class (Phosphor/FontAwesome)</label>
                            <input type="text" value="{{ $techstack->icon }}" name="icon" class="form-control form-control-custom" placeholder="e.g., ph-fill ph-file-js">
                            <small class="text-muted mt-1 d-block">Find icons at phosphoricons.com</small>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="background-color: var(--accent-indigo); border: none;">Update</button>
                    </form>
                </div>
            </div>


        </div>


@endsection