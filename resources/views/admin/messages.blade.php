@extends('layouts.admin-layout')

@section('content')

<div class="row g-4">
            <!-- Message List -->
            <div class="col-lg-5">
                <div class="glass-card h-100 overflow-hidden d-flex flex-column">
                    <div class="p-3 border-bottom border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                        <h6 class="mb-0 text-white">Inbox (3)</h6>
                        <button class="btn btn-sm btn-outline-secondary border-0 "><i class="ph ph-check-square me-1"></i> Mark all read</button>
                    </div>
                    <div class="overflow-y-auto" style="max-height: 70vh;">
                        
                        <!-- Unread Message -->
                        <div class="message-item message-unread" onclick="document.getElementById('msg-detail-area').style.display='block';">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-white fw-bold">John Doe</span>
                                <span class=" small">10:30 AM</span>
                            </div>
                            <h6 class="text-white small fw-bold mb-1">Project Inquiry: Laravel Web App</h6>
                            <p class=" small mb-0 text-truncate">Hi Al-Amin, I saw your portfolio and I would like to discuss...</p>
                        </div>
                        
                        <!-- Unread Message -->
                        <div class="message-item message-unread">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-white fw-bold">Sarah Smith</span>
                                <span class=" small">Yesterday</span>
                            </div>
                            <h6 class="text-white small fw-bold mb-1">Need a Frontend Developer</h6>
                            <p class=" small mb-0 text-truncate">We are a startup looking for a developer with Vue.js skills.</p>
                        </div>
                        
                        <!-- Read Message -->
                        <div class="message-item">
                            <div class="d-flex justify-content-between mb-2">
                                <span class=" fw-medium">Mike Johnson</span>
                                <span class=" small">Oct 10</span>
                            </div>
                            <h6 class=" small fw-medium mb-1">API Integration Help</h6>
                            <p class=" small mb-0 text-truncate">Can you help us migrate our legacy API to a modern REST setup?</p>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- Message Details Area -->
            <div class="col-lg-7">
                <div class="glass-card h-100 p-4" id="msg-detail-area" style="display: none;">
                    <!-- Toolbar -->
                    <div class="d-flex justify-content-between border-bottom border-secondary border-opacity-25 pb-3 mb-4">
                        <div>
                            <h5 class="text-white mb-1">Project Inquiry: Laravel Web App</h5>
                            <span class=" small">From: <strong>John Doe</strong> &lt;john@example.com&gt;</span>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-outline-info" title="Reply via Mailto"><i class="ph ph-arrow-u-up-left fs-5"></i></button>
                            <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="ph ph-trash fs-5"></i></button>
                        </div>
                    </div>
                    
                    <!-- Message Body -->
                    <div class="">
                        <p>Hi Al-Amin,</p>
                        <p>I saw your portfolio and I am very impressed with your work on the E-Commerce SaaS Platform.</p>
                        <p>We are currently looking to build a similar multi-tenant architecture for our CRM software and we believe your skills in Laravel and Vue.js would be a perfect fit.</p>
                        <p>Are you available for a quick call next week to discuss the scope and your availability for freelance work?</p>
                        <p>Best regards,<br>John Doe</p>
                    </div>
                </div>
                
                <!-- Empty State (Shown initially) -->
                <div class="glass-card h-100 p-4 d-flex align-items-center justify-content-center text-center" id="msg-empty-state">
                    <div>
                        <i class="ph ph-envelope-open  opacity-50" style="font-size: 4rem;"></i>
                        <p class=" mt-3">Select a message to read</p>
                    </div>
                </div>
            </div>
        </div>

@endsection