<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Warga</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Tambah Data Warga</h1>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="text" name="kk" placeholder="Nomor KK" required>
        <input type="text" name="nik" placeholder="NIK" required>
        <textarea name="alamat" placeholder="Alamat" required></textarea>
        <select name="status" required>
            <option value="Kepala Keluarga">Kepala Keluarga</option>
            <option value="Anggota Keluarga">Anggota Keluarga</option>
        </select>
        <input type="submit" name="simpan" value="Simpan">
    </form>

    <a href="index.php" class="kembali">&larr; Kembali</a>
</div>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kk = $_POST['kk'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    $sql = "INSERT INTO warga (nama_lengkap, nomor_kk, nik, alamat, status) 
            VALUES ('$nama', '$kk', '$nik', '$alamat', '$status')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil disimpan');window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
</body>
</html>
