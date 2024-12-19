<?php
include 'connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            header ('location: index.php') . $user['nama'];
            exit();
        } else {
<<<<<<< HEAD
            echo "";
=======
            echo "Password salah!";
>>>>>>> 9cdca45aeaae03afd013d28f2f0d2b7ec5ef3b43
        }
    } else {
        echo "Email tidak ditemukan!";
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
        <h2>Login</h2>
        <form method="post" action="login.php">
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
            <a href="./register.php">
                <button type="submit" id="sumbit" class="btn btn-warning">BACK Register</button>
            </a>
        </table>
    </div>
</body>
<<<<<<< HEAD
=======

>>>>>>> 9cdca45aeaae03afd013d28f2f0d2b7ec5ef3b43
</html>