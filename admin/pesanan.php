<div class="row justify-content-between">
	<div class="col-10"><b>Pesanan </b></div>
	<div class="col-2 d-flex justify-content-end align-items-end">
		<a href="laporan-pdf.php"><button class="btn btn-dark btn-sm" type="button">print</button></a>
		&nbsp;
		<a href="laporan-xls.php"><button class="btn btn-dark btn-sm" type="button">download</button></a>
	</div>
</div>

<hr>

<table class="table table-sm border border-dark">
	<thead class="thead-dark">
		<tr>
			<th scope="col" width="5%">No</th>
			<th scope="col">User</th>
			<th scope="col">Nama Produk</th>
			<th scope="col">Kategori</th>
			<th scope="col">Harga</th>
			<th scope="col">Jumlah</th>
			<th scope="col">Tanggal</th>
			<th scope="col" width="12%">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$que   	= "SELECT * FROM detail_pesanan 
		JOIN pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan
		JOIN login ON login.id_pelanggan = pesanan.id_pelanggan 
		JOIN produk ON produk.id_produk = detail_pesanan.id_produk 
		JOIN kategori ON kategori.id_kategori = produk.id_kategori";
		$select = mysqli_query($con,$que);

		while($data= mysqli_fetch_array($select)){

			?>

			<tr>
				<th scope="row"><?php echo $data['id_detail_pesanan']; ?></th>
				<td><?php echo $data['nama_pelanggan']; ?></td>
				<td><?php echo $data['nama_produk']; ?></td>
				<td><?php echo $data['nama_kategori']; ?></td>
				<td>

					<?php 
					$uang = $data['subtotal'];
					$uang_format = number_format($uang, 0, ',', '.');
					echo "Rp. " . $uang_format;
					$dana = $dana + $uang;
					?>

				</td>
				<td><?php echo $data['jumlah_produk']; ?></td>
				<td><?php echo $data['tanggal_pesanan']; ?></td>
				<td>
					<a href="index_admin.php?page=form_up_pesanan&id=<?php echo $data['id_pesanan']; ?>"><button class="tombol" type="button">edit</button></a>
					<a href="index_admin.php?page=hapus_pesanan&id=<?php echo $data['id_pesanan']; ?>"><button class="tombol" type="button">delete</button></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<?php 
$dana_format = number_format($dana, 0, ',', '.');
?>

<hr>
<table class="table table-sm border border-dark">
	<tbody class="thead-dark">
		<tr>
			<td scope="col" width="5%">&nbsp;</td>
			<td scope="col"><?php echo "<b>Total Semua Pesanan</b> Rp. " . $dana_format; ?></td>
		</tr>
	</tbody>
</table>