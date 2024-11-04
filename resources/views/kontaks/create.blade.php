<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Kontak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Kontak</h1>

        <form action="{{ route('kontaks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="telepon" class="form-label">Telepon:</label>
                <input type="text" class="form-control" id="telepon" name="telepon" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Kontak</button>
            <a href="{{ route('kontaks.index') }}" class="btn btn-secondary">Kembali ke Daftar Kontak</a>
        </form>
    </div>
</body>
</html>

