<?php
session_start();
if(isset($_SESSION['user'])) {
    header("Location: welcome.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        
        <?php if(isset($_GET['error'])): ?>
            <p class="error">Username atau password salah!</p>
        <?php endif; ?>

        <form action="auth.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>