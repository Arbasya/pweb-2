<?php
class Mahasiswa
    {
        private $nama, $nim, $jurusan;

        public function setNama($nama)
        {
            $this->nama = $nama;
        }
        public function getNama() 
        {
            return $this->nama;
        }

        public function setNim($nim)
        {
            $this->nim = $nim;
        }
        public function getNim()
        {
            return $this->nim;
        }

        public function setJurusan($jurusan)
        {
            $this->jurusan = $jurusan;
        }
        public function getJurusan()
        {
            return $this->jurusan;
        }

        public function tampilkanData()
        {
            echo "Nama : " . $this->getNama() . "</br>";
            echo "Nim : " .$this->getNim(). "</br>";
            echo "Jurusan : " .$this->getJurusan(). "</br>";
        }
    }
    $mhs = new Mahasiswa();
    $mhs->setNama("Arbasya");
    $mhs->setNim("230302029");
    $mhs->setJurusan("Teknik Mancing");
    $mhs->tampilkanData(); 
?>