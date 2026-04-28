<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku</title>
    <style>
        body { 
            background-color: #FDFDFC; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            margin: 0; 
            font-family: sans-serif; 
        }
        .container { 
            text-align: center; 
            padding: 40px; 
            background: white; 
            border-radius: 8px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
        }
        .btn { 
            display: inline-block; 
            margin-top: 20px; 
            padding: 10px 20px; 
            background: #1b1b18; 
            color: white; 
            text-decoration: none; 
            border-radius: 5px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Toko Buku</h1>
        <p>Gunakan tombol di bawah untuk mengelola data.</p>
        <a href="{{ route('bukus.index') }}" class="btn">Masuk ke Daftar Buku</a>
    </div>
</body>
</html>