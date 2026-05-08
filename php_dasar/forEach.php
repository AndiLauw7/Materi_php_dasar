<?php
$buah = ["apel", "jeruk", "mangga"];
foreach ($buah as $key => $value) {
    echo $key + 1 . " buah : " . $value . "<br>";
}

function tampilkanBuah($buah)
{
    foreach ($buah as $key => $value) {
        echo $key + 1 . " buah : " . $value . "<br>";
    }
}

tampilkanBuah(["apel", "jeruk", "mangga"]);
tampilkanBuah(["jambu", "naga", "lemon"]);

function tentukanLulus($nilai)
{
    foreach ($nilai as $nilai) {
        if ($nilai > 60) {
            echo " Lulus";
        } else {
            echo " Tidak Lulus";
        }
        echo "<br>";
    }
}
tentukanLulus([80, 60, 75, 90]);
