<?php
require "./functions/shop.php";
// require "./data/products.php";
$dataProduts = file_get_contents("./data/products.json");
$products = json_decode($dataProduts, true);
$saldo = 150000;
// $keranjang = ["Laptop", "Mouse"];
$keranjang = $_POST["keranjang"] ?? [];
$qty = $_POST["qty"] ?? [];
// $ongkir = $_POST["ongkir"] ?? 0;
$subTotal = hitungSubtotal($products, $keranjang, $qty);
$diskon = hitungDiskon($subTotal);
$ongkir = hitungOngkir($subTotal);
$totalBayar = hitungTotalBayar($subTotal, $diskon, $ongkir);
$saldoSekarang = checkout($saldo, $totalBayar);
$stokAman = cekStok($products, $keranjang, $qty);

?>
<html>

<head>
    <title>Toko Andi</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container">
        <h1>Toko Andi</h1>
        <form method="POST">
            <div class="product-card">
                <h2>Produk Belanja</h2>
                <?php foreach ($products as $product): ?>
                    <input
                        type="checkbox"
                        name="keranjang[]"
                        value="<?php echo $product['nama']; ?>"
                        <?php echo in_array($product["nama"], $keranjang) ? 'checked' : ''; ?>>
                    <input
                        type="number"
                        name="qty[<?php echo $product['nama']; ?>]"
                        value="<?php echo $qty[$product['nama']] ?? 0; ?>"
                        min="0">
                    <div>
                        <div>
                            <?php echo $product['nama']; ?>
                            <?php echo  number_format($product['harga']); ?>
                        </div>
                        <div>
                            Stok : <?php echo $product['stok']; ?>
                        </div>
                    </div>
                    <br>
                <?php endforeach;  ?>
            </div>
            <button type="submit">Checkout</button>
            <?php if (!empty($keranjang)): ?>
                <div class="summary">
                    <div>
                        <h2>Keranjang Belanja</h2>
                        <?php $itemValid = false; ?>
                        <?php foreach ($keranjang as $item): ?>
                            <?php foreach ($products as $product): ?>
                                <?php if ($item == $product["nama"]): ?>
                                    <?php $jumlah = $qty[$product["nama"]] ?? 0; ?>
                                    <?php $totalItem = $product["harga"] * $jumlah; ?>
                                    <?php if ($jumlah > 0) : $itemValid = true; ?>
                                        <p><?php echo $product["nama"]; ?>
                                            - x<?php echo $jumlah; ?>
                                            = <?php echo number_format($totalItem); ?> </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                        <?php if (!$itemValid): ?>
                            <!-- <p>Keranjang Kosong</p> -->
                        <?php else : ?>
                            <p>Subtotal : <?php echo  number_format($subTotal); ?></p>
                            <p>Diskon : <?php echo number_format($diskon); ?></p>
                            <p>Ongkir : <?php echo number_format($ongkir); ?></p>
                            <p>Total : <?php echo number_format($totalBayar); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (!$itemValid): ?>
                    <div class="danger-box">Keranjang Kosong</div>
                <?php elseif (!$stokAman): ?>
                    <div class="danger-box">Stok Tidak Cukup</div>
                <?php elseif ($saldoSekarang === false): ?>
                    <div class="danger-box">Saldo Tidak cukup</div>
                <?php else:
                    $products = updateStok($products, $keranjang, $qty);
                    $jsonBaru = json_encode($products);
                    file_put_contents("./data/products.json", $jsonBaru);  ?>

                    <div class="success">Checkout berhasil</div>
                <?php endif; ?>
                <!-- <p>Sisa Saldo : <?php echo $saldoSekarang; ?></p> -->
            <?php endif; ?>
        </form>
    </div>
</body>

</html>