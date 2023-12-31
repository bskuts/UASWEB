<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pesanan</title>
</head>
<body>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan Pesanan.xls");
	?>

	<h2>Laporan Pesanan</h2>

	<table class="table table-sm border border-dark">
		<thead class="thead-dark">
			<tr>
				<th scope="col" width="5%">No</th>
				<th scope="col">Nama</th>
				<th scope="col">Kategori</th>
				<th scope="col">Harga</th>
				<th scope="col">Jumlah</th>
				<th scope="col">Total</th>
				<th scope="col">Tanggal</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "sql.php"; 
			$que   	= "SELECT * FROM detail_pesanan JOIN pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan JOIN produk ON produk.id_produk = detail_pesanan.id_produk JOIN kategori ON kategori.id_kategori = produk.id_kategori";
			$select = mysqli_query($con,$que);
			$dana 	= 0;

			while($data= mysqli_fetch_array($select)){

			?>

			<tr>
				<th scope="row"><?php echo $data['id_detail_pesanan']; ?></th>
				<td><?php echo $data['nama_produk']; ?></td>
				<td><?php echo $data['nama_kategori']; ?></td>
				<td>
					<?php
					$uang = $data['harga'];
					$uang_format = number_format($uang, 0, ',', '.');
					echo "Rp. " . $uang_format;
					?>					
				</td>
				<td><?php echo $data['jumlah_produk']; ?></td>
				<td>
					<?php 
					$total = $data['jumlah_produk'] * $data['harga']; 
					$total_format = number_format($total, 0, ',', '.');
					echo "Rp. " . $total_format;
					$dana = $dana + $total;
					?>
				</td>
				<td><?php echo $data['tanggal_pesanan']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

	<?php 
	$dana_format = number_format($dana, 0, ',', '.');
	?>

	<h4><?php echo "<b>Total Semua Pesanan</b> Rp. " . $dana_format; ?></h4>

</body>
</html> 