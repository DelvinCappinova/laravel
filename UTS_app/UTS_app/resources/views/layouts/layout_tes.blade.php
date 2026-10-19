<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Layout Bootstrap')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .box { border: 1px solid #dee2e6; padding: 15px; min-height: 100px; background: #f8f9fa; }
    </style>
</head>
<body>
    <div class="container my-3">
        <!-- ROW 1: HEADER -->
        <div class="row mb-3">
            <div class="col-md-6 box fw-bold bg-primary text-white">LEFT HEADER</div>
            <div class="col-md-6 box fw-bold bg-secondary text-white text-end">RIGHT HEADER</div>
        </div>

        <!-- ROW 2: NAVIGATION & CONTENT -->
        <div class="row mb-3">
            <div class="col-md-3 box">LEFT NAVIGATION</div>
            <div class="col-md-6 box bg-white" style="min-height: 250px;">
                @yield('content')
            </div>
            <div class="col-md-3 box">RIGHT NAVIGATION</div>
        </div>

        <!-- ROW 3: FOOTER -->
        <div class="row">
            <div class="col-12 box text-center fw-bold bg-dark text-white">FOOTER</div>
        </div>
    </div>
</body>
</html>