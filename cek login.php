<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'admin/sql.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

$key = "primakara";
$hashedpassword = hash_hmac("sha256", $password, $key);
 
 
// menggunakan prepared statement untuk mencegah SQL injection
$login = mysqli_prepare($con, "SELECT * FROM login WHERE username=? AND password=?");

// melakukan binding parameter
mysqli_stmt_bind_param($login, "ss", $username, $hashedpassword);

// mengeksekusi prepared statement
mysqli_stmt_execute($login);

// mendapatkan hasil query
$result = mysqli_stmt_get_result($login);

// menghitung jumlah baris hasil query
$cek = mysqli_num_rows($result);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($result);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard admin
		header("location:admin/index_admin.php");
		exit();
 
	// cek jika user login sebagai client
	}else if($data['level']=="client"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "client";
		$_SESSION['status'] = "login";
		$_SESSION['id'] = $data['id_pelanggan'];
		$_SESSION['nama'] = $data['nama_pelanggan'];
		// alihkan ke halaman dashboard client
		header("location: home.php?username=" . urlencode($username) . "&id_pelanggan=" . $_SESSION['id']."&nama=".$_SESSION['nama']);
		exit();
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index_login.php?pesan=gagal");
		exit();
	}	
}else{
	header("location:index_login.php?pesan=gagal");
	exit();
}
 
?>