<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h2 class="text-center">Data Kelas</h2>

        <div class="mb-3">

            <form method="GET" action="">
                <input type="text" name="search" class="form-control" placeholder="nama kelas" i class="fas fa-search">
                <div class="input-group-append mt-3">
                    <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search">Cari</i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <a href="create.php" class="btn btn-success mb-2">Tambah Kelas</a>
    <table class="table table-bordered ">
        <thead>
            <?php
            $id = ('SELECT id FROM kelas ORDER BY ');
            $order = isset($_GET['order']) ? $_GET['order'] : 'asc'; // Menentukan urutan
            echo "<th>id</th>
                <th>Nama Kelas</th>
                <th>Jumlah Siswa</th>"
            ?>
        </thead>
        <tbody>
            <?php
            $pdo->exec('ALTER TABLE kelas AUTO_INCREMENT = 1'); // Mengatur ulang auto-increment
            $limit = 10; // Jumlah data per halaman
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $offset = ($page - 1) * $limit;

            $nama_kelas = isset($_GET['search']) ? $_GET['search'] : ''; // Ambil nilai pencarian

            if ($nama_kelas != '') {
                $pencarian = "WHERE nama_kelas LIKE '%$nama_kelas%'";
            } else {
                $pencarian = '';
            }

            $total_stmt = $pdo->query("SELECT COUNT(*) FROM kelas $pencarian");
            $total_rows = $total_stmt->fetchColumn();
            $total_pages = ceil($total_rows / $limit);

            $stmt = $pdo->query("SELECT id,nama_kelas,jumlah_siswa FROM kelas $pencarian LIMIT $limit OFFSET $offset");
            while ($row = $stmt->fetch()) {
                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama_kelas']}</td>
                <td>{$row['jumlah_siswa']}</td>
                <td>
                    <a href='delete.php?id={$row['id']}' class='btn btn-danger'>Hapus</a>
                     <a href='update.php?id={$row['id']}' class='btn btn-warning'>update</a>
                </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>

    <nav>
        <ul class="pagination">
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?= ($i === $page) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</body>
</html>