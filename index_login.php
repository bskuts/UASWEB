<!DOCTYPE html>
<html>
<head>
	<title>Login Page - Solusi Meida Anda</title>
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
		<div class="alrt">
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
			}
		}
		?>
		</div>
		<h3 class="tulisan1">Login</h3>
		<p class="tulisan_login">Selamat Datang, Silahkan login</p>
		<form action="cek login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<div class="submit-btn">
				<input type="submit" class="tombol_login" value="LOGIN">
			</div>

			<div class="pass_regis">
				<p class="regist"><a href="index_register.php" class="regist"> Register </a></p>
				<p> | </p>
				<p class="regist">Lupa Password </p>
			</div>
			
			<br/>
			<br/>
		</form>
	</div>
	
	<div class="gambar2">
		<img src="image/gambar10.png">
	</div>
 
</body>
</html>