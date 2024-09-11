
# Jobsheet 3

### Inheritance
```sh
<?php
// Kelas Person dengan atribut name dan metode getName()
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getNama() {
        return $this->nama;
    }
}

// Kelas Student mewarisi dari Person dengan tambahan atribut studentID
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }
}
```

### Polymorphism
```sh
<?php
// Kelas Teacher yang mewarisi dari Person dengan tambahan atribut teacherID
class Teacher extends Person
{
    private $teacherID;

    public function __construct($name, $teacherID)
    {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Override getName() untuk Teacher
    public function getName()
    {
        return "Teacher Name: " . $this->name;
    }

    public function getTeacherID()
    {
        return $this->teacherID;
    }
}

// Override getName() untuk Student
class Student extends Person
{
    private $studentID;

    public function __construct($name, $studentID)
    {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Override getName() untuk menampilkan format berbeda
    public function getName()
    {
        return "Student Name: " . $this->name;
    }

    public function getStudentID()
    {
        return $this->studentID;
    }
}
```
### Encapsulation
```sh
<?php
class Student extends Person
{
    private $name; // Encapsulation: private attribute
    private $studentID;

    public function __construct($name, $studentID)
    {
        $this->name = $name;
        $this->studentID = $studentID;
    }

    // Setter untuk name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Getter untuk name
    public function getName()
    {
        return "Student Name: " . $this->name;
    }

    // Setter untuk studentID
    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }

    // Getter untuk studentID
    public function getStudentID()
    {
        return $this->studentID;
    }
}
```
### Abstraction
```sh
<?php
// Abstraction: Kelas abstrak Course dengan metode abstrak getCourseDetails()
abstract class Course
{
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan getCourseDetails()
class OnlineCourse extends Course
{
    private $courseName;
    private $platform;

    public function __construct($courseName, $platform)
    {
        $this->courseName = $courseName;
        $this->platform = $platform;
    }

    public function getCourseDetails()
    {
        return "Online Course: " . $this->courseName . " on " . $this->platform;
    }
}

// Kelas OfflineCourse yang mengimplementasikan getCourseDetails()
class OfflineCourse extends Course
{
    private $courseName;
    private $location;

    public function __construct($courseName, $location)
    {
        $this->courseName = $courseName;
        $this->location = $location;
    }

    public function getCourseDetails()
    {
        return "Offline Course: " . $this->courseName . " at " . $this->location;
    }
}
```
## Tugas
## 1-3
### Pembuatan Class Parent & Child

```sh
class Person
{

}

class Mahasiswa extends Person
{

}

class Dosen extends Person
{

}
```
Dengan kode diatas, pembuatan class Person merupakan induk dari class anakan yakni Mahasiswa dan Dosen.

### Pembuatan atribut dan method untuk child class
```sh
protected $nama;

    public function __construct($nama)
    {
        return $this->nama=$nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
```

Encapsulation protected memiliki fungsi agar nilai dari variabel nama juga dapat diakses oleh kedua child class. Method getNama juga diperuntukan untuk child Person dan kedua child class untuk kedepannya.

### Polymorphism
```sh
public function getRole()
    {
        echo "Ini adalah role untuk person dengan nama : " . $this->getNama(). "</br>";
    }
=========================
public function getRole()
    {
        echo "ini adalah role untuk mahasiswa dengan nama : " . $this->getNama() ."</br>";
    }
==========================
public function getRole()
    {
        echo "ini adalah role untuk dosen dengan nama : " . $this->getNama() . "</br>";
    }


```

Seperti yang kita lihat pada code diatas, prinsip polymorphism juga digunakan dikarenakan 1 method memiliki banyak bentuk yang sesuai dengan peruntukan kelasnya.

### Instansiasi
```sh
$psn = new Person ("Arbasya");
$psn->getRole();

$mhs = new Mahasiswa("Alek","230302029");
$mhs->getRole();

$dsn = new Dosen ("Pak Sujay", "2300");
$dsn->getRole();
```
Kita akan menginputkan untuk class Person terlebih dahulu dan disusul oleh Mahasiswa serta Dosen

### Output
```sh
Ini adalah role untuk person dengan nama : Arbasya
ini adalah role untuk mahasiswa dengan nama : Alek
ini adalah role untuk dosen dengan nama : Pak Sujay
```

Berikut adalah output yang kita hasilkan dari berbagai prinsip OOP yang kita gunakan yakni : Encapsulation, Inheritance dan Polymorphism.

## 4
### Pembuatan class abstraction

```sh
abstract class Jurnal
{
protected $nama;

    public function __construct($nama)
    {
        $this->nama=$nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    abstract public function pengajuanJurnal();
}
```

Pembuatan class abstract ditandai dengan kata abstract sebelum kata class.
Menggunakan enkapsulasi protected untuk nama agar data nama bisa digunakan untuk child class dari Jurnal

### Pembuatan abstract function
```sh
abstract public function pengajuanJurnal();
```
abstract function tidak memiliki aksi didalamnya, karena function ini akan diturunkan dan digunakan oleh child class dari Jurnal.

### Pembuatan class JurnalDosen

```sh
class JurnalDosen extends Jurnal
{
    private $nidn;

    public function __construct($nama, $nidn)
    {   
        parent::__construct($nama);
        $this->nidn=$nidn;
    }

    public function pengajuanJurnal()
    {
        echo "Ini adalah cara untuk pengajuan jurnal dosen dengan nama : " .$this->getNama(). "</br>";
    }
}
```
Menggunakan enkapsulasi private untuk nidn agar tidak ada class lain yang dapat menggunakannya.
Pada inisialisasi construct, dikarenakan pada class Jurnal atribut nama sudah diinisialisasi, maka pada class JurnalDosen hanya perlu ditambahkan kode parent construct. Lalu pada method pengajuanJurnal disesuaikan dengan kebutuhan class nya. Hal ini juga berlaku pada class JurnalMahasiswa.

### Pembuatan class JurnalMahasiswa

```sh
class JurnalMahasiswa extends Jurnal
{
    private $nim;

    public function __construct($nama, $nim)
    {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function pengajuanJurnal()
    {
        echo "Ini adalah cara untuk pengajuan jurnal dosen dengan nama : " . $this->getNama() . "</br>";
    }
}
```

### Instansiasi
```sh
$dsn = new JurnalDosen ("Pak Arbasya", "2309");
$dsn->pengajuanJurnal();

$mhs = new JurnalMahasiswa("Arbasya", "230302029");
$mhs->pengajuanJurnal();
```
Dikarenakan Jurnal merupakan abstract class, sehingga tidak perlu di Instansiasi

### Output
```sh
Ini adalah cara untuk pengajuan jurnal dosen dengan nama : Pak Arbasya
Ini adalah cara untuk pengajuan jurnal dosen dengan nama : Arbasya
```
