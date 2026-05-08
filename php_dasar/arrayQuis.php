<?php


$buah = ["apel", "jeruk", "mangga"];

echo $buah[0];
echo "<br>";

foreach ($buah as $buahs) {
    echo $buahs . "<br>";
}

echo "<br>";
foreach ($buah as $buahs => $value) {
    echo $buahs + 1 . " - " . $value . "<br>";
}

echo "<br>";
$angka = [5, 10, 15, 20];
$total = array_sum($angka);
echo "Total : " . $total;
$total = 0;
echo "<br>";
foreach ($angka as $nilai) {
    $total += $nilai;
}
echo "Total - " .  $total;

echo "<br>";

$user = [
    "nama" => "Andi",
    "umur" => 25,
    "kota" => "Jakarta"
];

foreach ($user as $key => $value) {
    echo $key . " - " . $value . "<br>";
}
echo "<br>";

$nilai = [80, 60, 75, 90];
foreach ($nilai as $value) {
    if ($value >= 70) {
        echo $value . " Lulus" . "<br>";
    } else {
        echo $value . " Tidak Lulus" . "<br>";
    }
}

$angka = [1, 2, 3, 4, 5];
$genap = [];
$ganjil = [];

foreach ($angka as $value) {
    if ($value % 2 === 0) {
        echo $genap[] = $value . " Genap" . "<br>";
    } else {
        echo $ganjil[] = $value . " Ganjil" . "<br>";
    }
}
echo "Genap: "  . "<br>" .  implode(", ", $genap) . "\n";
echo "Ganjil: " . "<br>" . implode(", ", $ganjil) . "\n";

echo "<br>";

$products = [
    ["nama" => "Laptop", "harga" => 10000],
    ["nama" => "Mouse", "harga" => 200]
];
foreach ($products as $product) {
    if ($product["harga"] > 5000) {
        echo $product["nama"] . " Mahal" . "<br>";
    } else {
        echo $product["nama"] . " Murah" . "<br>";
    }
}
