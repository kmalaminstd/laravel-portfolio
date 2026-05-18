@extends('layouts.admin-layout')


@section('content')

<!-- Add/Edit Form Section (Collapsed by default, shown via JS or just kept visible for the template) -->
        <div class="glass-card p-4 mb-4">
            <h5 class="text-white mb-4">Add New Project</h5>
            <form method="POST" action="/admin/project" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div style="color:red; margin-bottom: 1rem;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">Project Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control form-control-custom" placeholder="e.g., E-Commerce Platform">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Project Categories</label>
                        <select class="form-control form-control-custom" name="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tech Stacks</label>
                        <div class="d-flex gap-4 flex-wrap">
                            @foreach ($techStacks as $tech)                                
                                <label>
                                    {{ $tech->name }}
                                    <input name="tech_id[]" type="checkbox" value="{{ $tech->id }}">
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Client</label>
                        <input type="text" name="client" class="form-control form-control-custom" placeholder="A brief description...">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Role</label>
                        <input type="text" name="role" class="form-control form-control-custom" placeholder="A Bakend Developer">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Timeline</label>
                        <input type="text" name="timeline" class="form-control form-control-custom" placeholder="A 4 Months">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-control form-control-custom" name="status">
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Live Link (Optional)</label>
                        <input type="url" name="live_link" class="form-control form-control-custom" placeholder="https://...">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">GitHub Link (Optional)</label>
                        <input type="url" name="github_link" class="form-control form-control-custom" placeholder="https://github.com/...">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Short Summary</label>
                        <input type="text" name="short_summary" class="form-control form-control-custom" placeholder="A brief description...">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Detailed Overview</label>
                        <textarea id="jodit_rich_editor" name="description" class="form-control text-black form-control-custom" rows="4" placeholder="Full project description, problem & solution...">{{ old('description') }}</textarea>
                    </div>
                    <div class="col-12">
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

        <!-- Project List Table -->
        <div class="glass-card p-4">
            <h5 class="text-white mb-4">Existing Projects</h5>
            <div class="table-responsive">
                <table class="table table-custom table-borderless">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($projects as $project)     
                            {{-- {{ dd($project) }} --}}
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        @foreach($project->projectMedia as $med)
                                            @if ($med->media->featured)             
                                                <img src="{{ asset('/storage/' . $med->media->src) }}" class="rounded" width="40" height="40" style="object-fit: cover;">
                                            @endif
                                        @endforeach
                                        <span class="text-dark">{{ $project->title }}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-secondary bg-opacity-25 text-dark">{{ $project->category->name }}</span>
                                </td>
                                <td><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">{{ $project->status ? "Published" : "Unpublished" }}</span></td>
                                <td class="text-end">
                                    <a href="/admin/project/{{ $project->id }}/edit" class="btn btn-sm btn-outline-info border-0"><i class="ph ph-pencil-simple fs-5"></i></a>
                                    <form method="POST" action="/admin/project/{{$project->id}}/delete">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-sm btn-outline-danger border-0"><i class="ph ph-trash fs-5"></i></button>
                                    </form>
                                </td>                                                                
                            </tr>
                            <tr class="text-center">
                                <td colspan="4" class="d-flex gap-3">
                                    <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#featureModal{{ $project->id }}">Features</a>
                                    <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#processModal{{ $project->id }}">Process</a>
                                    <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#challengeModal{{ $project->id }}">Challenge</a>
                                    <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal{{ $project->id }}">Image</a>
                                </td>
                            </tr>
                            <hr>

                        @empty
                            <p>No Project Added</p>
                        @endforelse

                        <!-- More rows... -->
                    </tbody>
                </table>
            </div>
        </div>

        {{-- modals --}}
            @foreach ($projects as $project)
                <!-- Modal Feature -->
                <div class="modal fade" id="featureModal{{ $project->id }}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark">Feature Modal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/admin/feature/{{ $project->id }}">
                                <div class="col-12">
                                    <label class="form-label">Feature Name:</label>
                                    <input type="text" name="name" class="form-control form-control-custom" placeholder="A brief description...">
                                </div>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </form>

                            <div class="mt-3">
                                <ul class="text-dark">
                                    @foreach ($project->feature as $feat)                                        
                                        <li>
                                            {{ $feat->name }} 
                                            <form method="POST" action="/admin/feature/{{$feat->id}}/delete">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit">Delete</button>
                                            </form>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Process -->
                <div class="modal fade" id="processModal{{ $project->id }}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark">Process Modal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/admin/process/{{ $project->id }}">
                                <div class="col-12">
                                    <label class="form-label">Process Name:</label>
                                    <input type="text" name="name" class="form-control form-control-custom" placeholder="A brief description...">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Process Description:</label>
                                    <input type="text" name="description" class="form-control form-control-custom" placeholder="A brief description...">
                                </div>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </form>

                            <div class="mt-5">
                                <ul class="text-dark">
                                    @foreach ($project->process as $process)
                                        <li>
                                            {{ $process->name }} : {{ $process->description }}
                                            <form method="POST" action="/admin/process/{{ $process->id }}/delete">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit">Delete</button>
                                            </form>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Challenge -->
                <div class="modal fade" id="challengeModal{{ $project->id }}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark">Challenge Modal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/admin/challenge/{{ $project->id }}">
                                <div class="col-12">
                                    <label class="form-label">Description:</label>
                                    <textarea  name="description" class="form-control form-control-custom" placeholder="A brief description..."></textarea>
                                </div>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </form>

                            <div class="mt-4">
                                <ul class="text-dark">
                                    @if ($project->challenge)                                        
                                        <li>{{ $project->challenge->description }}
                                            <form method="POST" action="/admin/challenge/{{ $project->challenge->id }}/delete">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit">Delete</button>
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Image -->
                <div class="modal fade" id="imageModal{{ $project->id }}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark">Image Modal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form enctype="multipart/form-data" method="POST" action="/admin/project/images/{{ $project->id }}/add-multiple">
                                <div class="col-12">
                                    <label class="form-label">Select Images:</label>
                                    <input type="file" accept="image/*" name="images[]" multiple class="form-control form-control-custom" placeholder="A brief description...">
                                </div>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </form>

                            <div class="d-flex flex-wrap gap-3">
                                @foreach ($project->projectMedia as $pm)
                                    @if (!$pm->media->featured)
                                        <div>
                                            <img style="width: 250px; height: auto;" src="{{ asset('/storage/' . $pm->media->src) }}" />
                                            <form method="POST" action="/admin/project/image/{{ $pm->id }}/delete">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit">Delete</button>
                                            </form>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
                
            @endforeach
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