<?php
  $pelanggan = $_GET['id'];
  $user = $_GET['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Produk Toko Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="style.css"> -->


  <style>
    html, body {
        height: 100%;
    }

    .card {
        border-radius: 0;
        border: 1px solid #343a40; /* Set the border color to dark */
    }

    .card img {
        border-radius: 0; /* Remove border radius from images */
    }

    .card-title,
    .card-text {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%; /* Adjust this value based on your design */
    }

    .max-width-input {
      max-width: 50px;
    }

    header {
        background-color: #fff;
        padding: 10px;
        text-align: center;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        height: 76px;
        width: 100%;
    }

    .logo-nav {
        margin-top: -10px;
        margin-left: 10px;
        width: 128px;
        height: auto;
    }

    .container {
        display: flex;
    }

    nav ul {
        list-style-type: none;
        display: flex;
        margin-top: 16px;
        margin-right: 20px;
        margin-left: auto;
    }

    nav ul li{
        margin-left: 19px;
    }

    nav a {
        text-decoration: none;
        color: #183145;
    }

    nav ul li button{
        background-color: #61afb3;
        border: none;
        border-radius: 20px;
        height: 32px;
        margin-top: -32px;
        margin-left: -164px;
        transition: transform 0.3s ease;
    }

    nav ul li button:hover{
        background-color: #b30000;
        border: none;
        border-radius: 20px;
        height: 32px;
        margin-top: -32px;
        transform: scale(1.05);
    }

    nav ul li button a{
        color: #fff;
        margin: 8px;
        margin-top: 4px;
        margin-bottom: 4px;
    }

    nav ul li {
        width: 100px;
    }

    #kartu {
        border-radius: 30px;
        background: linear-gradient(to top, #183145, #61AFB3);
        color: #fff;
        height: 296px;
        width: 236px;
        border: none;
        margin-left: 40px;
        margin-bottom: 40px;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    #kartu-gambar {
        width: 120px;
        height: 80px;
        margin-top:20px;
        margin-left:20px;
    }

    #content {
        padding-top: 40px;
    }

    .card-details {
        padding: 10px;
        background-color: #fff;
        color: #000;
        margin-top: 10px;
    }

    .gambar7 {
        text-align: center;
    }

    .gambar7 img{
        width: 60px;
        height: auto;
    }

    .gambar8 {
        width: 1441px;
    }

    .gambar7 img:hover {
        transform: scale(1.05);
        cursor: pointer;
    }

    .hidden {
        display: none;
    }

    .formgroup{
        padding-top:12px;
        text-align: center;
    }

    .btn {
        background-color: #61AFB3;
        margin-top: 8px;
        width: 120px;
    }

    #harga-text {
      margin-top:-10px;
    }

    nav ul li img{
    margin-left: 16px;
    width: 32px;
    height: auto;
    margin-top: -4px;
    }

    nav ul li p{
    margin-top: -2px;
    margin-left: -132px;
    }
  </style>
</head>
<body>

  <header>
    <nav>
    <div class="container">
        <?php
        session_start();
        if(!isset($_SESSION['status'])){
          ?>
          <a class="navbar-brand" href="#"><img src="image/logo1.png" class="logo-nav"></a>
          <ul>
            <li><a href="home.php?id=<?php echo $pelanggan?>&username=<?php echo $user?>">Beranda</a></li>
            <li><a href="About.php?id=<?php echo $pelanggan?>&username=<?php echo $user?>">Tentang Kami</a></li>
            <li><a href="Index.php?id=<?php echo $pelanggan?>&username=<?php echo $user?>"><b>Layanan</b></a></li>
            <li><a href="Kontak.php?id=<?php echo $pelanggan?>&username=<?php echo $user?>">Kontak</a></li>
            <li><button><a href="index_login.php">Log In</a></button></li>
            <li><button><a href="index_register.php">Register</a></button></li>
          </ul>
        <?php  
        }
      
        else if ($_SESSION ['status'] == "login"){
          $user = $_SESSION['username'];
          ?>
          <a class="navbar-brand" href="#"><img src="image/logo1.png" class="logo-nav"></a>
          <ul>
            <li><a href="home.php?id=<?php echo $pelanggan?>&username=<?php echo $user?>">Beranda</a></li>
            <li><a href="About.php?id=<?php echo $pelanggan?>&username=<?php echo $user?>">Tentang Kami</a></li>
            <li><a href="Index.php?id=<?php echo $pelanggan?>&username=<?php echo $user?>"><b>Layanan</b></a></li>
            <li><a href="Kontak.php?id=<?php echo $pelanggan?>&username=<?php echo $user?>">Kontak</a></li>
            <li><img src="image/user-2.png"></li>
            <li><p class="navbar-brand" href="index.php"><?php echo $user ?></p></li>
            <li><button><a href="logout.php">Log out</a></button></li>
          </ul>
        <?php  
        }
        ?>
    </div> 
    </nav>
  </header>

  <div class="container flex-grow-1" id="content">
    <div class="row row-cols-1 row-cols-md-4 g-3 p-3">
      <?php
      include "admin/sql.php";
      $query = "SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori=kategori.id_kategori ORDER BY id_produk";
      $result = mysqli_query($con, $query);

      while ($data = mysqli_fetch_array($result)) {
        
        ?>
        <div class="col">
          <div class="card" id="kartu">
            <img src="image_pro/<?php echo $data['gambar_produk']; ?>" class="card-img-top" id="kartu-gambar" alt="..." width="300" height="200">
            <div class="card-body">
              <h5 class="card-title"><?php echo $data['nama_produk']; ?></h5>
              <p class="card-text"><?php echo $data['nama_kategori']; ?></p>
              <p class="card-text" id="harga-text"><b>Rp<?php echo $data['harga']; ?></b></p>
              <hr>
              <div class="gambar7">
                <img src="image/gambar7.png" class="gambarr" onclick="toggleCard(this)">
              </div>
              <form action="tambah_produk.php?id=<?php echo $pelanggan?>" method="post">
                <input type="hidden" name="id_pelanggan" value="<?php echo $pelanggan; ?>">
                <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">
                <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" name="subtotal" value="<?php echo $data['harga']; ?>">
                <div class="formgroup hidden" id="formgroup-<?php echo $data['id_produk']; ?>">
                  <label for="jumlah" class="formgroup hidden">Jumlah:</label>
                  <input class="form-control" type="number" id="jumlah" name="jumlah" required>
                  <input class="btn" type="submit" name="submit" value="Beli">
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>

  <img src="image/gambar8.png" class="gambar8">
  <footer class="bg-dark text-white p-3">
    <div class="container">
      <p>&copy; 2023</p>
    </div>
  </footer>

  <script>
  function toggleCard(img) {
    const cardBody = img.closest('.card-body');
    const formGroup = cardBody.querySelector('.formgroup');
    const card = img.closest('.card');

    // Toggle class 'hidden' pada elemen .formgroup
    formGroup.classList.toggle('hidden');

    // Toggle tinggi elemen .card
    card.style.height = card.style.height === '392px' ? 'auto' : '392px';
    }
    </script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

</body>
</html>

