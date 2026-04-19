<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <style>
        body { font-family: sans-serif; padding: 20px; color: #000; }
        .container { max-width: 800px; margin: 0 auto; border: 1px solid #000; padding: 20px; }
        
        /* Form & Tabel Sederhana */
        input, textarea { width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #000; box-sizing: border-box; }
        button { background: #000; color: #fff; border: none; padding: 8px 15px; cursor: pointer; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background: #000; color: #fff; text-align: left; padding: 10px; }
        td { border: 1px solid #000; padding: 10px; }
        
        /* Link Aksi */
        a, .btn-hapus { color: #000; text-decoration: underline; background: none; border: none; cursor: pointer; padding: 0; }
    </style>
</head>
<body>

<div class="container">
    <h2>Daftar Buku</h2>

    <form action="{{ route('bukus.store') }}" method="POST">
        @csrf
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 10px;">
            <input type="text" name="judul" placeholder="Judul" required>
            <input type="text" name="penulis" placeholder="Penulis" required>
            <input type="number" name="harga" placeholder="Harga" required>
        </div>
        <textarea name="deskripsi" placeholder="Deskripsi"></textarea>
        <button type="submit">Tambah</button>
    </form>

    <table>
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
                    <a href="{{ route('bukus.edit', $buku->id) }}">Edit</a>
                    <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus?')">
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