<div class="row justify-content-between">
	<div class="col-10"><b>Edit Produk</b></div>
</div>

<hr>

<?php
	$simpan_id = $_GET['id'];
?>

<form>
	<table class="table table-sm table-borderless">
    <?php    
    $id_produk_tertentu = $simpan_id;

    $que = "SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori=kategori.id_kategori WHERE produk.id_produk = $id_produk_tertentu";
    $select = mysqli_query($con, $que);

    while ($data = mysqli_fetch_array($select)) {
        ?>

		<tr> 
			<td width="10%">Nama</td>
            <td><?php echo $data['nama_produk']; ?></td>
		</tr>
        <tr> 
			<td width="10%">Deskripsi</td>
            <td><?php echo $data['deskripsi_produk']; ?></td>
		</tr>
		<tr> 
			<td>Kategori</td>
			<td><?php echo $data['nama_kategori']; ?></td>
		</tr>
		<tr> 
			<td>Harga</td>
			<td class="align-right">
					<?php
					$uang = $data['harga'];
					$uang_format = number_format($uang, 0, ',', '.');
					echo "Rp. " . $uang_format;
					?>					
			</td>
		</tr>
        <tr> 
			<td>Stok</td>
            <td><?php echo $data['stok']; ?></td>
		</tr>
		<tr> 
			<td>Gambar</td>
			<td><?php echo $data['gambar_produk']; ?></td>
		</tr>
        <?php } ?>
	</table>
</form>  





<form action="index_admin.php?page=form_up_produk&id=<?php echo $simpan_id ?>" method="post" enctype="multipart/form-data">
	<table class="table table-sm table-borderless">
		<tr> 
			<td width="10%">Nama</td>
			<td><input class="form-control form-control-sm" type="text" name="nama"></td>
		</tr>
        <tr> 
			<td width="10%">Deskripsi</td>
			<td><input class="form-control form-control-sm" type="text" name="deskripsi"></td>
		</tr>
		<tr> 
			<td>Kategori</td>
			<td>
				<select class="form-control form-control-sm" type="text" name="kategori">
					<?php
					$que   	= "SELECT * FROM kategori";
					$select = mysqli_query($con,$que);

					while($data= mysqli_fetch_array($select)){

						?>
						<option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['nama_kategori']; ?></option>

					<?php } ?>
				</select>
			</td>
		</tr>
		<tr> 
			<td>Harga</td>
			<td><input class="form-control form-control-sm" type="number" name="harga"></td>
		</tr>
        <tr> 
			<td>Stok</td>
			<td><input class="form-control form-control-sm" type="number" name="stok"></td>
		</tr>
		<tr> 
			<td>Gambar</td>
			<td><input class="form-control form-control-sm form-control-file" type="file" name="gambar"></td>
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

	$nama    	= $_POST['nama'];
    $deskripsi  = $_POST['deskripsi'];
	$kategori   = $_POST['kategori'];
	$harga 		= $_POST['harga'];               
    $stok       = $_POST['stok'];
    $uploadDir 	= "../images/"; 
    $gambarPath = $uploadDir . basename($_FILES["gambar"]["name"]);
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambarPath); 

    $gambar  	= $_FILES["gambar"]["name"];

	$result = mysqli_query($con, 
            "UPDATE produk SET
            nama_produk = '$nama',
            deskripsi_produk = '$deskripsi',
            harga = '$harga',
            stok = '$stok',
            id_kategori = '$kategori',
            
            gambar_produk = '$gambar'
            WHERE id_produk = '$simpan_id'");

	if ($result) {
		echo "Update berhasil";
		sleep(2);
		header("Location: index_admin.php?page=produk");
	} else {
		echo "Update gagal: " . mysqli_error($con);
	}
}
?>