@extends('layouts.admin-layout')

@section('content')

<div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="glass-card p-5">
                    <div class="d-flex align-items-center mb-4 pb-3 border-bottom border-secondary border-opacity-25">
                        <i class="ph-fill ph-google-logo fs-2 text-gradient me-3"></i>
                        <div>
                            <h5 class="text-white mb-0">Search Engine Optimization</h5>
                            <p class="text-muted small mb-0">Manage how your portfolio appears on search engines and social media.</p>
                        </div>
                    </div>

                    <form>
                        <div class="mb-4">
                            <label class="form-label">Meta Title</label>
                            <input type="text" class="form-control form-control-custom" value="K.M. AL-AMIN | PHP & Laravel Developer">
                            <small class="text-muted">Recommended length: 50-60 characters.</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Meta Description</label>
                            <textarea class="form-control form-control-custom" rows="3">Portfolio of K.M. AL-AMIN, a professional Web Developer focused on PHP and Laravel development.</textarea>
                            <small class="text-muted">Recommended length: 150-160 characters.</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Meta Keywords (Comma separated)</label>
                            <input type="text" class="form-control form-control-custom" value="Laravel, PHP, Web Developer, Backend Developer, Vue.js">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Open Graph (OG) Image</label>
                            <div class="d-flex align-items-center gap-4 mt-2">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" class="rounded border border-secondary border-opacity-25" width="150" alt="OG Preview">
                                <input class="form-control form-control-custom" type="file" id="ogImage">
                            </div>
                            <small class="text-muted d-block mt-2">This image appears when your site is shared on social media (Facebook, Twitter, LinkedIn). Recommended size: 1200x630 pixels.</small>
                        </div>

                        <div class="text-end mt-5">
                            <button type="submit" class="btn btn-primary px-5 btn-lg" style="background-color: var(--accent-indigo); border: none;">Save SEO Settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection