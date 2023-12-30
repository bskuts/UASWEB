<?php
include "sql.php";

// Ambil id_pesanan dari URL
$id_pesanan = $_GET['id'];

// Query untuk mendapatkan data detail pesanan berdasarkan id_pesanan
$query_get_detail_pesanan = "SELECT * FROM detail_pesanan WHERE id_pesanan = $id_pesanan";
$result_get_detail_pesanan = mysqli_query($con, $query_get_detail_pesanan);

?>

<form>
	<table class="table table-sm table-borderless">
    <form action="form_up_pesanan.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_pesanan" value="<?php echo $id_pesanan; ?>">

            <!-- Gunakan data_detail_pesanan untuk mengisi nilai awal input -->
            <?php while ($data_detail_pesanan = mysqli_fetch_assoc($result_get_detail_pesanan)) { ?>
                <label for="jumlah">Jumlah:</label>
                <input type="text" name="jumlah" value="<?php echo $data_detail_pesanan['jumlah_produk']; ?>" required>

                <!-- Tambahkan input lainnya sesuai dengan kebutuhan -->
            <?php } ?>

        <td></td>
		<td><input class="tombol" type="submit" name="submit" value="submit"></td>
    </form>
	</table>
</form>  

<?php
if(isset($_POST['submit'])) 
{
	include "sql.php";

    $jumlah = $_POST['jumlah'];
    $id_pesanan = $_GET['id'];

	$result = mysqli_query($con, "UPDATE detail_pesanan SET jumlah_produk= '$jumlah' WHERE id_pesanan='$id_pesanan'");

	if ($result) {
		echo "Update berhasil";
		sleep(2);
		header("Location: index_admin.php?page=pesanan");
	} else {
		echo "Update gagal: " . mysqli_error($con);
	}
	
	
}
?>