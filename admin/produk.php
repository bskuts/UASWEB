<div class="row justify-content-between">
	<div class="col-10"><b>Produk </b></div>
	<div class="col-2 d-flex justify-content-end align-items-end">
		<a href="index_admin.php?page=tambah_produk"><button class="tombol" type="button">add</button></a>
	</div>
</div>

<hr>

<table class="table table-sm border border-dark">
	<thead class="thead-dark">
		<tr>
			<th scope="col" width="5%">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Kategori</th>
			<th scope="col">Harga</th>
			<th scope="col">Stok</th>
			<th scope="col">Gambar</th>
			<th scope="col" width="12%">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$que   	= "SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori=kategori.id_kategori order by id_produk";
		$select = mysqli_query($con,$que);

		while($data= mysqli_fetch_array($select)){

			?>

			<tr>
				<th scope="row"><?php echo $data['id_produk']; ?></th>
				<td><?php echo $data['nama_produk']; ?></td>
				<td><?php echo $data['nama_kategori']; ?></td>
				<td class="align-right">
					<?php
					$uang = $data['harga'];
					$uang_format = number_format($uang, 0, ',', '.');
					echo "Rp. " . $uang_format;
					?>					
				</td>
				<td><?php echo $data['stok']; ?></td>
				<td><?php echo $data['gambar_produk']; ?></td>
				<td>
					<a href="index_admin.php?page=form_up_produk&id=<?php echo $data['id_produk']; ?>"><button class="tombol" type="button">edit</button></a>
					<a href="index_admin.php?page=hapus_produk&id=<?php echo $data['id_produk']; ?>"><button class="tombol" type="button">delete</button></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>