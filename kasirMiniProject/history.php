<?php
$dataTransactions = file_get_contents("./data/transactions.json");
$transactions = json_decode($dataTransactions, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($transactions as $transaction): ?>
        <p>Tanggal : <?php echo $transaction["tglTransaksi"] ?></p>
        <p>Subtotal : <?php echo $transaction["subtotal"] ?? 0 ?></p>
        <p>Diskon : <?php echo $transaction["diskon"] ?></p>
        <p>Ongkir : <?php echo $transaction["ongkir"] ?></p>
        <p>Total : <?php echo $transaction["total"] ?></p>
        <?php foreach ($transaction["daftarItem"] as $item): ?>
            <p>Item : <?php echo $item["nama"] ?></p>
            <p>Harga : <?php echo $item["harga"] ?></p>
            <p>Qty : <?php echo $item["jumlah"] ?? 0 ?></p>
            <p>Total Item : <?php echo $item["totalItem"] ?? 0 ?></p>
            <a href="./invoice.php?id=<?php echo $transaction["id"] ?>" style="display: inline-block; padding: 5px 5px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; font-family: sans-serif;">
                Lihat Detail
            </a>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>

</html>