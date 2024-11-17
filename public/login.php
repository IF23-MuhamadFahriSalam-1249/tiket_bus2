<?php
// login.php
require '../config/db.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim(htmlspecialchars($_POST['username'])); // Sanitasi input
    $password = $_POST['password'];

    // Validasi input sederhana
    if (empty($username) || empty($password)) {
        echo "<p>Username dan password harus diisi.</p>";
    } else {
        try {
            // Ambil data pengguna berdasarkan username
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verifikasi password
                if (password_verify($password, $user['password'])) {
                    $_SESSION['username'] = $username;
                    // Arahkan ke halaman dashboard atau home
                    header("Location: beranda.php");
                    exit();
                } else {
                    echo "<p>Password salah.</p>";
                }
            } else {
                echo "<p>Username tidak ditemukan.</p>";
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
    <title>Login - Bus Ticket System</title>
    <link rel="stylesheet" href="../assets/css/style2.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <!-- Arahkan form ke login.php -->
        <form action="login.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </div>
</body>

</html>