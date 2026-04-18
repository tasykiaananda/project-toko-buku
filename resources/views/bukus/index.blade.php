<!DOCTYPE html>
<html>
<head>
    <title>Toko Buku Pintar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>Toko Buku Pintar</h1>
    <form action="{{ route('bukus.store') }}" method="POST">
        @csrf
        <input type="text" name="judul" placeholder="Judul Buku" required>
        <input type="text" name="penulis" placeholder="Penulis" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <textarea name="deskripsi" placeholder="Deskripsi"></textarea>
        <button type="submit">Tambah Buku</button>
    </form>

    <h2>Koleksi Buku</h2>
    <table>
        <thead>
            <tr><th>Judul</th><th>Penulis</th><th>Harga</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach($bukus as $buku)
            <tr>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>Rp {{ number_format($buku->harga) }}</td>
                <td>
                    <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" onsubmit="return confirm('Yakin?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn-delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>