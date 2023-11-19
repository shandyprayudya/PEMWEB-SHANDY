<!-- edit.php -->
<?php
require './config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($db_connect, "SELECT * FROM products WHERE id=$id");

    if ($result) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "Error fetching data: " . mysqli_error($db_connect);
        exit();
    }
} else {
    echo "Product ID not provided";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?=$product['id'];?>">
        <label for="name">Nama Produk:</label>
        <input type="text" name="name" value="<?=$product['name'];?>" required><br>

        <label for="price">Harga:</label>
        <input type="text" name="price" value="<?=$product['price'];?>" required><br>

        <label for="image">Link Gambar:</label>
        <input type="text" name="image" value="<?=$product['image'];?>" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
