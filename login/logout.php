<?php
session_start();
session_destroy();
header('Location: login.php'); // Mengarahkan ke index.php setelah logout
exit(); // Menambahkan exit untuk menghentikan eksekusi skrip
?>
