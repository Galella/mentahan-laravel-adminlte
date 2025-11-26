# Laravel Role-Based Access Control System

Sistem manajemen pengguna berbasis role menggunakan Laravel 12 dan AdminLTE template. Aplikasi ini menyediakan sistem autentikasi dan otorisasi berdasarkan role pengguna.

## Fitur Utama

- Sistem otentikasi lengkap (login, logout)
- Sistem role berbasis database
- Middleware otorisasi berdasarkan role
- Manajemen pengguna (CRUD)
- Manajemen role (CRUD)
- Dashboard berbeda berdasarkan role
- Template AdminLTE untuk tampilan profesional

## Instalasi

1. Clone repository ini
2. Jalankan perintah berikut:

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

3. Konfigurasi database di file `.env`
4. Jalankan migrasi dan seeder:

```bash
php artisan migrate --seed
```

5. Jalankan aplikasi:

```bash
php artisan serve
```

## Struktur Role

Sistem ini menyediakan beberapa role bawaan:

- **Super Admin** - Akses penuh ke semua fitur administrasi
- **User** - Akses terbatas ke fitur dasar
- **(dan role lainnya yang bisa dibuat oleh admin)**

## Fitur Manajemen

### Manajemen Pengguna
- Lihat daftar semua pengguna
- Buat pengguna baru
- Edit informasi pengguna
- Hapus pengguna
- Tetapkan atau ubah role pengguna

### Manajemen Role
- Lihat daftar semua role
- Buat role baru
- Edit informasi role
- Hapus role
- Tampilkan jumlah pengguna per role

## Teknologi yang Digunakan

- Laravel 12
- PHP 8.2+
- SQLite (default) atau database lain
- AdminLTE template
- Tailwind CSS
- Vite

## Konfigurasi Default

Beberapa akun default dibuat saat instalasi:
- Admin: email `administrator@example.com` dengan password `password123`
- Role Super Admin memberikan akses ke semua fitur administrasi

## Pengembangan Lebih Lanjut

Sistem ini dirancang untuk mudah dikembangkan dengan fitur-fitur tambahan seperti:
- Sistem hak akses berbasis permissions
- Audit trail
- Notifikasi
- API endpoints
- Fitur pencarian dan filtering lanjutan

## Kontribusi

Silakan fork repository ini dan kirimkan pull request untuk kontribusi pengembangan.# mentahan-laravel-adminlte
