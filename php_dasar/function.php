<?php

function tambah($a, $b)
{
    return  $a + $b;
};
echo tambah(1, 2);

echo "<br>";
function inputNama($nama)
{
    return "masukkan nama = $nama";
}
echo inputNama("andi");

echo "<br>";
function inputUmur($umur)
{
    if ($umur >= 18) {
        return "anda sudah dewasa";
    } else {
        return "anda belum dewasa";
    }
}
echo inputUmur(18);
echo "<br>";
echo inputUmur(17);

function hitungTotal($angka)
{
    $total = 0;
    foreach ($angka as $a) {
        $total += $a;
    }
    return $total;
}
echo "<br>";
echo hitungTotal([5, 5, 5, 5, 5]);
echo "<br>";

function bilanganGenap($angka = 10)
{
    for ($i = 0; $i <= $angka; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
}
bilanganGenap(10);

function cekUsia($usia)
{
    if ($usia >= 18) {
        return "Dewasa";
    } else {
        return "Belum Dewasa";
    }
}
echo cekUsia(20);

echo "<br>";
function transferSaldo($saldoAwal, $transfer)
{
    if ($saldoAwal >= $transfer) {
        $sisaSaldo = $saldoAwal - $transfer;
        return "Sisa Saldo = $sisaSaldo";
    } else {
        return "Saldo tidak cukup";
    }
}
echo transferSaldo(100000, 25000);

echo "<br>";
function beliProduk($saldo, $hargaBarang)
{
    if ($saldo >= $hargaBarang) {
        $sisaSaldo = $saldo - $hargaBarang;
        return "Pembelian Barang Berhasil, Sisa Saldo = $sisaSaldo";
    } else {
        return "Saldo tidak cukup";
    }
}

echo beliProduk(100000, 25000);
echo "<br>";
function checkout($saldo, $harga, $ongkir)
{
    $totalPembelian = $harga + $ongkir;
    if ($saldo >= $totalPembelian) {
        $sisaSaldo = $saldo - $totalPembelian;
        return "Checkout Berhasil, Sisa Saldo = $sisaSaldo";
    } else {
        return "Saldo tidak cukup";
    }
}
echo checkout(100000, 70000, 10000);
echo "<br>";

function checkout2($saldo, $harga, $ongkir)
{
    $totalPembelian = $harga + $ongkir;
    if ($saldo < $totalPembelian) {
        return "Saldo tidak cukup";
    }
    $sisaSaldo = $saldo - $totalPembelian;
    return "Checkout Berhasil, Sisa Saldo = $sisaSaldo";
}
echo checkout(100000, 70000, 10000);
echo "<br> ini diskon";
echo "<br> ";
function checkoutDiskon($saldo, $harga, $ongkir, $diskon)
{
    $total = $harga + $ongkir;
    $totalDiskon =  $harga * $diskon / 100;
    $totalAkhir = $total - $totalDiskon;
    if ($saldo < $totalAkhir) {
        return "Saldo tidak cukup";
    }
    $sisaSaldo = $saldo - $totalAkhir;
    return "Checkout Berhasil, Sisa Saldo = $sisaSaldo";
};
echo checkoutDiskon(100000, 70000, 10000, 10);

echo "<br> ini voucher";
echo "<br> ";

function checkoutVoucher($saldo, $harga, $ongkir, $diskon, $voucher)
{
    $total = $harga + $ongkir;
    $totalDiskon =  $harga * $diskon / 100;
    $totalAkhir = $total - $totalDiskon;
    $totalVoucher = $totalAkhir - $voucher;
    if ($totalVoucher < 0) {
        $totalVoucher = 0;
    }
    if ($saldo < $totalVoucher) {
        return "Saldo tidak cukup";
    }
    $sisaSaldo = $saldo - $totalVoucher;
    return "Checkout Berhasil, Sisa Saldo = $sisaSaldo";
}
echo checkoutVoucher(100000, 70000, 10000, 10, 5000);
