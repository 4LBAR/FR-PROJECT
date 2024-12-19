<?php 
include 'config.php';
$id = $_GET['id'];

// Hapus kelas
$stmt = $pdo->prepare('DELETE FROM kelas WHERE id = ?');
$stmt->execute([$id]);

if ($stmt->execute()){
    header('location: index.php');
    exit();
}
?>