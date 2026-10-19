<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Kirim Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="text-success">Data Mahasiswa Berhasil Dikirim!</h3>
        <hr>
        <p><strong>NIM :</strong> {{ $nim }}</p>
        <p><strong>Nama :</strong> {{ $nama }}</p>
        
        <a href="{{ url('/form-mahasiswa') }}" class="btn btn-secondary mt-3">Kembali ke Form</a>
    </div>
</body>
</html>