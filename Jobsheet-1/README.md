
# JOBSHEET 1

Melalui jobsheet ini, mahasiswa diharapkan mampu mengimplementasikan konsep
dasar OOP dalam pemrograman PHP dengan membuat class, objek, serta
menerapkan prinsip Encapsulation, Inheritance, Polymorphism, dan Abstraction.

## Kelas & Objek
### Kelas (class)

```php
class Mahasiswa
```

Kelas dalam PHP adalah template yang mewakili entitas dan mewakili atribut dan method dalam kelas tersebut.


### Objek (object)

```sh
$mhs = new Mahasiswa;
```

Objek dalam PHP ialah output dari class. dan object dapat menampilkan atau mengelola isi class. seluruh isi class akan kita instansiasikan menjadi object.


## Atribut &  Method

### Atribut
```sh
PUBLIC $nama;
PROTECTED $nim;
PRIVATE $umur;
```

Atribut adalah data yang terdapat dalam sebuah class. Jika kita menganalogikan tentang laptop, atribut dari laptop bisa berupa merk, warna, jenis processor, ukuran layar, dan lain-lain.

Atribut memiliki 3 jenis yaitu :
- PUBLIC : yaitu atribut yang nilainya bisa diakses oleh semua class.
- PROTECTED : yaitu atribut yang nilainya hanya bisa diakses oleh class pembuatnya ataupun class turunannya.
- PRIVATE : atribut yang hanya bisa digunakan pada class yang membuat.

### Method

```sh
public function setNama($nama)
    {
        $this->nama = $nama;
    }
```
Method adalah sebuah aksi dalam class, yang dieksekusi untuk melakukan perintah tertentu
### Constructor
Contruktor adalah merupakan suatu method yang akan memberikan nilai awal pada saat suatu objek dibuat. Pada saat program dijalankan, constructor akan langsung memberikan nilai awal pada saat perintah new



# Prinsip OOP

## Encapsulation

```sh
private $umurl;
protected $nim;
public $nama;
```
Enkapsulasi adalah salah satu yang paling terpenting di dalam pemrograman berorientasi objek(OOP). karena tahap enkapsulasi lah yang menentukan pemberian hak akses pada setiap property atau method.  enkapsulasi atau encapsulation pada OOP terdiri dari 3. yaitu : Public, Private dan Protected.

### Contoh Project

```sh
<?php
class Mahasiswa
    {
        private $nama, $nim, $jurusan;

        //Membuat encapsulasi data menjadi private 

        public function setNama($nama) // function untuk set Nama
        {
            $this->nama = $nama;
        }
        public function getNama() // function untuk mendapatkan nilai variabel nama
        {
            return $this->nama;
        }

        public function setNim($nim) // function untuk set NIM
        {
            $this->nim = $nim;
        }
        public function getNim() // function untuk mendapatkan vilai variabel NIM
        {
            return $this->nim;
        }

        public function setJurusan($jurusan) // function untuk mengeset jurusan
        {
            $this->jurusan = $jurusan;
        }
        public function getJurusan() // function untuk mendapatkan nilai variabel jurusan
        {
            return $this->jurusan;
        }

        public function tampilkanData() // function untuk menampilkan data
        {
            echo "Nama : " . $this->getNama() . "</br>";
            echo "Nim : " .$this->getNim(). "</br>";
            echo "Jurusan : " .$this->getJurusan(). "</br>";
        }
    }
    $mhs = new Mahasiswa(); // instansiasi mahasiswa
    $mhs->setNama("Arbasya");
    $mhs->setNim("230302029");
    $mhs->setJurusan("Teknik Mancing");
    $mhs->tampilkanData();

    //output :  Arbasya
                230302029
                Teknik Mancing
?>
```

## Inheritance

```sh
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

    class Dosen extends Pengguna #class dosen disini merupakan class turunan pengguna
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
```
inheritance adalah suatu kemampuan membentuk class baru yang memiliki fungsi turunan dan mirip dengan fungsi yang sudah ada sebelumnya. Dengan kata lain, inheritance menurunkan atau mewariskan metode yang dimilikinya kepada class lain.

### Class dasar
Class dasar, juga disebut sebagai class induk atau class orangtua (base class atau parent class), adalah class yang sudah ada dan berisi sifat dan perilaku umum yang ingin diwariskan ke class turunan.

### Class turunan
Class turunan, juga disebut sebagai class anak atau class turunan (derived class atau child class), adalah class baru yang dibuat untuk mewarisi sifat dan perilaku dari class dasar.

