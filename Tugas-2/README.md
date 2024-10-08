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
Class data adalah turunan dari class DB. Berikut penjelasannya
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
- **Mengambil Nilai Variabel**
  ```php
  if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->id = $row['id'];
                $this->attendance_list_id = $row['attendance_list_id'];
                $this->has_finished = $row['has_finished'];
                $this->has_acc_head_department = $row['has_acc_head_department'];
                $this->lecturer_id = $row['lecturer_id'];
                $this->course_id = $row['course_id'];
                $this->student_class_id = $row['student_class_id'];
                $this->created_at = $row['created_at'];
                $this->updated_at = $row['updated_at'];
                $this->deleted_at = $row['deleted_at'];

                $this->displayData();
            }
        } else {
            echo "<div class='alert alert-warning'>Journal not found.</div>";
        }
  ```
  Menggunakan metode fetch assoc agar bisa memanggil data dalam bentuk array assosiatif.

- **Menampilkan Data**
  ```php
  public function displayData()
    {
        echo '
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Journal ID: ' . $this->id . '</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Attendance List ID:</strong> ' . $this->attendance_list_id . '</li>
                    <li class="list-group-item"><strong>Has Finished:</strong> ' . ($this->has_finished ? 'Yes' : 'No') . '</li>
                    <li class="list-group-item"><strong>Head Department Approval:</strong> ' . ($this->has_acc_head_department ? 'Yes' : 'No') . '</li>
                    <li class="list-group-item"><strong>Lecturer ID:</strong> ' . $this->lecturer_id . '</li>
                    <li class="list-group-item"><strong>Course ID:</strong> ' . $this->course_id . '</li>
                    <li class="list-group-item"><strong>Student Class ID:</strong> ' . $this->student_class_id . '</li>
                    <li class="list-group-item"><strong>Created At:</strong> ' . $this->created_at . '</li>
                    <li class="list-group-item"><strong>Updated At:</strong> ' . $this->updated_at . '</li>
                    <li class="list-group-item"><strong>Deleted At:</strong> ' . ($this->deleted_at ?? 'Not deleted') . '</li>
                </ul>
            </div>
        </div>';
    }
  
  ```
  Diatas adalah method untuk menampilkan data dengan styling. Analogi sederhananya ialah cukup dengan echo lalu $this->NamaVariabel yang ingin ditampilkan.

  **Cara diatas juga berlaku untuk data yang unfinished, hanya berbeda query saja**

# Penjelasan Class `DB`

Class `DB` dalam proyek ini adalah komponen yang bertanggung jawab untuk mengelola koneksi ke database MySQL dan menjalankan query SQL. Berikut adalah penjelasan mendetail tentang class `DB` yang terdapat dalam file `db.php`.

## Struktur Class `DB`

### 1. **Properti**
- **`$conn`**: Properti ini menyimpan objek koneksi MySQLi yang digunakan untuk berinteraksi dengan database.

### 2. **Konstruktor**

#### `__construct()`
```php
public function __construct()
{
    $this->conn = new mysqli("localhost", "root", "", "libraries");

    if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
    }
}
```
**Fungsi**: Konstruktor class DB dipanggil saat objek class ini dibuat. Fungsi utama dari konstruktor adalah untuk menginisialisasi koneksi ke database.
**Koneksi Database**: Koneksi dibuat dengan menggunakan host localhost, username root, password kosong (default), dan nama database libraries.
**Pengecekan Kesalahan**: Jika terjadi kesalahan saat mencoba menyambung ke database, pesan error akan ditampilkan dan eksekusi akan dihentikan menggunakan die().

### Method
```php
public function query($sql)
{
    $result = $this->conn->query($sql);

    if ($result === false) {
        echo "Error: " . $this->conn->error;
        return false;
    }

    return $result;
}
```
***Fungsi***: Method ini digunakan untuk menjalankan query SQL yang diberikan dalam bentuk string.
***Eksekusi Query***: Query dieksekusi menggunakan metode query() dari objek koneksi MySQLi.
***Penanganan Kesalahan***: Jika terjadi kesalahan saat menjalankan query, pesan error ditampilkan, dan method ini mengembalikan false.
***Pengembalian***: Jika query berhasil dieksekusi, hasilnya dikembalikan.

# Output
![Index](https://github.com/Arbasya/pweb-2/blob/main/Tugas-2/Output%20Tugas%202/index.png?raw=true)
![Finished Data](https://github.com/Arbasya/pweb-2/blob/main/Tugas-2/Output%20Tugas%202/finished-1.png?raw=true)
![Finished Data-2](https://github.com/Arbasya/pweb-2/blob/main/Tugas-2/Output%20Tugas%202/finished-2.png?raw=true)
![Unfinished Data](https://github.com/Arbasya/pweb-2/blob/main/Tugas-2/Output%20Tugas%202/unfinished.png?raw=true)
![Unfinished Data-2](https://github.com/Arbasya/pweb-2/blob/main/Tugas-2/Output%20Tugas%202/unfinished-2.png?raw=true)

