
# Jobsheet -2
## Contoh Project
```sh
<?php
class Mahasiswa
{
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData()
    {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru)
    {
        $this->jurusan = $jurusanBaru;
    }

    // Metode setter untuk mengubah NIM
    public function setNim($nimBaru)
    {
        $this->nim = $nimBaru;
    }
}

// Instansiasi objek dari class Mahasiswa
$mhs = new Mahasiswa("Arbasya", "230302029", "Teknik Informatika");

// Tampilkan data mahasiswa
$mhs->tampilkanData();

echo "<br>";

// Ubah jurusan mahasiswa
$mhs->updateJurusan("Teknik Mancing");

// Ubah NIM mahasiswa
$mhs->setNim("654321");

// Tampilkan data yang sudah diperbarui
$mhs->tampilkanData();
```

### Output
```sh
Nama: Arbasya
NIM: 230302029
Jurusan: Teknik Informatika

Nama: Arbasya
NIM: 654321
Jurusan: Teknik Mancing
```
## Tugas
### Class
```sh
class Dosen
```
Pembuatan class bernama Dosen

### Constructor untuk menginisialisasi atribut
```sh
public function __construct($nama, $nip, $matakuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }
```
Dengan constructor, kita langsung bisa menginputkan nilai variabel saat dibuat

### Method untuk menampilkan data dosen
```sh
public function tampilkanDosen()
    {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Matakuliah: " . $this->matakuliah . "<br>";
    }

```
Method tampilkanDosen adalah method untuk menampilkan data dosen yang telah di inputkan

### Method untuk merubah/update mata kulian dan NIP
```sh
public function matkulBaru($matkulBaru)
    {
        $this->matakuliah = $matkulBaru;
    }

public function setNip($nipBaru)
    {
        $this->nip = $nipBaru;
    }
```

Method matkulBaru untuk merubah mata kuliah menjadi data yang lebih terbaru, begitupun juga method setNIP.

### Instansiasi
```sh
$dsn = new Dosen("Arbasya", "2300", "Alpro");
$dsn->tampilkanDosen();
$dsn->setNip("2400");
$dsn->matkulBaru("Pweb");
$dsn->tampilkanDosen();

```
Merujuk pada command diatas, kita telah menginisialisasi value object awal dosen dengan NIP 2300 dan mata kuliah Alpro, dengan method yang telah kita buat, kita dapat merubah kedua variabel tersebut menjadi 2400 dan Pweb.

### Output
```sh
Nama: Arbasya
NIP: 2300
Matakuliah: Alpro
=============
Nama: Arbasya
NIP: 2400
Matakuliah: Pweb
```
Dengan menggunakan kedua method diatas, kita dapat merubah value atau nilai pada variabel yang kita inginkan.


