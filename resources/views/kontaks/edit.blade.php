<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Kontak</title>
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
        <h1>Edit Kontak</h1>

        <form action="{{ route('kontaks.update', $kontak->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $kontak->nama }}" required>
            </div>

            <div class="form-group">
                <label for="telepon" class="form-label">Telepon:</label>
                <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $kontak->telepon }}" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $kontak->email }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Kontak</button>
            <a href="{{ route('kontaks.index') }}" class="btn btn-secondary">Kembali ke Daftar Kontak</a>
        </form>
    </div>
</body>
</html>
