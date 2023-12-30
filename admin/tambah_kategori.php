<div class="row justify-content-between">
	<div class="col-10"><b>Tambah Kategori </b></div>
</div>

<hr>

<form action="index_admin.php?page=tambah_kategori" method="post" enctype="multipart/form-data">
	<table class="table table-sm table-borderless" id="border">
		<tr> 
			<td width="10%">Nama</td>
			<td><input class="form-control form-control-sm" type="text" name="nama"></td>
		</tr>
		<tr> 
			<td></td>
			<td><input class="tombol" type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>    


<?php

if(isset($_POST['submit'])) 
{
	$nama    	= $_POST['nama'];

	$reset   = "alter table kategori AUTO_INCREMENT = 1";
	$query   = mysqli_query($con,$reset);

	$result = mysqli_query($con, "INSERT INTO kategori (nama_kategori) VALUES ('$nama')");

	header("Location: index_admin.php?page=kategori");
}
?>