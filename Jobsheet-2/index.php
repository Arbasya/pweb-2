<?php
class Dosen
{

    public $nama;
    public $nip;
    public $matakuliah;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nip, $matakuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanDosen()
    {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Matakuliah: " . $this->matakuliah . "<br>";
    }

    // Metode untuk mengubah jurusan
    public function matkulBaru($matkulBaru)
    {
        $this->matakuliah = $matkulBaru;
    }

    // Metode setter untuk mengubah NIM
    public function setNip($nipBaru)
    {
        $this->nip = $nipBaru;
    }
}

$dsn = new Dosen("Arbasya", "2300", "Alpro");
$dsn->tampilkanDosen();
$dsn->setNip("2400");
$dsn->matkulBaru("Pweb");
$dsn->tampilkanDosen();

/*output :
Nama: Arbasya
NIP: 2300
Matakuliah: Alpro
Nama: Arbasya
NIP: 2400
Matakuliah: Pweb
*/
?>
