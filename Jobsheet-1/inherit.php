<?php
class Pengguna
    {
        protected $nama;

        public function setNama($nama)
        {
            $this->nama=$nama;
        }

        public function getNama() 
        {
            return $this->nama;
        }
    }

    class Dosen extends Pengguna 
    {
        protected $matkul;

        public function setMatkul($matkul)
        {
            $this->matkul = $matkul;
        }

        public function getMatkul()
        {
            return $this->matkul;
        }

        public function tampilkanData()
        {
            echo "Nama : " . $this->getNama() . "</br>";
            echo "Matakuliah : " . $this->getMatkul() . "</br>";
        }
    }
    $dosen = new Dosen();
    $dosen->setNama("Arbasya");
    $dosen->setMatkul("Pemrograman Web");
    $dosen->tampilkanData();
?>