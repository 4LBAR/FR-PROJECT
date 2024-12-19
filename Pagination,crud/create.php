<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Tambah</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>nama kelas </label>
                    <input type="text" name="nama_kelas" class="form-control" required>
            </div>
            <div class="form-group">
                <label>jumlah siswa</label>
                    <input type="number" name="jumlah_siswa" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">simpan</button>
            <a href="index.php" class="btn btn-secondary">kembali</a>
        </form>

            <?php 
                if (isset($_POST['submit'])) {
                    $nama_kelas = $_POST['nama_kelas'];
                    $jumlah_siswa = $_POST['jumlah_siswa'];
            
                    $stmt = $pdo->prepare('INSERT INTO kelas (nama_kelas, jumlah_siswa) VALUES (?, ?)');
                    $stmt->execute([$nama_kelas, $jumlah_siswa]);
            
                    echo "<div class='alert alert-success mt-3'>Data berhasil ditambahkan!</div>";
                }
            ?>
    </div>
</body>
</html>