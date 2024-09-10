<?php
class Person
{
    protected $nama;

    public function __construct($nama)
    {
        return $this->nama=$nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getRole()
    {
        echo "Ini adalah role untuk person dengan nama : " . $this->getNama(). "</br>";
    }
}

class Mahasiswa extends Person
{
    private $nim;

    public function __construct($nama,$nim)
    {
        parent::__construct($nama);
        $this->nim=$nim;
        
    }

    public function getRole()
    {
        echo "ini adalah role untuk mahasiswa dengan nama : " . $this->getNama() ."</br>";
    }
}

class Dosen extends Person
{
    private $nidn;

    public function __construct($nama,$nidn)
    {
        parent::__construct($nama);
        $this->nidn=$nidn;

    }

    public function getRole()
    {
        echo "ini adalah role untuk dosen dengan nama : " . $this->getNama() . "</br>";
    }
}

$psn = new Person ("Arbasya");
$psn->getRole();

$mhs = new Mahasiswa("Alek","230302029");
$mhs->getRole();

$dsn = new Dosen ("Pak Sujay", "2300");
$dsn->getRole();
?>