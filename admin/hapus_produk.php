<?php
	$id = $_GET['id'];
	$result = mysqli_query($con, "DELETE FROM produk WHERE id_produk=$id");
	header("Location:index_admin.php?page=produk");
?>