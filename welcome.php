<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Berhasil Login</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
    <p>Anda berhasil login menggunakan autentikasi sederhana.</p>
    <a href="logout.php">Logout</a>
</body>
</html>