<?php
require './config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Mendapatkan data produk berdasarkan ID
    $product_query = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
    $product = mysqli_fetch_assoc($product_query);

    if ($product) {
        // Form untuk mengedit data
        echo '<html lang="en">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>UBAH DATA PRODUK</title>';
        echo '<style>';
        echo 'body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }';
        echo 'form { max-width: 400px; margin: 20px auto; background-color: #fff; padding: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); border-radius: 8px; }';
        echo 'h2 { text-align: center; color: #333; }';
        echo 'h4 { text-align: center; color: #333; }';
        echo 'label { display: block; margin-bottom: 8px; color: #333; }';
        echo 'input { width: calc(100% - 16px); padding: 10px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }';
        echo 'input[type="file"] { border: none; }';
        echo 'input[type="submit"] { background-color: #3498db; color: #fff; cursor: pointer; border: none; border-radius: 4px; padding: 10px; transition: background-color 0.3s; }';
        echo 'input[type="submit"]:hover { background-color: #2980b9; }';
        echo '</style>';
        echo '<script>';
        echo 'function confirmUpdate() {';
        echo '  return confirm("Apakah Anda yakin ingin Mengubah data produk?");';
        echo '}';
        echo '</script>';
        echo '</head>';
        echo '<body>';
        echo '<form action="./backend/edit.php" method="post" enctype="multipart/form-data" onsubmit="return confirmUpdate()">';
        echo '<h2>EDIT DATA PRODUK</h2>';
        echo '<h4><a href="show.php">LIHAT DATA PRODUK</a></h4>';
        echo '<input type="hidden" name="id" value="' . $product['id'] . '">';
        echo '<label for="name">Nama Produk:</label>';
        echo '<input type="text" name="name" value="' . $product['name'] . '" required><br>';
        echo '<label for="price">Harga:</label>';
        echo '<input type="text" name="price" value="' . $product['price'] . '" required><br>';
        echo '<label for="image">Gambar Produk:</label>';
        echo '<input type="file" name="image"><br>';
        echo '<input type="submit" name="submit" value="UBAH DATA PRODUK">';
        echo '</form>';
        echo '</body>';
        echo '</html>';
    } else {
        echo "Data produk tidak ditemukan.";
    }
} else {
    echo "ID tidak valid.";
}
?>
