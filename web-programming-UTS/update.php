<!-- update.php -->
<?php
require './config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $result = mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

    if ($result) {
        echo "Produk berhasil diperbarui.";
    } else {
        echo "Error updating data: " . mysqli_error($db_connect);
    }
} else {
    echo "Invalid request method.";
}
?>
