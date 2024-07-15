<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $product = htmlspecialchars($_POST['product']);

    // Here you would typically send this data to a database or an email
    // For the purposes of this example, we'll just display a message
    echo "<h1>Pesanan Berhasil</h1>";
    echo "<p>Nama: $name</p>";
    echo "<p>Alamat: $address</p>";
    echo "<p>Produk: $product</p>";
}