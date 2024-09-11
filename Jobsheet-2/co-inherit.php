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
