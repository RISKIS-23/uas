<?php
include "koneksi.php";
$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM warga WHERE id = $id")) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data.";
}
?>
