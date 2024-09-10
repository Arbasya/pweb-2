<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>

<body>
    <?php
    class Pengguna
    {
        protected $nama, $nim, $nip;
        public function aksesFitur()
        {
            echo "Ini adalah fitur pengguna </br>";
        }

        public function setNama ($nama)
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
        public function aksesFitur()
        {
            echo "ini adalah fitur dosen dengan nama : " . $this->getNama(). "</br>";
        }
    }

    class Mahasiswa extends Pengguna
    {
        public function aksesFitur()
        {
            echo "ini adalah fitur mahasiswa dengan nama : " . $this->getNama() . "</br>";
        }
    }

    $pgn = new Pengguna();
    $pgn->aksesFitur();

    $dosen = new Dosen;
    $dosen->setNama("Pak Abdau");
    $dosen->aksesFitur();

    $mhs = new Mahasiswa;
    $mhs->setNama("Budi");
    $mhs->aksesFitur();
    ?>
</body>

</html>