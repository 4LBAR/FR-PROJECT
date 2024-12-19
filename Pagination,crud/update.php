<?php
include 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM kelas WHERE id = ?');
$stmt->execute([$id]);
$kelas = $stmt->fetch();

if (!$kelas) {
    die('Data tidak ditemukan!');
}

if (isset($_POST['submit'])) {
    $nama_kelas = $_POST['nama_kelas'];
    $jumlah_siswa = $_POST['jumlah_siswa'];

    $stmt = $pdo->prepare('UPDATE kelas SET nama_kelas = ?, jumlah_siswa = ? WHERE id = ?');
    $stmt->execute([$nama_kelas, $jumlah_siswa, $id]);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Edit Kelas</h2>
    <form action="" method="post">
        <div class="form-group">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="<?= $kelas['nama_kelas'] ?>" required>
        </div>
        <div class="form-group">
            <label>Jumlah Siswa</label>
            <input type="number" name="jumlah_siswa" class="form-control" value="<?= $kelas['jumlah_siswa'] ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
