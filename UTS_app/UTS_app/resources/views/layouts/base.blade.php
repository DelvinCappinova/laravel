<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portal Akademik')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .box {
            border: 1px solid #ced4da;
            padding: 20px;
            background-color: #ffffff;
        }
        .header-footer {
            font-weight: bold;
            text-align: center;
            letter-spacing: 1px;
        }
    </style>
</head>
<body class="container my-4">

    <div class="row">
        <div class="col-md-6 box header-footer">71230983</div>
        <div class="col-md-6 box header-footer">Delvin Cappinova</div>
    </div>

    <div class="row">
        <div class="col-md-3 box">
            <div class="nav flex-column nav-pills">
                <a class="nav-link {{ request()->is('courses*') ? 'active' : '' }}" href="{{ url('/courses') }}">Courses</a>
                <a class="nav-link {{ request()->is('students*') ? 'active' : '' }}" href="{{ url('/students') }}">Students</a>
                <a class="nav-link {{ request()->is('grades*') ? 'active' : '' }}" href="{{ url('/grades') }}">Grades</a>
                <a class="nav-link {{ request()->is('assignments*') ? 'active' : '' }}" href="{{ url('/assignments') }}">Assignments</a>
            </div>
        </div>

        <div class="col-md-6 box" style="min-height: 350px;">
            @yield('content')
        </div>

        <div class="col-md-3 box">
            <ul class="list-unstyled">
                <li><a href="{{ url('/form-mahasiswa') }}" class="text-decoration-none">Form Mahasiswa</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-12 box header-footer">
            ini footer
        </div>
    </div>

</body>
</html>