<?php
    $user = $_GET['username'];
    $idp  = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solusi Media Anda</title>
    <!-- Link ke stylesheet CSS Anda jika diperlukan -->
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <header>
        <nav>
            <h1><img src="image/logo1.png" class="logo-nav"></h1>
            <ul>
                <li><a href="home.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>">Beranda</a></li>
                <li><a href="About.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>">Tentang Kami</a></li>
                <li><a href="Index.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>">Layanan</a></li>
                <li><a href="Kontak.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>"><b>Kontak</b></a></li>
                <li><img src="image/user-2.png"></li>
                <li><p><?php echo $username = $user;?></p></li>
                <li><button><a href="logout.php">Log out</a></button></li>
            </ul>
        </nav>
    </header>

    <div class="header1">
        <h1>Kontak kami</h1>
        <h3>BY KELOMPOKSGKARUANTEK | MARKETING, MEDIA SOSIAL, OPTIMIZATION</h3>
    </div>

    <main>
        <!-- Konten utama website Anda akan ditampilkan di sini -->
        <div class="kontak1">
            <div>
                <h2>Anda Butuh Konsultasi Lebih Lanjut?</h2>
                <p>Silahkan hubungi melalui kontak  atau bisa ke lokasi langsung 
                    yang sudah tertera ya </p>
            </div>
            <div>
                <img src="image/gambar5.png" class="gambar5">
            </div>
        </div>

        <div class="kontak1">
            <div>
                <p class="kontak2"><b>Hubungi Kami</b></p>
                <p>Dari beberapa pilihan kontak dibawah sangat 
                    kami sarankan untuk menghubungi kami via 
                    Whatsapp chat untuk respon tercepat saat ini</p>
                
                <p class="kontak2"><b>Whatsapp</b></p>
                <p>0812-3234-5678</p>

                <p class="kontak2"><b>Email</b></p>
                <p>sosmed.nuturer@gmail.com</p>

                <p class="kontak2"><b>Address</b></p>
                <p>Jl. Tukad Badung No.135, Renon, Denpasar Selatan, 
                    Kota Denpasar, Bali 80226</p>
            </div>
            <div>
                <img src="image/gambar6.png" class="gambar5">
            </div>
        </div>

    </main>
    <div>
        <img src="image/gambar4.png" class="gambar3">
    </div>

    <footer>
        <p>Hak Cipta © 2023 Social Nuturer. All Rights Reserved.</p>
    </footer>

</body>

</html>
