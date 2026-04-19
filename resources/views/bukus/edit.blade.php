<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .container { max-width: 500px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; }
        input { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
        button { padding: 10px 15px; background: #333; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Data Buku</h2>
    <form action="{{ route('bukus.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Judul Buku:</label>
        <input type="text" name="judul" value="{{ $buku->judul }}" required>
        
        <label>Penulis:</label>
        <input type="text" name="penulis" value="{{ $buku->penulis }}" required>
        
        <label>Harga:</label>
        <input type="number" name="harga" value="{{ $buku->harga }}" required>
        
        <button type="submit">Update Buku</button>
        <a href="{{ route('bukus.index') }}">Kembali</a>
    </form>
</div>

</body>
</html>