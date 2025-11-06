
<?php

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html> 
<html> 
<head> 
<title>Login Aplikasi</title> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="style.css"> 
</head> 
<body> 
<header>
    <h1>Menu Login</h2>
</header>
<div class="container">
    <div class="login-box">
    <h2>Login</h2>
            
        <?php
            
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal_pass") {
            echo "<p class='error-msg'>Password yang dimasukkan salah</p>";
        } else if ($_GET['pesan'] == "gagal_user") {
            echo "<p class='error-msg'>Username tidak terdaftar</p>";
        } else if ($_GET['pesan'] == "logout") {
            echo "<p class='success-msg'>Anda telah berhasil logout</p>";
        } else if ($_GET['pesan'] == "belum_login") {
            echo "<p class='error-msg'>Anda harus login untuk mengakses halaman</p>";
        }
    }
        ?>

    <form action="ceklogin.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
                
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
                
        <button type="submit">Login</button>
     </form>
</div>
</div>
<footer class="footer">
    UIN Alauddin
    </footer>
</body> 
</html>