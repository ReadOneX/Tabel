<?php
include 'config.php';

$id = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE mahasiswa SET nama='$nama', npm='$npm', jurusan='$jurusan' WHERE id=$id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal mengubah data: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 300px; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        button { padding: 8px 15px; background-color: #ffc107; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?= $row['nama']; ?>" required>
        </div>
        <div class="form-group">
            <label>NPM:</label>
            <input type="text" name="npm" value="<?= $row['npm']; ?>" required>
        </div>
        <div class="form-group">
            <label>Jurusan:</label>
            <input type="text" name="jurusan" value="<?= $row['jurusan']; ?>" required>
        </div>
        <button type="submit" name="submit">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>
