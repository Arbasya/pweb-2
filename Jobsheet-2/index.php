<?php
class Mahasiswa
{
    private $nama, $nim, $jurusan;

    public function __construct($nama, $nim, $jurusan)
    {
    $this->nama=$nama;
    $this->nim=$nim;
    $this->jurusan=$jurusan;
    }
    public function getNama()
    {
        return $this->nama;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function tampilkanData()
    {
        echo $this->getNama(). "</br>" .$this->getNim(). "</br>" .$this->getJurusan(). "</br>";
    }

}

class Dosen
{
    private $nama, $nip, $jurusan;

    public function __construct($nama, $nip, $jurusan)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->jurusan = $jurusan;
    }
    public function getNama()
    {
        return $this->nama;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function tampilkanDosen()
    {
        echo $this->getNama() . "</br>" . $this->getNip() . "</br>" . $this->getJurusan() . "</br>";
    }
}

$mhs = new Mahasiswa("Alek", "2302028","Teknik Mancing");
$mhs ->tampilkanData();

$dsn = new Dosen("Arbasya","230302029","KomputerBisnis");
$dsn->tampilkanDosen();
?>