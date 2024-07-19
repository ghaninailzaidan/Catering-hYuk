
# Catering Platform

## Deskripsi Proyek
Platform digital yang bertujuan untuk membantu UMKM dan pengusaha kuliner rumahan menjangkau pelanggan yang lebih luas dengan menyediakan layanan pemesanan catering secara online.

## Fitur Utama
- Pendaftaran dan profil untuk UMKM dan pengusaha kuliner rumahan.
- Pencarian dan pemfilteran catering berdasarkan jenis makanan, lokasi, harga, dan rating.
- Sistem pemesanan online yang aman dan mudah digunakan.
- Sistem pembayaran online (sementara menggunakan transfer manual).
- Ulasan dan rating untuk meningkatkan kepercayaan konsumen.

## Prasyarat
- [XAMPP](https://www.apachefriends.org/index.html) atau software serupa untuk menjalankan server lokal.
- Browser modern (Google Chrome, Mozilla Firefox, dll).

## Langkah-Langkah Instalasi

### 1. Clone Repository
Clone repository GitHub ini ke dalam direktori htdocs pada XAMPP:
```sh
cd /path/to/htdocs
git clone https://github.com/username/repository-name.git
cd repository-name
```

### 2. Menjalankan XAMPP
1. Buka XAMPP dan jalankan `Apache` dan `MySQL`.
2. Akses phpMyAdmin melalui browser: `http://localhost/phpmyadmin`.

### 3. Import Database
1. Di phpMyAdmin, buat database baru. Misalkan `catering_db`.
2. Klik pada database yang baru dibuat.
3. Pilih tab `Import`.
4. Klik `Choose File` dan pilih file SQL database yang terdapat dalam folder `database` di repository ini.
5. Klik `Go` untuk memulai proses import.

### 4. Konfigurasi File
1. Buka file `config.php` atau file konfigurasi lainnya yang ada di dalam project.
2. Sesuaikan konfigurasi database dengan informasi berikut:
   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'catering_db');
   ```

### 5. Menjalankan Website
1. Buka browser dan akses `http://localhost/repository-name`.
2. Anda akan melihat halaman utama dari platform catering.

## Struktur Direktori
Berikut adalah struktur direktori dari project ini:
```
repository-name/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── database/
│   └── catering_db.sql
├── includes/
│   ├── header.php
│   └── footer.php
├── config.php
├── index.php
└── README.md
```

## Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request atau hubungi kami melalui email.

## Lisensi
Proyek ini dilisensikan di bawah [Nama Lisensi]. Lihat file `LICENSE` untuk informasi lebih lanjut.
