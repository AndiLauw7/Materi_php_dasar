<?php
$nilai = 85;
if ($nilai >= 80) {
    echo "A";
} elseif ($nilai >= 70) {
    echo "B";
} elseif ($nilai >= 60) {
    echo "C";
} else {
    echo "D";
}

echo "<br>";
$user = "andi";
$password = 123456;

if ($user == "andi" && $password == 123456) {
    echo "Login Berhasil";
} else {
    echo "Login Gagal";
}

echo "<br>";
$total = 10000;
$member = true;

if ($member == true && $total > 100000) {
    echo "Anda Mendapatkan Diskon 20%";
} else if ($member == true && $total <= 100000) {
    echo "Anda Mendapatkan Diskon 10%";
} else {
    echo "Anda Mendapatkan Diskon 0%";
}

echo "<br>";
$umur = 22;
$ktp = true;
if ($umur >= 17 && $ktp == true) {
    echo " Boleh Memilih";
} else {
    echo " Tidak Boleh Memilih";
}

echo "<br>";
$nilai = 65;
$kehadiran = 80;

if ($nilai >= 70) {
    if ($kehadiran >= 75) {
        echo "Lulus";
    }
} else {
    echo "Tidak Lulus";
}
