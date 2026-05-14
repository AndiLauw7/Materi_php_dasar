<?php
$dataProducts = file_get_contents("./data/products.json");
$products = json_decode($dataProducts, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./tambahProduct.php" style="display: inline-block; padding: 5px 5px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; font-family: sans-serif;">
        Tambah
    </a>
    <?php foreach ($products as $product): ?>
        <p>Nama : <?php echo $product["nama"] ?></p>
        <p>Harga : <?php echo $product["harga"] ?></p>
        <p>Stok : <?php echo $product["stok"] ?></p>
        <!-- <a href="./invoice.php?id=<?php echo $product["id"] ?>" style="display: inline-block; padding: 5px 5px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; font-family: sans-serif;">
            Edit
        </a>
        <a href="./invoice.php?id=<?php echo $product["id"] ?>" style="display: inline-block; padding: 5px 5px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; font-family: sans-serif;">
            Delete
        </a> -->
    <?php endforeach; ?>
</body>

</html>