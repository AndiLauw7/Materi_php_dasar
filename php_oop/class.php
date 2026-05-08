<?php

class Hewan
{
    public $nama;
    public $jenis;
    public function suara()
    {
        echo "{$this->nama} Hewan ini Bersuara";
    }
}

$hewan = new Hewan();
$hewan->nama = "Kucing";
$hewan->jenis = "Mamalia";
$hewan->suara();

echo "<br>";
class Mahasiswa
{
    public $nim;
    public $nama;

    public function perkenalan()
    {
        return "Halo nama saya {$this->nama}, NIM {$this->nim}";
    }
}
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nim = "12345";
$mahasiswa1->nama = "Budi";
echo $mahasiswa1->perkenalan();

echo "<br>";
class Mobil
{
    public $merk;
    public $warna;
    public $kecepatan;

    public function jalan()
    {
        return "Mobil {$this->merk} berwarna {$this->warna} sedang berjalan dengan kecepatan {$this->kecepatan} km/jam.";
    }
    public function infoMobil()
    {
        return "Mobil ini memiliki merk {$this->merk}, berwarna {$this->warna}.";
    }
}

$mobil1 = new Mobil();
$mobil1->merk = "Toyota";
$mobil1->warna = "Merah";
$mobil1->kecepatan = 100;

echo $mobil1->jalan();
echo "<br>";
echo $mobil1->infoMobil();
