<?php
$nilai = 90;
if ($nilai >= 80) {
    echo "A";
} elseif ($nilai >= 70) {
    echo "B";
} elseif ($nilai >= 60) {
    echo "C";
} elseif ($nilai >= 50) {
    echo "D";
} else {
    echo "E";
}
echo "<br>";
$umur = 18;
$status = "Pelajar";


if ($umur >= 18 && $status == "Pelajar") {
    echo "Mahasiswa";
} else {
    echo "Bukan Mahasiswa";
}

echo "<br>";
$nilai = 60;
if ($nilai >= 75) {
    if ($nilai) {
        echo "A";
    } else {
        echo "B";
    }
} else {
    echo "Tidak Lulus";
}
echo "<br>";
$total = 120000;
$member = true;

if ($member && $total > 100000) {
    echo "Diskon 20%";
} else if ($member) {
    echo "Diskon 10%";
} else {
    echo "Tidak Ada Diskon";
}
