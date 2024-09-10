<?php
abstract class Pengguna
{
    protected $nama, $nim, $nip;
    abstract public function aksesFitur();

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

class Dosen extends Pengguna
{
    public function aksesFitur()
    {
        echo "ini adalah fitur dosen dengan nama : " . $this->getNama() . "</br>";
    }
}

class Mahasiswa extends Pengguna
{
    public function aksesFitur()
    {
        echo "ini adalah fitur mahasiswa dengan nama : " . $this->getNama() . "</br>";
    }
}

$dosen = new Dosen;
$dosen->setNama("Pak Abdau");
$dosen->aksesFitur();

$mhs = new Mahasiswa;
$mhs->setNama("Budi");
$mhs->aksesFitur();
