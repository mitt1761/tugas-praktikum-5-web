<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$akun = [
    "Admin" => "pass@admiN1",
    "Anita" => "pass@anitA2",
    "Sapta" => "pass@saptA3",
    "Mifta" => "pass@mit123"
];

if ($username == "" || $password == "") {
    echo "<script>alert('Username dan Password belum diisi');</script>";
    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
} else {
    if (array_key_exists($username, $akun)) {
        if ($akun[$username] == $password) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("location:index.php");
            exit();
        } else {
            echo "<script>alert('Password yang dimasukkan salah');</script>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
        }
    } else {
        echo "<script>alert('Username tidak terdaftar');</script>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    }
}
?>
