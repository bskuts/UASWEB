<?php
	$id = $_GET['id'];
	$result = mysqli_query($con, "DELETE FROM kategori WHERE id_kategori=$id");
	header("Location:index_admin.php?page=kategori");
?>