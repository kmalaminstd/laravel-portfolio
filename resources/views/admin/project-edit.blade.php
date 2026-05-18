@extends('layouts.admin-layout')


@section('content')

<!-- Add/Edit Form Section (Collapsed by default, shown via JS or just kept visible for the template) -->
        <div class="glass-card p-4 mb-4">
            <h5 class="text-white mb-4">Add New Project</h5>
            <form method="POST" action="/admin/project/{{ $project->id }}/update" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">Project Title</label>
                        <input type="text" name="title" value="{{ $project->title }}" class="form-control form-control-custom" placeholder="e.g., E-Commerce Platform">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Project Categories</label>
                        <select class="form-control form-control-custom" name="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}" {{ $project->category->id === $cat->id ? "Selected" : "" }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tech Stacks</label>
                        <div class="d-flex gap-4 flex-wrap">
                            {{-- {{ dd($project->techStacks) }} --}}
                            @foreach ($techStacks as $tech)                                
                                <label>
                                    {{ $tech->name }}
                                    <input name="tech_id[]" type="checkbox" {{ $project->techStacks->contains($tech->id) ? "checked" : "" }} value="{{ $tech->id }}">
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-control form-control-custom" name="status">
                            <option {{ $project->status ? "selected" : "" }} value="published">Published</option>
                            <option {{ $project->status ? "" : "selected" }} value="draft">Draft</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Live Link (Optional)</label>
                        <input type="url" value="{{ $project->live_link }}" name="live_link" class="form-control form-control-custom" placeholder="https://...">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">GitHub Link (Optional)</label>
                        <input type="url" value="{{ $project->github_link }}" name="github_link" class="form-control form-control-custom" placeholder="https://github.com/...">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Short Summary</label>
                        <input type="text" value="{{ $project->short_summary }}" name="short_summary" class="form-control form-control-custom" placeholder="A brief description...">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Detailed Overview</label>
                        <textarea id="jodit_rich_editor" name="description" class="form-control text-black form-control-custom" rows="4" placeholder="Full project description, problem & solution...">{{ $project->description }}</textarea>
                    </div>
                    
                    
                    <div class="col-12">

                        @foreach ($project->projectMedia as $pm)
                            @if ($pm->media->featured)
                                <img style="width: 200px; height: auto;" src="{{ asset('/storage/' . $pm->media->src) }}" />
                            @endif
                        @endforeach

                        <br>
                        
                        <label class="form-label">Upload Images (Main Thumbnail + Screenshots)</label>
                        <input name="feature_image" class="form-control form-control-custom" type="file" id="formFileMultiple" multiple>
                    </div>
                    <div class="col-12 text-end mt-4">
                        <button type="button" class="btn btn-outline-secondary me-2 text-white border-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary px-4" style="background-color: var(--accent-indigo); border: none;">Save Project</button>
                    </div>
                </div>
            </form>
        </div>


    @push('js')
        <script>
            document.addEventListener('DOMContentLoaded', ()=> {
                // console.log(Jodit)
                Jodit.make('#jodit_rich_editor',{
                    height: 600,
                    colorPickerDefaultTab: "#000"
                })
            })
        </script>
    @endpush

@endsection