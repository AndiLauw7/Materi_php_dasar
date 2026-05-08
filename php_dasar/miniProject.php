<?php

$saldo = 150000;

$products = [
    ["nama" => "Laptop", "harga" => 100000],
    ["nama" => "Mouse", "harga" => 25000],
    ["nama" => "Keyboard", "harga" => 50000],
];
function PageProduct($products)
{
    foreach ($products as $product) {
        echo $product["nama"] . " " . $product["harga"] . "<br>";
    }
}
echo "Daftar Produk <br>";
PageProduct($products);
$keranjang = ["Laptop", "Mouse"];
function hitungSubtotal($products, $keranjang)
{
    $subTotal = 0;
    foreach ($products as $product) {
        if (in_array($product["nama"], $keranjang)) {
            $subTotal += $product["harga"];
        }
    }
    return  $subTotal;
}
echo "<br>";
echo "Keranjang <br>";
echo implode(", ", $keranjang);
echo "<br>";
echo "<br>";
echo hitungSubtotal($products, $keranjang);
echo "<br>";
function hitungDiskon($subtotal)
{
    $diskon = 0;
    if ($subtotal >= 120000) {
        $diskon = $subtotal * 10 / 100;
    }
    return "Diskon = " . $diskon;
}
echo hitungDiskon(125000);

echo "<br>";
function hitungTotalBayar($subtotal, $diskon)
{
    $ongkir = 10000;
    $totalBayar = $subtotal - $diskon + $ongkir;
    return "Total Bayar = " . $totalBayar;
}

echo hitungTotalBayar(125000, 12500);

echo "<br>";
function checkout($saldo, $totalBayar)
{
    if ($saldo >= $totalBayar) {
        $sisaSaldo = $saldo - $totalBayar;
        return "Checkout Berhasil, Sisa Saldo = $sisaSaldo";
    } else {
        return "Saldo tidak cukup";
    }
}

echo checkout(150000, 122500);

echo "<br>";
echo "<br>";
echo "Versi clean code <br>";
$saldo = 150000;
$products = [
    ["nama" => "Laptop", "harga" => 100000],
    ["nama" => "Monitor", "harga" => 75000],
    ["nama" => "Mouse", "harga" => 25000],
    ["nama" => "Keyboard", "harga" => 50000],
];

$tasBelanja = ["Laptop", "Mouse"];
function tampilProduk($products)
{
    foreach ($products as $product) {
        echo $product["nama"] . " " . $product["harga"] . "<br>";
    }
}
function hitungTotalSub($products, $tasBelanja)
{
    $JumlahTotal = 0;
    foreach ($products as $product) {
        if (in_array($product["nama"], $tasBelanja)) {
            $JumlahTotal += $product["harga"];
        }
    }
    return  $JumlahTotal;
}

function hitungTotalDiskon($JumlahTotal)
{
    if ($JumlahTotal >= 120000) {
        return $JumlahTotal * 10 / 100;
    }
    return 0;
}


function hitungTotalPembayaran($JumlahTotal, $potonganHarga)
{
    $ongkir = 10000;
    return $JumlahTotal - $potonganHarga + $ongkir;
}
function cO($saldo, $totalPembayaran)
{
    if ($saldo >= $totalPembayaran) {
        return $saldo - $totalPembayaran;
    }
    return false;
}

echo "=== DAFTAR PRODUK === <br>";
tampilProduk($products);

echo "<br>=== Keranjang === <br>";
echo implode(", ", $tasBelanja);

$JumlahTotal = hitungTotalSub($products, $tasBelanja);
$potonganHarga = hitungTotalDiskon($JumlahTotal);
$totalPembayaran = hitungTotalPembayaran($JumlahTotal, $potonganHarga);
$hasilCo = cO($saldo, $totalPembayaran);

echo "<br>=== Total Pembayaran === <br>";
echo "Sub Total = $JumlahTotal <br>";
echo "Diskon = $potonganHarga <br>";
echo "Total Bayar = $totalPembayaran <br>";
if ($hasilCo !== false) {
    echo "Checkout Berhasil, Sisa Saldo = $hasilCo";
} else {
    echo "Saldo tidak cukup";
}
