<?php
class Laptop
{
    public $merk;
    public $ram;
    public $processor;

    function __construct($merk, $ram, $processor)
    {
        $this->merk = $merk;
        $this->ram = $ram;
        $this->processor = $processor;
    }

    public function infoLaptop()
    {
        return "Laptop ini memiliki merk {$this->merk}, RAM {$this->ram}, dan processor {$this->processor}.";
    }
}

$laptop1 = new Laptop("Asus", "8GB", "Intel Core i7");
echo $laptop1->infoLaptop();

echo "<br>";

class Pegawai
{
    public $nama;
    public $jabatan;
    public $gaji;

    function __construct($nama, $jabatan, $gaji)
    {
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->gaji = $gaji;
    }

    public function infoPegawai()
    {
        return "Nama: {$this->nama}, Jabatan: {$this->jabatan}, Gaji: {$this->gaji}";
    }
}

$pegawai1 = new Pegawai("Budi", "Manager", "Rp. 7.000.000");
echo $pegawai1->infoPegawai();
