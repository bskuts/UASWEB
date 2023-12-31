<?php
    $nama = $_GET['nama'];
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
                <li><a href="About.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>"><b>Tentang Kami</b></a></li>
                <li><a href="Index.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>">Layanan</a></li>
                <li><a href="Kontak.php?id=<?php echo $idp?>&username=<?php echo $user?>&nama=<?php echo $nama?>">Kontak</a></li>
                <li><img src="image/user-2.png"></li>
                <li><p><?php echo $username = $nama;?></p></li>
                <li><button><a href="logout.php">Log out</a></button></li>
            </ul>
        </nav>
    </header>

    <div class="header1">
        <h1>Tentang Kami</h1>
        <h3>BY KELOMPOKSGKARUANTEK | MARKETING, MEDIA SOSIAL, OPTIMIZATION</h3>
    </div>

    <main>
        <!-- Konten utama website Anda akan ditampilkan di sini -->
        <div class="about1">
            <div>
                <h2>Social Nuturer</h2>
            </div>
            <div class="aket1">
                <p>Adalah agensi pemasaran yang fokus pada membantu bisnis-bisnis kecil 
                    dan menengah dalam mengelola dan meningkatkan kehadiran mereka di 
                    berbagai platform media sosial. Dengan tujuan untuk membantu klien 
                    mencapai interaksi yang lebih tinggi dengan pelanggan dan 
                    meningkatkan kesadaran merek melalui strategi yang terukur dan efektif.</p>
            </div>
        </div>

        <div class="about1">
            <div>
                <img src="">
            </div>
            <div>
                <h2>Konsultan Digital Manajemen</h2>
            </div>
            <div class="aket1">
                <p>Membantu bisnis Anda memaksimalkan potensi-potensi yang ada dalam 
                    dunia digital melalui berbagai macam hal seperti Mengelola, Branding, 
                    Periklanan, bahkan Media Sosial.</p>
            </div>
        </div>

        <div class="about1">
            <div>
                <img src="">
            </div>
            <div>
                <h2>Analisis Berdasarkan Data</h2>
            </div>
            <div class="aket1">
                <p>Semua hal yang kami lakukan berbasis data yang akurat. Kami dapat 
                    membantu Anda mendapatkan data-data mulai dari bisnis Anda hingga 
                    kompetitor di bidang bisnis yang sama maupun memberikan insight 
                    baru tentang prospek target pasar dari bisnis Anda.</p>
            </div>
        </div>

        <div class="about1">
            <div>
                <img src="">
            </div>
            <div>
                <h2>Social Media Marketing</h2>
            </div>
            <div class="aket1">
                <p>Salah Satu hal yang tidak boleh dilupakan oleh bisnis yang ingin 
                    survive saat ini. Social Media Marketing dapat memperluas 
                    jangkauan pasar dari sosial media maupun membantu Anda untuk 
                    mendatangkan customer yang lebih tertarget.</p>
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
