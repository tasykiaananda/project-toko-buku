<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <style>
        /* Gaya dasar agar tabel terlihat rapi */
        body { font-family: sans-serif; padding: 20px; }
        .table-data { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .table-data th, .table-data td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        .table-data th { background-color: #f4f4f4; }
        .form-control { width: 90%; padding: 5px; }
        .btn-tambah { cursor: pointer; padding: 5px 10px; }
        .btn-hapus { color: red; background: none; border: none; cursor: pointer; padding: 0; text-decoration: underline; }
    </style>
</head>
<body>

<div class="main-container">
    <h2>Daftar Buku</h2>

    <table class="table-data">
        <thead>
            <!-- BARIS FORM INPUT (Gabung di dalam tabel) -->
            <tr>
                <form action="{{ route('bukus.store') }}" method="POST">
                    @csrf
                    <td><input type="text" name="judul" class="form-control" placeholder="Judul" required></td>
                    <td><input type="text" name="penulis" class="form-control" placeholder="Penulis" required></td>
                    <td><input type="number" name="harga" class="form-control" placeholder="Harga" required></td>
                    <td><input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi"></td>
                    <td>
                        <button type="submit" class="btn-tambah">Tambah Data</button>
                    </td>
                </form>
            </tr>
            <!-- HEADER KOLOM -->
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
                    <a href="{{ route('bukus.edit', $buku->id) }}">Edit</a>
                    <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus buku ini?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn-hapus">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>