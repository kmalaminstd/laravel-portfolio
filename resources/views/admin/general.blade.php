@extends('layouts.admin-layout')

@section('content')

<div class="row g-4">
            <!-- Global Identity -->
            <div class="col-lg-6">
                <div class="glass-card p-4 h-100">
                    <h5 class="text-white mb-4 border-bottom border-secondary border-opacity-25 pb-3">Global Identity</h5>
                    <form method="POST" action="/admin/general" enctype="multipart/form-data">
                        @csrf
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
                                <img src="{{ asset('/storage/' . $myinfos?->media?->src) }}" alt="Hero" width="60" height="60" class="rounded border border-secondary border-opacity-25 object-fit-cover">
                                <input name="image" type="file" class="form-control form-control-custom">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">CV / Resume Upload (PDF)</label>
                            <input name="resume" type="file" class="form-control form-control-custom" accept=".pdf">
                            <small class="text-muted mt-1 d-block">Current file: <a href="/storage/{{ $myinfos?->resume }}" class="text-info">{{ $myinfos ? $myinfos->resume : '' }}</a></small>
                        </div>

                        <button type="submit" class="btn btn-primary px-5 btn-lg shadow-glow" style="background-color: var(--accent-indigo); border: none;">Save</button>
                    </form>
                </div>
            </div>

            <!-- Social Links & Contact -->
            <div class="col-lg-6">
                <div class="glass-card p-4 h-100">
                    <h5 class="text-white mb-4 border-bottom border-secondary border-opacity-25 pb-3">Social & Contact Links</h5>
                    <form action="/admin/general" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Primary Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary border-opacity-25 text-muted"><i class="ph-fill ph-envelope-simple"></i></span>
                                <input name="email" type="email" class="form-control form-control-custom border-start-0" value="{{ $myinfos ? $myinfos->email : '' }}">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">WhatsApp Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary border-opacity-25 text-muted"><i class="ph-fill ph-whatsapp-logo"></i></span>
                                <input name="whatsapp" type="text" class="form-control form-control-custom border-start-0" value="{{ $myinfos ? $myinfos->whatsapp : '' }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">GitHub URL</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary border-opacity-25 text-muted"><i class="ph-fill ph-github-logo"></i></span>
                                <input name="github" type="url" class="form-control form-control-custom border-start-0" value="{{ $myinfos ? $myinfos->github : '' }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">LinkedIn URL</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary border-opacity-25 text-muted"><i class="ph-fill ph-linkedin-logo"></i></span>
                                <input name="linkedin" type="url" class="form-control form-control-custom border-start-0" value="{{ $myinfos ? $myinfos->linkedin : '' }}">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Twitter / X URL</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary border-opacity-25 text-muted"><i class="ph-fill ph-twitter-logo"></i></span>
                                <input name="twitter" type="url" class="form-control form-control-custom border-start-0" value="{{ $myinfos ? $myinfos->twitter : '' }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary px-5 btn-lg shadow-glow" style="background-color: var(--accent-indigo); border: none;">Save</button>
                    </form>
                </div>
            </div>

           
        </div>

@endsection