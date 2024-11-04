<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Kontak</title>
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
        <h1>Daftar Kontak</h1>
        <a href="{{ route('kontaks.create') }}" class="btn btn-success mb-3">Tambah Kontak</a>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kontaks as $kontak)
                    <tr>
                        <td>{{ $kontak->nama }}</td>
                        <td>{{ $kontak->telepon }}</td>
                        <td>{{ $kontak->email }}</td>
                        <td>
                            <a href="{{ route('kontaks.edit', $kontak->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('kontaks.destroy', $kontak->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
