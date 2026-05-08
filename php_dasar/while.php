<?php

$i = 5;
$a = 1;
while ($a <= $i) {
    echo "*" . "<br>";
    $a++;
}

$nilai = 1;
while ($nilai <= 5) {
    echo $nilai . "<br>";
    $nilai++;
}

$angka = 5;
while ($angka <= 10) {
    echo "Niliai input = "  . $angka . " masih harus lebih dari 10 <br>";
    $angka = 12;
}
echo "Input selesai = " . $angka;
echo "<br>";

$angka = 1;
while ($angka <= 10) {
    echo $angka . "Belum Valid" . "<br>";
    $angka++;
}
echo $angka . " Sudah Valid";

echo "<br>";

$angka = 3;
while ($angka <= 10) {
    echo $angka . " gagal<br>";
    $angka = 15;
}
echo $angka . " berhasil";

echo "<br>";

$angka = 1;
while ($angka <= 10) {
    echo $angka . "<br>";
    $angka += 3;
};
echo "selesai";
echo "<br>";

$minus = 100;
while ($minus >= 20) {
    echo $minus . "<br>";
    $minus -= 20;
}
echo "selesai";
echo "<br>";

$fivety = 50;
while ($fivety >= 0) {
    echo $fivety . "<br>";
    $fivety -= 10;
}
echo "selesai";
echo "<br>";

$stokAwal = 5;
while ($stokAwal > 0) {
    // echo $stokAwal . "<br>";
    // echo "Stok Tersedia" . "<br>";
    echo "Stok tersisa: " . $stokAwal . "<br>";
    $stokAwal -= 1;
}
echo "stok Habis";

echo "<br>";
$saldoAwal = 100000;
$tarik = 25000;
// while ($saldoAwal > 0) {
//     $saldoAwal -= 25000;
//     echo "Saldo Tersisa: " . $saldoAwal . "<br>";
// }
// echo "Saldo Habis";

echo "<br>";
while ($saldoAwal > 0) {
    $saldoAwal -= $tarik;
    echo "Tarik: " .  $tarik . " sisa saldo: " . $saldoAwal . "<br>";
    if ($saldoAwal == 0) {
        break;
    }
}

echo "Saldo Habis";

echo "<br>";
$saldoUtama = 90000;
$tarikTunai = 25000;
while ($saldoUtama >= $tarikTunai) {
    $saldoUtama -= $tarikTunai;
    // echo "Tarik: " . $tarikTunai . " sisa saldo: " . $saldoUtama . "<br>";
    echo "Tarik: $tarikTunai | Sisa saldo: $saldoUtama <br>";
    if ($saldoUtama == 0) {
        break;
    }
}
echo "Saldo tidak cukup";

echo "<br>";
echo "<br>";
// $saldoUtuh = 100000;
// $tarikAcak = [30000, 20000, 50000];
// while ($saldoUtuh > 0) {
//     $jumlahTarik = $tarikAcak[rand(0, 2)];
//     if ($saldoUtuh >= $jumlahTarik) {
//         $saldoUtuh -= $jumlahTarik;
//         echo "Tarik: " . $jumlahTarik . " | Sisa saldo: $saldoUtuh <br>";
//     } else {
//         echo "Saldo tidak cukup";
//         break;
//     }
// }
$saldoUtuh = 100000;
$tarikAcak = [30000, 20000, 50000];

while ($saldoUtuh > 0) {
    $jumlahTarik = $tarikAcak[rand(0, 1)];

    if ($saldoUtuh >= $jumlahTarik) {
        $saldoUtuh -= $jumlahTarik;
        echo "Tarik: $jumlahTarik | Sisa saldo: $saldoUtuh <br>";
    } else {
        echo "Saldo tidak cukup";
        break;
    }
}

echo "<br>";
$saldoO = 100000;
$tarikAcak = [30000, 30000, 20000, 20000, 20000];
$maxTarik = 6;
$totalTarik = 0;
while ($saldoO > 0) {
    $jumlahTarik = $tarikAcak[rand(0, 4)];
    $totalTarik++;
    if ($totalTarik > $maxTarik) {
        echo "Transaksi Selesai";
        break;
    }
    if ($saldoO >= $jumlahTarik) {
        $saldoO -= $jumlahTarik;
        echo "Tarik: $jumlahTarik | Sisa saldo: $saldoO <br>";
    } else {
        echo "Saldo tidak cukup";
        break;
    }
}

echo "<br>";
while ($saldoO > 0 && $totalTarik < $maxTarik) {
    $jumlahTarik = $tarikAcak[rand(0, 5)];
    if ($saldoO >= $jumlahTarik) {
        $saldoO -= $jumlahTarik;
        $totalTarik++;
        echo "Tarik: $jumlahTarik | Sisa saldo: $saldoO <br>";
    } else {
        echo "Saldo tidak cukup";
        break;
    }
}
if ($saldoO == 0) {
    echo "Saldo tidak cukup, Sisa saldo $saldoO";
} elseif ($totalTarik == $maxTarik) {
    echo "Transaksi selesai";
}
