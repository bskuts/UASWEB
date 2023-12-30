<?php
    $SERVER = "localhost";
    $USER = "root";
    $PASSWORD = "";
    $DATABASE = "digital_marketing";

    $con = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE);

    // Check connection
    if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>

