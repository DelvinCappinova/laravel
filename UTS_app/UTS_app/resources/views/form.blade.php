<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input NIM & Nama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow p-4">
        <h2>Form Pengiriman Data Mahasiswa (POST)</h2>
        <form action="{{ route('form.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="71230983" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="Delvin Cappinova" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Data</button>
        </form>
    </div>
</body>
</html>