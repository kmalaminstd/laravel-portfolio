@extends('layouts.admin-layout')


@section('content')

<!-- Add/Edit Form Section (Collapsed by default, shown via JS or just kept visible for the template) -->
        <div class="glass-card p-4 mb-4">
            <h5 class="text-white mb-4">Add New Project</h5>
            <form>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">Project Title</label>
                        <input type="text" class="form-control form-control-custom" placeholder="e.g., E-Commerce Platform">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Project Categories (comma separated)</label>
                        <input type="text" class="form-control form-control-custom" placeholder="e.g., laravel, fullstack">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tech Stacks (comma separated)</label>
                        <input type="text" class="form-control form-control-custom" placeholder="e.g., PHP, Vue.js, MySQL">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-control form-control-custom">
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Live Link (Optional)</label>
                        <input type="url" class="form-control form-control-custom" placeholder="https://...">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">GitHub Link (Optional)</label>
                        <input type="url" class="form-control form-control-custom" placeholder="https://github.com/...">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Short Summary</label>
                        <input type="text" class="form-control form-control-custom" placeholder="A brief description...">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Detailed Overview</label>
                        <textarea id="jodit_rich_editor" class="form-control form-control-custom" rows="4" placeholder="Full project description, problem & solution..."></textarea>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Upload Images (Main Thumbnail + Screenshots)</label>
                        <input class="form-control form-control-custom" type="file" id="formFileMultiple" multiple>
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
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="rounded" width="40" height="40" style="object-fit: cover;">
                                    <span class="text-white">E-Commerce SaaS Platform</span>
                                </div>
                            </td>
                            <td><span class="badge bg-secondary bg-opacity-25 text-light">laravel, fullstack</span></td>
                            <td><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Published</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-info border-0"><i class="ph ph-pencil-simple fs-5"></i></button>
                                <button class="btn btn-sm btn-outline-danger border-0"><i class="ph ph-trash fs-5"></i></button>
                            </td>
                        </tr>
                        <!-- More rows... -->
                    </tbody>
                </table>
            </div>
        </div>

    @push('js')
        <script>
            document.addEventListener('DOMContentLoaded', ()=> {
                // console.log(Jodit)
                Jodit.make('#jodit_rich_editor',{
                    height: 600
                })
            })
        </script>
    @endpush

@endsection