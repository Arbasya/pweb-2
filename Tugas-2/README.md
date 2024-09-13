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


## Penjelasan Class Data
-`finished.php` adalah sebuah file yang berisi oop php untuk data yang sudah selesai, berikut penjelasannya.
- **Mempersiapkan Query**:
  ```php
  $sql = "SELECT * FROM journals WHERE has_finished = 1";
  $stmt = $this->conn->prepare($sql);
  ```
  Method ini menggunakan query SQL untuk memilih semua data dari tabel journals di mana kolom has_finished bernilai 1.
- **Cek Kesalahan**
  ```php
  if (!$stmt) {
    die("Error in prepare statement: " . $this->conn->error);}
  ```
  - **Eksekusi query**
  ```php
  $stmt->execute();
  ```
  Jika tidak ada kesalahan, query SQL akan dieksekusi untuk mengambil data dari database.

  - **Mengambil Hasil**
  ```php
  $result = $stmt->get_result();
  ```
 Hasil query yang dieksekusi akan disimpan dalam variabel $result.


