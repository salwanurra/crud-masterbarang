<?php 
	include "koneksi.php";

	$id = $_GET['id'];

	$proses = mysqli_query($koneksi, "DELETE FROM barang WHERE id_brg = '$id'") or die (mysqli_error($koneksi));

	if ($proses) {
		echo 
		"<script>
		alert('Data Berhasil Dihapus');
		window.location.href='index.php';
		</script>";
	} else echo 
	"<script>alert('Data Gagal Dihapus');
	window.location.href='index.php';
	</script>";
 ?>