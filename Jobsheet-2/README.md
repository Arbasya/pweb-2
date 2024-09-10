
# Jobsheet -2

### Class
```sh
class Dosen
```
Pembuatan class bernama Dosen

### Constructor untuk menginisialisasi atribut
```sh
public function __construct($nama, $nip, $matakuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }
```
Dengan constructor, kita langsung bisa menginputkan nilai variabel saat dibuat

### Method untuk menampilkan data dosen
```sh
public function tampilkanDosen()
    {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Matakuliah: " . $this->matakuliah . "<br>";
    }

```
Method tampilkanDosen adalah method untuk menampilkan data dosen yang telah di inputkan

### Method untuk merubah/update mata kulian dan NIP
```sh
public function matkulBaru($matkulBaru)
    {
        $this->matakuliah = $matkulBaru;
    }

public function setNip($nipBaru)
    {
        $this->nip = $nipBaru;
    }
```

Method matkulBaru untuk merubah mata kuliah menjadi data yang lebih terbaru, begitupun juga method setNIP.

### Output
```sh
Nama: Arbasya
NIP: 2300
Matakuliah: Alpro
=============
Nama: Arbasya
NIP: 2400
Matakuliah: Pweb
```
Dengan menggunakan kedua method diatas, kita dapat merubah value atau nilai pada variabel yang kita inginkan.


