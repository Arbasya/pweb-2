<?php
class Mahasiswa
    {
        protected $nama, $nim, $jurusan;
        public function __construct($nama, $nim, $jurusan)
        {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }

        public function tampilkanData()
        {
            echo "Nama : " .$this->nama. "</br>";
            echo "Nim : " .$this->nim. "</br>";
            echo "Jurusan : " .$this->jurusan. "</br>";
        }
    }

    $mhs = new Mahasiswa("Arbasya", "230302029", "Teknik Mancing");
    $mhs -> tampilkanData(); 
?>