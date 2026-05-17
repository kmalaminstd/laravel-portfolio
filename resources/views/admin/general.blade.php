@extends('layouts.admin-layout')

@section('content')

<div class="row g-4">
            <!-- Global Identity -->
            <div class="col-lg-6">
                <div class="glass-card p-4 h-100">
                    <h5 class="text-white mb-4 border-bottom border-secondary border-opacity-25 pb-3">Global Identity</h5>
                    <form>
                        <div class="mb-4">
                            <label class="form-label">Site Name / Logo Text</label>
                            <input type="text" class="form-control form-control-custom" value="K.M. AL-AMIN">
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">Hero Title (Homepage)</label>
                            <input type="text" class="form-control form-control-custom" value="PHP & Laravel Developer">
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">Hero Image (Homepage)</label>
                            <div class="d-flex align-items-center gap-3 mt-2">
                                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Hero" width="60" height="60" class="rounded border border-secondary border-opacity-25 object-fit-cover">
                                <input type="file" class="form-control form-control-custom">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">CV / Resume Upload (PDF)</label>
                            <input type="file" class="form-control form-control-custom" accept=".pdf">
                            <small class="text-muted mt-1 d-block">Current file: <a href="#" class="text-info">resume_2026.pdf</a></small>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Social Links & Contact -->
            <div class="col-lg-6">
                <div class="glass-card p-4 h-100">
                    <h5 class="text-white mb-4 border-bottom border-secondary border-opacity-25 pb-3">Social & Contact Links</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Primary Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary border-opacity-25 text-muted"><i class="ph-fill ph-envelope-simple"></i></span>
                                <input type="email" class="form-control form-control-custom border-start-0" value="hello@devalamin.com">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">WhatsApp Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary border-opacity-25 text-muted"><i class="ph-fill ph-whatsapp-logo"></i></span>
                                <input type="text" class="form-control form-control-custom border-start-0" value="+880 1234 567 890">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">GitHub URL</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary border-opacity-25 text-muted"><i class="ph-fill ph-github-logo"></i></span>
                                <input type="url" class="form-control form-control-custom border-start-0" value="https://github.com/devalamin">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">LinkedIn URL</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary border-opacity-25 text-muted"><i class="ph-fill ph-linkedin-logo"></i></span>
                                <input type="url" class="form-control form-control-custom border-start-0" value="https://linkedin.com/in/devalamin">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Twitter / X URL</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary border-opacity-25 text-muted"><i class="ph-fill ph-twitter-logo"></i></span>
                                <input type="url" class="form-control form-control-custom border-start-0" value="https://twitter.com/devalamin">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Save Action -->
            <div class="col-12 mt-4 text-end">
                <button type="submit" class="btn btn-primary px-5 btn-lg shadow-glow" style="background-color: var(--accent-indigo); border: none;">Save All Changes</button>
            </div>
        </div>

@endsection