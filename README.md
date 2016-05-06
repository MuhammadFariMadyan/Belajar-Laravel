# Belajar-Laravel

Aplikasi ini dibuat dalam rangka belajar laravel 5

## Fitur Aplikasi

* Sign Up
* Login
* Logout
* CRUD Data Buku
* CRUD Data Mahasiswa
* CRUD Data Peminjaman

## Cara Menjalankan

1. Silahkan jalankan perintah `composer install` untuk mendownload dependency yang dibutuhkan
2. silahkan ganti konfigurasi database yang terdapat di dalam file `.env.belajar` sesuai denngan kebutuhan anda
3. ubah file `.env.belajar` menjadi `.env`
4. jalankan perintah `php artisan migrate --seed` untuk melakukan migration database sekaligus seed data ke database
5. jalankan aplikasi dengan perintah `php artisan serve`
6. akses aplikasi di url `http://localhost:8000/`