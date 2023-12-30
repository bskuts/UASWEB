<?php
    $nama = $_GET['nama'];
    $user = $_GET['username'];
    $idp  = $_GET['id_pelanggan'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solusi Media Anda</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <header>
        <nav>
            <h1><img src="image/logo1.png" class="logo-nav"></h1>
            <ul>
                <li><a href="home.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>"><b>Beranda</b></a></li>
                <li><a href="About.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>">Tentang Kami</a></li>
                <li><a href="Index.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>">Layanan</a></li>
                <li><a href="Kontak.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>">Kontak</a></li>
                <li><img src="image/user-2.png"></li>
                <li><p><?php echo $username = $nama;?></p></li>
                <li><button><a href="logout.php">Log out</a></button></li>
            </ul>
        </nav>
    </header>

    <div class="header1">
        <h1>Jasa Kelola Sosial Media</h1>
        <h3>21/12/2023 | BY KELOMPOKSGKARUANTEK | MARKETING, MEDIA SOSIAL, OPTIMIZATION</h3>
    </div>

    <main>
        <!-- Konten utama website Anda akan ditampilkan di sini -->
        <div class="section1">
            <div>
                <img src="image/gambar1.png" class="gambar1">
            </div>
            <div class="ket1">
                <h2>PELAYANAN SOSIAL MEDIA DENGAN PELAYANAN YANG RAMAH</h2>
            </div>
        </div>

        <div class="section2">
            <p><b>Jasa Kelola Sosial Media</b> – Sosial media menjadi salah satu 
                aspek bisnis yang sekarang ini wajib dimaksimalkan. Hampir seluruh 
                pebisnis menggunakan sosial media untuk melakukan branding. Memang 
                ada banyak sosial media yang bisa digunakan untuk strategi branding. 
                Tentunya pemilihan sosial media ini menyesuaikan niche dari bisnis Anda 
                sendiri.
            </p>
        </div>

        <div class="section3">
            <div>
                <p>
                    Anda bisa menggunakan YouTube, TikTok, Twitter, Facebook, 
                    LinkedIn dan juga Instagram. Untuk nama sosial media terakhir, 
                    Instagram memang menjadi favorit banyak pebisnis. Ada banyak 
                    hamparan data yang mengatakan bahwa Instagram adalah sosial 
                    media paling nyaman digunakan untuk content marketing.
                </p>
            </div>
            <div>
                <img src="image/gambar2.png" class="gambar2">
            </div>
        </div>
    </main>

    <div>
        <img src="image/gambar3.png" class="gambar3">
    </div>

    <footer>
        <p>Hak Cipta © 2023 Social Nuturer. All Rights Reserved.</p>
    </footer>

</body>

</html>
