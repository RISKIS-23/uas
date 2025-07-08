<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Warga RT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Daftar Warga RT</h1>

    <form method="GET" action="">
        <input type="text" name="cari" placeholder="Cari nama..." value="<?= $_GET['cari'] ?? '' ?>">
        <input type="submit" value="Cari">
    </form>

    <a href="tambah.php" class="button">+ Tambah Warga</a><br><br>

    <table>
        <tr>
            <th>No</th><th>Nama</th><th>No KK</th><th>NIK</th><th>Alamat</th><th>Status</th><th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $cari = $_GET['cari'] ?? '';
        $sql = "SELECT * FROM warga WHERE nama_lengkap LIKE '%$cari%'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_lengkap'] ?></td>
            <td><?= $row['nomor_kk'] ?></td>
            <td><?= $row['nik'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['status'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
