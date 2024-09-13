# Sistem Manajemen Jurnal

Ini adalah sistem sederhana berbasis PHP untuk mengelola entri jurnal dengan status selesai dan belum selesai. Sistem ini terhubung ke database MySQL dan menampilkan jurnal yang telah selesai atau belum selesai melalui antarmuka web.

## Struktur Proyek

Proyek ini terdiri dari beberapa file inti berikut:

- `header.php`: Berisi header, navigasi, dan awal dari dokumen HTML.
- `footer.php`: Berisi footer dan tag penutup untuk dokumen HTML.
- `db.php`: Mengelola koneksi ke database menggunakan ekstensi `mysqli`.
- `index.php`: Halaman utama sistem yang menautkan ke halaman jurnal selesai dan belum selesai.
- `finished.php`: Menampilkan daftar jurnal yang telah selesai.
- `unfinished.php`: Menampilkan daftar jurnal yang belum selesai.

## Penjelasan File

### 1. `header.php`
File `header.php` berisi kode HTML untuk navigasi situs. Ini juga menyertakan logika PHP untuk menyorot halaman yang sedang aktif secara dinamis.

### 2. `footer.php`
File `footer.php` disertakan di bagian bawah setiap halaman. File ini berisi tag HTML penutup, konten footer, dan tautan ke file JavaScript Bootstrap.

### 3. `db.php`
File `db.php` berisi kelas sederhana (`DB`) untuk mengelola koneksi database menggunakan MySQLi. Kelas ini digunakan oleh `finished.php` dan `unfinished.php` untuk mengambil data dari tabel `journals`.

### 4. `index.php`
Ini adalah titik masuk utama sistem. Berisi pesan sambutan dan tautan navigasi ke halaman lain (`finished.php` dan `unfinished.php`).

### 5. `finished.php`
File ini menampilkan semua jurnal yang telah selesai dengan melakukan query ke database untuk jurnal yang telah diselesaikan. Ini menggunakan kelas `DB` dari `db.php` untuk mengambil dan menampilkan entri jurnal.

### 6. `unfinished.php`
File ini menampilkan semua jurnal yang belum selesai dengan melakukan query ke database untuk jurnal yang belum diselesaikan. Sama seperti `finished.php`, file ini menggunakan kelas `DB` untuk mengambil dan menampilkan entri jurnal.

## Instruksi Instalasi

Untuk mengatur dan menjalankan proyek ini secara lokal, ikuti langkah-langkah berikut:

### 1. Prasyarat

- **PHP**: Pastikan PHP telah terinstal di sistem Anda.
- **MySQL**: Instal MySQL atau MariaDB untuk mengelola database.
- **Web Server**: Gunakan Apache atau web server apa pun yang mendukung PHP (seperti XAMPP, LAMP, dll.).
- **Bootstrap**: Proyek ini menggunakan Bootstrap untuk styling. Bootstrap CSS dan JS sudah termasuk dari CDN (di `header.php` dan `footer.php`).

### 2. Pengaturan Database

1. Buat database MySQL dengan nama `libraries`.
2. Jalankan SQL berikut untuk membuat tabel `journals`:

   ```sql
   CREATE TABLE journals (
       id INT AUTO_INCREMENT PRIMARY KEY,
       attendance_list_id INT NOT NULL,
       has_finished TINYINT(1) NOT NULL DEFAULT 0,
       has_acc_head_department TINYINT(1) NOT NULL DEFAULT 0,
       lecturer_id INT NOT NULL,
       course_id INT NOT NULL,
       student_class_id INT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
       updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
       deleted_at TIMESTAMP NULL DEFAULT NULL
   );
