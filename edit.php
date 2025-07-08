<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM warga WHERE id = $id"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Warga</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Edit Data Warga</h1>
    <form method="POST">
        <input type="text" name="nama" value="<?= $data['nama_lengkap'] ?>" placeholder="Nama Lengkap" required>
        <input type="text" name="kk" value="<?= $data['nomor_kk'] ?>" placeholder="Nomor KK" required>
        <input type="text" name="nik" value="<?= $data['nik'] ?>" placeholder="NIK" required>
        <textarea name="alamat" placeholder="Alamat" required><?= $data['alamat'] ?></textarea>
        <select name="status" required>
            <option value="Kepala Keluarga" <?= ($data['status'] == 'Kepala Keluarga') ? 'selected' : '' ?>>Kepala Keluarga</option>
            <option value="Anggota Keluarga" <?= ($data['status'] == 'Anggota Keluarga') ? 'selected' : '' ?>>Anggota Keluarga</option>
        </select>
        <input type="submit" name="update" value="Simpan Perubahan">
    </form>
    <a href="index.php" class="kembali">&larr; Kembali</a>
</di
