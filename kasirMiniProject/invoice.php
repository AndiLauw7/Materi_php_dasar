<?php
$id = $_GET["id"];
$dataTransactions = file_get_contents("./data/transactions.json");
$transaction = json_decode($dataTransactions, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($transaction as $transaksi): ?>
        <?php if ($transaksi["id"] == $id): ?>
            <p>Tanggal : <?php echo $transaksi["tglTransaksi"] ?></p>
            <p>Subtotal : <?php echo $transaksi["subtotal"] ?? 0 ?></p>
            <p>Diskon : <?php echo $transaksi["diskon"] ?></p>
            <p>Ongkir : <?php echo $transaksi["ongkir"] ?></p>
            <p>Total : <?php echo $transaksi["total"] ?></p>
            <?php foreach ($transaksi["daftarItem"] as $item): ?>
                <p>Item : <?php echo $item["nama"] ?></p>
                <p>Harga : <?php echo $item["harga"] ?></p>
                <p>Qty : <?php echo $item["jumlah"] ?? 0 ?></p>
                <p>Total Item : <?php echo $item["totalItem"] ?? 0 ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>

</body>

</html>