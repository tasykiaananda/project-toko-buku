📚 Project Toko Buku Online (Laravel 12)
Aplikasi manajemen toko buku sederhana yang dibangun dengan Laravel 12 dan PHP 8.2. Aplikasi ini dirancang untuk pemula yang ingin belajar konsep dasar CRUD (Create, Read, Update, Delete) dengan struktur yang bersih dan modern.

🛠️ Stack Teknologi
Framework: Laravel 12

PHP: 8.2+

Database: MySQL (XAMPP)

Styling: CSS Modern

🚀 Fitur Saat Ini
✅ Daftar Buku: Menampilkan koleksi buku dalam tabel yang rapi.

✅ Tambah Buku: Form input untuk menambahkan koleksi buku baru.

✅ Hapus Buku: Fitur untuk menghapus buku dari database.

✅ Desain Responsif: UI yang minimalis dan nyaman dilihat.

⚙️ Cara Instalasi & Menjalankan
Pastikan di komputer kamu sudah terinstall Composer, XAMPP (PHP 8.2), dan Node.js (opsional untuk frontend).

Clone atau unduh project ini.

Buka terminal/CMD di dalam folder project, jalankan:

Bash
composer install
Setup Environment:

Copy file .env.example menjadi .env (atau buat file baru .env).

Buka file .env dan atur koneksi database kamu:

Cuplikan kode
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=project_toko_buku
DB_USERNAME=root
DB_PASSWORD=
Generate Key:

Bash
php artisan key:generate
Migrasi Database:
Pastikan database project_toko_buku sudah ada di phpMyAdmin, lalu jalankan:

Bash
php artisan migrate
Jalankan Aplikasi:

Bash
php artisan serve
Akses website di browser melalui: http://127.0.0.1:8000/buku

📂 Struktur Utama Proyek
app/Http/Controllers/BukuController.php — Logika utama CRUD.

app/Models/Buku.php — Definisi model data buku.

database/migrations/ — Skema tabel database.

resources/views/bukus/index.blade.php — Tampilan halaman depan.

public/css/style.css — Pengaturan gaya desain website.

💡 Tips untuk Tasykia
PHP 8.2: Karena menggunakan PHP 8.2, pastikan ekstensi pdo_mysql sudah aktif di file php.ini XAMPP kamu.

Pengembangan: Kamu bisa mencoba menambahkan fitur Search atau Validasi Foto agar aplikasi ini semakin keren.

Error: Jika aplikasi tidak bisa jalan, coba hapus cache dengan perintah php artisan optimize:clear.

Dibuat dengan dedikasi oleh Tasykia Ananda.