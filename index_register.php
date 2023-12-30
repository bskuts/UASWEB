<!DOCTYPE html>
<html>
<head>
    <title>Register Page - Solusi Media Anda</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>

    <div class="gambar1">
        <img src="image/gambar9.png">
    </div>

    <div class="logo">
        <img src="image/logo1.png">
    </div>

<div class="kotak_login">
    <h3 class="tulisan_regis">Register</h3>
    <p class="tulisan_registrasi">Selamat Bergabung, Silahkan Isi Semua Data</p>
    <form action="index_register.php" method="post">
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username .." required="required">
        <label>Password</label>
        <input type="password" name="password" class="form_login" placeholder="Password .." required="required">
        <label>Nama</label>
        <input type="text" name="nama_pelanggan" class="form_login" placeholder="Nama .." required="required">
        <label>Email</label>
        <input type="email" name="email_pelanggan" class="form_login" placeholder="Email .." required="required">
        <label>Level</label>
        <input type="text" name="level" class="form_login" placeholder="admin | client ?" required="required">
        <div class="submit-btn">
            <input type="submit" class="tombol_login" name="submit" value="REGISTER">
        </div>
    </form>
</div>

    <div class="gambar2_regis">
        <img src="image/gambar10.png">
    </div>

</body>
</html>

<?php
session_start();
include "admin/sql.php";

// Inisialisasi notifikasi menjadi string kosong
$notification = "";

// Lakukan proses autentikasi di sini
if (isset($_POST['submit'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $np = $_POST['nama_pelanggan'];
    $email = $_POST['email_pelanggan'];

    // Gunakan kunci (key) untuk enkripsi password dengan hash HMAC
    $key = "primakara";
    $hashedpassword = hash_hmac("sha256", $password, $key);

    echo $hashedpassword;

    // Reset AUTO_INCREMENT
    $reset = "ALTER TABLE login AUTO_INCREMENT = 1";
    $query = mysqli_query($con, $reset);

    if ($level == "admin" || $level == "client") 
    {
        $notification = "Berhasil registrasi, username: $username, level: $level";
        $result = mysqli_query($con, "INSERT INTO login (username, password, nama_pelanggan, email_pelanggan, level) VALUES ('$username', '$hashedpassword', '$np', '$email', '$level')");
    } 
    else 
    {
        $notification = "Terjadi kesalahan registrasi";
    }
    // Redirect ke halaman index dengan membawa notifikasi sebagai parameter URL
    header("Location: index_login.php?notification=" . urlencode($notification));
    exit(); // Pastikan untuk keluar setelah melakukan redirect
}


?>