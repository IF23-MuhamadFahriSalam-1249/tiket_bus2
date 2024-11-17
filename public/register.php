<?php
// register.php
require '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim(htmlspecialchars($_POST['username'])); // Sanitasi input
    $password = $_POST['password'];

    // Validasi input sederhana
    if (empty($username) || empty($password)) {
        echo "<p>Username dan password harus diisi.</p>";
    } else {
        // Hash password untuk keamanan
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        try {
            // Periksa apakah username sudah ada di database
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "<p>Username sudah terdaftar, silakan pilih username lain.</p>";
            } else {
                // Simpan data pengguna baru ke database
                $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':password', $hashedPassword);

                if ($stmt->execute()) {
                    echo "<p>Registrasi berhasil. <a href='login.php'>Login di sini</a></p>";
                } else {
                    echo "<p>Terjadi kesalahan saat menyimpan data.</p>";
                }
            }
        } catch (PDOException $e) {
            echo "<p>Terjadi kesalahan: " . $e->getMessage() . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Bus Ticket System</title>
    <link rel="stylesheet" href="../assets/css/style2.css">
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>
</body>

</html>