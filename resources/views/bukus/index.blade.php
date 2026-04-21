<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="main-container">
    <h2>Daftar Buku</h2>

    <div class="input-section">
        <form action="{{ route('bukus.store') }}" method="POST">
            @csrf
            <div class="input-row">
                <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                <input type="text" name="penulis" class="form-control" placeholder="Penulis" required>
                <input type="number" name="harga" class="form-control" placeholder="Harga" required>
                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
                <button type="submit" class="btn-tambah">Tambah Data</button>
            </div>
        </form>
    </div>

    <table class="table-data">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bukus as $buku)
            <tr>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ number_format($buku->harga, 0, ',', '.') }}</td>
                <td>{{ $buku->deskripsi }}</td>
                <td>
                    <div class="action-group">
                        <a href="{{ route('bukus.edit', $buku->id) }}" class="btn-link">Edit</a>
                        <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" onsubmit="return confirm('Hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-hapus">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>