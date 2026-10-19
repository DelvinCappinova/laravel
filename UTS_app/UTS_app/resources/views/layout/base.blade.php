<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portal Akademik')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-4">
        <!-- Header -->
        <div class="row mb-3">
            <div class="col-md-6 p-3 bg-primary text-white rounded">LEFT HEADER - Portal Akademik</div>
            <div class="col-md-6 p-3 bg-secondary text-white rounded text-end">RIGHT HEADER - Delvin (71230983)</div>
        </div>

        <div class="row">
            <!-- Left Navigation -->
            <div class="col-md-3 p-3 bg-light border rounded">
                <h5>Menu Utama</h5>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Profil</a></li>
                </ul>
            </div>

            <!-- Content Area + Vertical Navigation (Soal 1.d) -->
            <div class="col-md-6 p-3 border rounded bg-white">
                <div class="row">
                    <!-- Vertical Navigation untuk Child Modul -->
                    <div class="col-md-4 border-end">
                        <h6 class="text-muted">Navigasi Modul</h6>
                        <div class="nav flex-column nav-pills" role="tablist">
                            <a class="nav-link {{ request()->is('courses*') ? 'active' : '' }}" href="{{ url('/courses') }}">Courses</a>
                            <a class="nav-link {{ request()->is('students*') ? 'active' : '' }}" href="{{ url('/students') }}">Students</a>
                            <a class="nav-link {{ request()->is('grades*') ? 'active' : '' }}" href="{{ url('/grades') }}">Grades</a>
                            <a class="nav-link {{ request()->is('assignments*') ? 'active' : '' }}" href="{{ url('/assignments') }}">Assignments</a>
                        </div>
                    </div>
                    
                    <!-- Dynamic Content dari Child View -->
                    <div class="col-md-8">
                        @yield('content')
                    </div>
                </div>
            </div>

            <!-- Right Navigation -->
            <div class="col-md-3 p-3 bg-light border rounded">
                <h6>Informasi Sistem</h6>
                <p class="small text-muted">UTS Pemrograman Web Lanjut 2026</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="row mt-3">
            <div class="col-12 p-3 bg-dark text-white text-center rounded">&copy; 2026 - Universitas Kristen Duta Wacana</div>
        </div>
    </div>
</body>
</html>