<div class="container">
    <h2>Daftar Buku</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <!-- Header Kolom -->
            <tr style="background-color: #f2f2f2;">
                <th>Judul</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th colspan="2">Aksi</th>
            </tr>
            <!-- Baris Form Input (Form harus membungkus seluruh baris agar input terbaca) -->
            <tr>
                <form action="{{ route('bukus.store') }}" method="POST">
                    @csrf
                    <td><input type="text" name="judul" placeholder="Judul" required></td>
                    <td><input type="text" name="penulis" placeholder="Penulis" required></td>
                    <td><input type="number" name="harga" placeholder="Harga" required></td>
                    <td><input type="text" name="deskripsi" placeholder="Deskripsi"></td>
                    <td colspan="2">
                        <button type="submit" style="width: 100%;">Tambah Data</button>
                    </td>
                </form>
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
                    <!-- Edit menggunakan route name agar lebih aman -->
                    <a href="{{ route('bukus.edit', $buku->id) }}">Edit</a>
                </td>
                <td>
                    <!-- Form Hapus -->
                    <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>