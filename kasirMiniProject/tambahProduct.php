<?php

$nama = $_POST["nama"] ?? "";
$harga = $_POST["harga"] ?? 0;
$stok = $_POST["stok"] ?? 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dataProducts = file_get_contents("./data/products.json");
    $dataProducts = json_decode($dataProducts, true);
    $productTerakhir = end($dataProducts);
    $idEmpty  = empty($productTerakhir) ?  1 : $productTerakhir["id"] + 1;
    $productBaru = ["id" => $idEmpty, "nama" => $nama, "harga" => $harga, "stok" => $stok];

    array_push($dataProducts, $productBaru);
    $jsonBaru = json_encode($dataProducts);
    file_put_contents("./data/products.json", $jsonBaru);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input
            type="text"
            name="nama"
            value="">
        <input
            type="number"
            name="harga"
            value="0"
            min=" 0">
        <input
            type="number"
            name="stok"
            value="0"
            min=" 0">

        <button type="submit">Tambah</button>
    </form>

</body>

</html>