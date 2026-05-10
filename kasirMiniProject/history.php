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
            <!-- <?php if (is_array($item)): ?> -->
            <!-- Jika $item adalah Array (Data Benar) -->
            <!-- <p>Nama Item : <?php echo $item["nama"] ?? '-' ?></p> -->
            <!-- <p>Harga : <?php echo $item["harga"] ?? 0 ?></p> -->
            <!-- <p>Qty : <?php echo $item["jumlah"] ?? ($item["qty"] ?? 0) ?></p> -->
            <!-- <p>Total Item : <?php echo $item["totalItem"] ?? 0 ?></p> -->
            <!-- <?php else: ?> -->
            <!-- Jika $item hanya String (Data Rusak/Lama) -->
            <p>Nama Item : <?php echo $item; ?></p>
            <!-- <p style="color: red; font-size: 0.8em;">*Data detail tidak lengkap</p>  -->
            <!-- <?php endif; ?>  -->
        <?php endforeach; ?>
    <?php endforeach; ?>


</body>

</html>