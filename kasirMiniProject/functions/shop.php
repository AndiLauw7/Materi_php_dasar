<?php
function hitungSubtotal($products, $keranjang, $qty)
{
    $subTotal = 0;
    foreach ($products as $product) {
        if (in_array($product["nama"], $keranjang)) {
            $jumlah = $qty[$product["nama"]] ?? 0;
            if ($jumlah > 0) {
                $subTotal += $product["harga"] * $jumlah;
            }
        }
    }
    return $subTotal;
}
function hitungDiskon($subTotal)
{
    if ($subTotal >= 120000) {
        return $subTotal * 10 / 100;
    }
    return 0;
}

function hitungOngkir($subTotal)
{
    if ($subTotal > 0) {
        return 10000;
    }
    return 0;
}

function hitungTotalBayar($subTotal, $diskon, $ongkir)
{
    // $ongkir = 0;

    $total = $subTotal - $diskon + $ongkir;
    return $total;
}

function checkout($saldo, $totalBayar)
{
    if ($saldo >= $totalBayar) {
        // return true;
        return $saldo - $totalBayar;
    }
    return false;
}

function cekStok($products, $keranjang, $qty)
{
    foreach ($products as $product) {
        if (in_array($product["nama"], $keranjang)) {
            $jumlah = $qty[$product["nama"]] ?? 0;
            if ($jumlah > $product["stok"]) {
                return false;
            }
        }
    }
    return true;
}

function updateStok($products, $keranjang, $qty)
{
    foreach ($products as $index => $product) {
        if (in_array($product["nama"], $keranjang)) {
            $jumlah = $qty[$product["nama"]] ?? 0;
            if ($jumlah > 0) {
                $products[$index]["stok"] -= $jumlah;
            }
        }
    }
    return $products;
}
