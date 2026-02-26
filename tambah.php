<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mahasiswa (nama, npm, jurusan) VALUES ('$nama', '$npm', '$jurusan')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 300px; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        button { padding: 8px 15px; background-color: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>NPM:</label>
            <input type="text" name="npm" required>
        </div>
        <div class="form-group">
            <label>Jurusan:</label>
            <input type="text" name="jurusan" required>
        </div>
        <button type="submit" name="submit">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>
