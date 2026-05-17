<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | K.M. AL-AMIN</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- jodit editor -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.6.13/es2015/jodit.fat.min.css" integrity="sha512-2cfnJ8ZMBqkaNXsi/6ucIcFRvKVFKW69HEP5S7L2fQtAaPrVg5XLkkUgl46kkaN5PPArXwLPCOqhbsAAiHQiXA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- fontwaesom --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/admin/style.css') }}">

</head>
<body>

    <x-admin.sidebar />

    <!-- Main Content -->
    <div id="main-content">
        <!-- Topbar -->
        <x-admin.topbar />


        @yield('content')

    </div>

    <!-- jodit editor -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.6.13/es2018/jodit.fat.min.js" integrity="sha512-WTmACaoglEK1EwdapDvHL91mK2yPjFEY1kSDZl/IjSiCIYKr5LKxhAiLmgpjlWwMjQRd7rutoPpuDS1y5Z83Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js" integrity="sha512-6BTOlkauINO65nLhXhthZMtepgJSghyimIalb+crKRPhvhmsCdnIuGcVbR5/aQY2A+260iC1OPy1oCdB6pSSwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/assets/admin/main.js') }}"></script>

    @stack('js')

</body>
</html>
