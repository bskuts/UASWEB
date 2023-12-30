<?php  
if (isset($_POST['submit'])) {

    $id       = $_POST["id_produk"]; 
    $jumlah   = $_POST["jumlah"]; 
    $total    = $_POST["subtotal"];
    $pelanggan = $_GET["id"];

    include "admin/sql.php";

    $queryPesanan = "INSERT INTO pesanan (id_pelanggan, tanggal_pesanan) VALUES ($pelanggan, NOW())";
    $resultPesanan = mysqli_query($con, $queryPesanan);

    if ($resultPesanan) {

        $totalHarga = $jumlah*$total;

        $idPesanan = mysqli_insert_id($con);

		$reset	= "alter table detail_pesanan AUTO_INCREMENT = 1";
		$query	= mysqli_query($con,$reset);

        $queryDetailPesanan = "INSERT INTO detail_pesanan (id_pesanan, id_produk, jumlah_produk, subtotal) VALUES ('$idPesanan','$id', '$jumlah', '$totalHarga')";
        $resultDetailPesanan = mysqli_query($con, $queryDetailPesanan);

    }
    mysqli_close($con);
    header("Location: index.php");
}
?> 