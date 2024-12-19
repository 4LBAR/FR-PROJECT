<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
<<<<<<< HEAD
        header('Location: index.php'); 
        exit(); 
=======
        header('Location: index.php'); // Menambahkan 'Location:' untuk mengarahkan ke index.php
        exit(); // Menambahkan exit() untuk menghentikan eksekusi script setelah pengalihan
>>>>>>> 9cdca45aeaae03afd013d28f2f0d2b7ec5ef3b43
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Register</h2>
        <form method="post" action="register.php">
        <div class="mb-3 table">
                <label for="nama" class="form-label pr-3">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Login</button>
        </form>
        <table>
            <a href="./login.php">
                <button type="submit" id="sumbit" class="btn btn-warning">BACK LOGIN</button>
            </a>
        </table>
    </div>
</body>
<<<<<<< HEAD
</html>
=======

</html>
>>>>>>> 9cdca45aeaae03afd013d28f2f0d2b7ec5ef3b43