### Contoh Project
```sh
class Pengguna
    {
        protected $nama; // membuat encap data menjadi protected agar bisa dipakai untuk class turunan

        public function setNama($nama) // function untuk mengeset nama
        {
            $this->nama=$nama;
        }

        public function getNama() // function untuk mengambil nilai variabel nama
        {
            return $this->nama;
        }
    }

    class Dosen extends Pengguna // membuat class turunan Pengguna
    {
        protected $matkul;

        public function setMatkul($matkul) // function untuk mengeset matkul
        {
            $this->matkul = $matkul;
        }

        public function getMatkul() // function untuk mengambil nilai variabel matkul
        {
            return $this->matkul;
        }

        public function tampilkanData() // function untuk menampilkan data
        {
            echo "Nama : " . $this->getNama() . "</br>";
            echo "Matakuliah : " . $this->getMatkul() . "</br>";
        }
    }
    $dosen = new Dosen(); // instansiasi dosen
    $dosen->setNama("Arbasya");
    $dosen->setMatkul("Pemrograman Web");
    $dosen->tampilkanData();

    //output :  Arbasya
                Pemrograman Web
?>
```

## Polymorphism
```sh
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
```
Polymorphism adalah kemampuan 2 buah object yang berbeda untuk merespon pesan permintaan yang sama dalam suatu cara yang unik. Seperti mencoba menjalankan fungsi aksesFitur(), 2 buah class yaitu Pengguna dan dosen bisa mengeksekusinya dengan berbeda.

### Contoh Project
```sh
    <?php
    class Pengguna
    {
        protected $nama, $nim, $nip; // mengeset encap data menjadi protected agar bisa digunakan oleh class turunan
        public function aksesFitur() // mengeset function akses fitur untuk pengguna
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

    class Dosen extends Pengguna // membuat class dosen turunan dari pengguna
    {
        public function aksesFitur() // mengeset function akses fitur untuk dosen
        {
            echo "ini adalah fitur dosen dengan nama : " . $this->getNama(). "</br>";
        }
    }

    class Mahasiswa extends Pengguna // membuat class mahasiswa turunan dari pengguna
    {
        public function aksesFitur() // mengeset function akses fitur untuk mahasiswa
        {
            echo "ini adalah fitur mahasiswa dengan nama : " . $this->getNama() . "</br>";
        }
    }

    $pgn = new Pengguna(); // instansiasi pengguna
    $pgn->aksesFitur();

    $dosen = new Dosen; // instansiasi dosen
    $dosen->setNama("Pak Abdau");
    $dosen->aksesFitur();

    $mhs = new Mahasiswa; // instansiasi mahasiswa
    $mhs->setNama("Budi");
    $mhs->aksesFitur();
    // output : ini adalah fitur pengguna
                ini adalah fitur dosen dengan nama Pak Abdau
                ini adalah fitur mahasiswa dengan Budi
    ?>
```

## Abstract
```sh
abstract class Pengguna
{
    protected $nama, $nim, $nip;
    abstract public function aksesFitur(); #abstract method

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}
```
Abstract Class adalah sebuah class yang tidak bisa di-instansiasi (tidak bisa dibuat menjadi objek) dan berperan sebagai 'kerangka dasar' bagi class turunannya. Di dalam abstract class umumnya akan memiliki abstract method.

### Abstract Method
Abstract Method adalah sebuah 'method dasar' yang harus diimplementasikan ulang di dalam class anak (child class). Abstract method ditulis tanpa isi dari method, melainkan hanya 'signature'-nya saja. Signature dari sebuah method adalah bagian method yang terdiri dari nama method dan parameternya (jika ada).

### Contoh Project
```sh
<?php
abstract class Pengguna
{
    protected $nama, $nim, $nip; // membuat encap data menjadi protected agar bisa diturunkan ke class anak
    abstract public function aksesFitur(); // inisialisasi function akses fitur

    public function setNama($nama) // function untuk mengeset nama
    {
        $this->nama = $nama;
    }

    public function getNama() // function untuk mengambil nilai variabel nama
    {
        return $this->nama;
    }
}

class Dosen extends Pengguna // membuat class dosen dari turunan pengguna
{
    public function aksesFitur() // membuat function akses fitur untuk dosen
    {
        echo "ini adalah fitur dosen dengan nama : " . $this->getNama() . "</br>";
    }
}

class Mahasiswa extends Pengguna // membuat class mahasiswa turunan dari pengguna
{
    public function aksesFitur() // membuat function akses fitur untuk mahasiswa
    {
        echo "ini adalah fitur mahasiswa dengan nama : " . $this->getNama() . "</br>";
    }
}

// karna pengguna merupakan class abstract, sehingga tak perlu di instansiasi

$dosen = new Dosen; // instansiasi dosen
$dosen->setNama("Pak Abdau");
$dosen->aksesFitur();

$mhs = new Mahasiswa; // instansiasi mahasiswa
$mhs->setNama("Budi");
$mhs->aksesFitur();

// output : ini adalah fitur dosen dengan nama Pak Abdau
            ini adalah fitur mahasiswa dengan nama Budi

```









