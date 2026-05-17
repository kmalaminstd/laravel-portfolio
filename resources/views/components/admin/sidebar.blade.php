<!-- Sidebar -->
    <nav id="sidebar" class="d-flex flex-column p-3">
        <a href="#" class="d-flex align-items-center mb-5 text-white text-decoration-none px-3 pt-2">
            <span class="fs-4 fw-bold font-heading"><span class="text-gradient">ADMIN</span>PANEL</span>
        </a>
        <ul class="nav flex-column mb-auto gap-2">
            <li>
                <a href="/admin" class="nav-link-custom {{request()->is('admin') ? 'active' : '' }}">
                    <i class="ph ph-squares-four"></i> Dashboard
                </a>
            </li>
            <li class="mt-3 mb-2 px-3  small text-uppercase fw-bold">Management</li>
            <li>
                <a href="/admin/project" class="nav-link-custom {{request()->is('admin/projects') ? 'active' : '' }}">
                    <i class="ph ph-folder-notch"></i> Projects
                </a>
            </li>
            <li>
                <a href="/admin/messages" class="nav-link-custom {{request()->is('admin/messages') ? 'active' : '' }}">
                    <i class="ph ph-envelope-simple"></i> Messages
                    <span class="badge bg-danger rounded-pill ms-auto">3</span>
                </a>
            </li>
            <li>
                <a href="/admin/tech-stack" class="nav-link-custom {{request()->is('admin/tech-stack') ? 'active' : '' }}">
                    <i class="ph ph-code"></i> Tech Stacks
                </a>
            </li>

            <li>
                <a href="/admin/category" class="nav-link-custom {{request()->is('admin/category') ? 'active' : '' }}">
                    <i class="ph ph-code"></i> Category
                </a>
            </li>

            <li>
                <a href="#" class="nav-link-custom">
                    <i class="ph ph-briefcase"></i> Experience
                </a>
            </li>
            <li class="mt-3 mb-2 px-3  small text-uppercase fw-bold">Settings</li>
            <li>
                <a href="/admin/seo" class="nav-link-custom {{request()->is('admin/seo') ? 'active' : '' }}">
                    <i class="ph ph-globe"></i> SEO Settings
                </a>
            </li>
            <li>
                <a href="/admin/general" class="nav-link-custom {{request()->is('admin/general') ? 'active' : '' }}">
                    <i class="ph ph-gear"></i> General
                </a>
            </li>
        </ul>
        <hr style="border-color: rgba(255,255,255,0.1);">
        <a href="../index.html" class="nav-link-custom text-danger">
            <i class="ph ph-sign-out"></i> Logout / View Site
        </a>
    </nav>