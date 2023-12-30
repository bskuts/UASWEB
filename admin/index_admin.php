<?php
session_start();
if($_SESSION['level'] != "admin")
{
    header("location:../index_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #ebf9fb;
        }

        .navbar {
            display: flex;
            background-color: white;
        }

        .logo-nav {
            width: 120px;
            height: auto;
            margin-left: 60px;
            margin-bottom: 0;
        }

        .navbar ul {
            display: flex;
            list-style-type: none;
            margin-right: 72px;
            margin-bottom: 0;

        }

        .navbar ul li {
            margin-left: 40px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: black;
            background: #61AFB3;
            padding: 12px;
            border-radius: 10px;
            color: #fff;
        }

        .navbar ul li a:hover {
            background: linear-gradient(to right, #183145, #61AFB3);
        }

        #content {
            margin-top: 40px;
        }

        footer{
            margin-top: 180px;
        }

        .tombol {
            background: linear-gradient(to right, #183145, #61AFB3);
            border: none;
            border-radius: 10px;
            padding: 4px;
            color: white;
            width: 100px;
            margin-bottom: 4px;
            text-align: center;
            text-decoration: none;
        }

        .tombol1 {
            background: linear-gradient(to right, #183145, #61AFB3);
            border: none;
            border-radius: 10px;
            padding: 4px;
            color: white;
            width: 120px;
            margin-bottom: 4px;
        }
    </style>
</head>


<body>
    <header>
        <nav class="navbar">
            <h1><img src="../image/logo1.png" class="logo-nav"></h1>
            <ul>
                <li><a href="index_admin.php?page=kategori">Kategori</a></li>
                <li><a href="index_admin.php?page=produk">Produk</a></li>
                <li><a href="index_admin.php?page=pesanan">Pesanan</a></li>
                <li><a href="index_admin.php?page=bagan">Bagan</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <div class="container flex-grow-1" id="content">
            <div class="col p-3 h-100">
                <?php
                include "sql.php";
                $halaman = isset($_GET['page']) ? $_GET['page'] : 'produk';

                switch ($halaman) {
                    case 'kategori':
                        include 'kategori.php';
                        break;
                    case 'pesanan':
                        include 'pesanan.php';
                        break;
                    case 'hapus_pesanan':
                        include 'hapus_pesanan.php';
                        break;
                    case 'tambah_produk':
                        include 'tambah_produk.php';
                        break;
                    case 'form_up_kategori':
                        include 'form_up_kategori.php';
                        break;
                    case 'hapus_produk':
                        include 'hapus_produk.php';
                        break;
                    case 'tambah_kategori':
                        include 'tambah_kategori.php';
                        break;
                    case 'form_up_produk':
                        include 'form_up_produk.php';
                        break;
                    case 'form_up_pesanan':
                        include 'form_up_pesanan.php';
                        break;
                    case 'hapus_kategori':
                        include 'hapus_kategori.php';
                        break;
                    case 'bagan':
                        include 'bagan.php';
                        break;
                    default:
                        include 'produk.php';
                        break;
                }
                ?>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white p-3">
        <div class="container">
            <p>&copy; 2023</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTN