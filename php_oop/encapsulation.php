<?php
class Bank
{
    private $saldo;

    public function setSaldo($saldo)
    {
        if ($saldo < 0) return "saldo tidak boleh negatif";
        return $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return "Rp." . number_format($this->saldo, 0, ',', '.');
    }
}

$bank = new Bank();
$bank->setSaldo(1000000);
echo $bank->getSaldo();

echo "<br>";

class Mahasiswa
{
    private $nama;
    private $nilai;
    public function setNama($nama)
    {
        return $this->nama = $nama;
    }
    public function setNilai($nilai)
    {
        if ($nilai > 100 || $nilai < 0) return "Nilai tidak valid";
        $this->nilai = $nilai;
    }
    public function getNama()
    {
        return $this->nama;
    }

    public function getNilai()
    {

        return $this->nilai;
    }
}

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Budi");
echo $mahasiswa->setNilai(200);
echo "<br>";
echo " Nama Mahasiswa: " . $mahasiswa->getNama();
echo "<br>";
echo " Nilai Mahasiswa: " . $mahasiswa->getNilai();
