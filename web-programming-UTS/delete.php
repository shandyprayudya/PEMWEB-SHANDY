<!-- delete.php -->
<?php
require './config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($db_connect, "DELETE FROM products WHERE id=$id");

    if ($result) {
        echo "Produk berhasil dihapus.";
    } else {
        echo "Error deleting data: " . mysqli_error($db_connect);
    }
} else {
    echo "Product ID not provided";
}
?>
