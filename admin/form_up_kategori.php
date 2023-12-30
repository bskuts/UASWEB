<div class="row justify-content-between">
	<div class="col-10"><b>Edit Kategori</b></div>
</div>

<hr>

<?php
	$simpan_id = $_GET['id'];
?>
<form action="index_admin.php?page=form_up_kategori&id=<?php echo $simpan_id ?>" method="post" enctype="multipart/form-data">
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
	include "sql.php";

	$result = mysqli_query($con, "UPDATE `kategori` SET `nama_kategori`='$_POST[nama]' WHERE `kategori`.`id_kategori`='$_GET[id]'");

	if ($result) {
		echo "Update berhasil";
		sleep(2);
		header("Location: index_admin.php?page=kategori");
	} else {
		echo "Update gagal: " . mysqli_error($con);
	}
	
	
}
?>