# Webto

## 🛠️ Required Version

Sebelum menjalankan proyek ini, pastikan lingkungan pengembangan (development environment) Anda memenuhi spesifikasi versi berikut:

* **PHP:** `8.4.1 (cli)` (built: Nov 21 2024 08:58:37) (NTS)
* **Composer:** `2.8.3` (2024-11-17 13:13:04)
* **Laravel Installer:** `5.25.3`
* **Node.js:** `v24.15.0`
* **MySQL:** `Ver 9.4.0` / XAMPP

---

## 🚀 How to Run

Ikuti langkah-langkah di bawah ini secara berurutan untuk menjalankan proyek di perangkat lokal Anda:

### 1. Clone Repository
Klon repositori ini ke komputer Anda dan masuk ke direktori proyek:
```bash
git clone https://github.com/AhmadRendi/webto.git
```

### 2. Install Dependency PHP
Unduh semua dependensi PHP yang dibutuhkan aplikasi menggunakan Composer:
```bash
composer install
```

### 3. Konfigurasi Environment File
Salin file `.env.example` menjadi file `.env` untuk mengatur konfigurasi lokal Anda:
```bash
cp .env.example .env
```
Buka file `.env` tersebut menggunakan teks editor pilihan Anda, kemudian sesuaikan bagian konfigurasi database menjadi seperti berikut:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webto
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key
Jalankan perintah ini untuk membuat *application key* unik demi keamanan *session* dan enkripsi data Laravel Anda:
```bash
php artisan key:generate
```

### 5. Install Dependency JavaScript
Pasang semua paket *frontend library* yang dibutuhkan menggunakan Node Package Manager:
```bash
npm install
```

### 6. Jalankan MySQL / XAMPP
Pastikan layanan **MySQL** pada XAMPP Control Panel atau database server lokal Anda sudah dalam status **Running**.

### 7. Buat Database Baru
Akses database manager Anda (seperti phpMyAdmin atau aplikasi sejenis), kemudian buat database baru dengan nama:
```text
webto
```
*(Opsional) Jika proyek Anda memiliki file migrasi tabel, Anda bisa menjalankan perintah berikut untuk membuat struktur tabel secara otomatis:*
```bash
php artisan migrate
```

### 8. Jalankan Server Proyek
Buka terminal dan jalankan server lokal Laravel menggunakan perintah berikut:
```bash
php artisan serve
```
*Catatan: Buka terminal baru (terpisah) di folder yang sama, lalu jalankan perintah di bawah ini untuk mengompilasi aset frontend secara real-time:*
```bash
npm run dev
```

### 9. Akses Aplikasi
Setelah semua server berjalan dengan baik, buka web browser pilihan Anda dan akses aplikasi melalui tautan berikut:
👉 **[http://localhost:8000](http://localhost:8000)**