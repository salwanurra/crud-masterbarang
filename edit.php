<?php
error_reporting(0);

	include "koneksi.php";

	$id = $_GET['id'];
	$apakah_proses = $_GET['proses'];

	$proses_ambil = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_brg = '".$id."'")or die(mysqli_error($koneksi));

	if ($apakah_proses == 1) {
		$nama_brg = $_POST['nama_brg'];
		$stock = $_POST['stock'];
		$harga = $_POST['harga'];

		$proses_update = mysqli_query($koneksi, "UPDATE barang SET nama_brg = '$nama_brg', stock = '$stock' , harga = '$harga' WHERE id_brg = '".$id."'")or die(mysqli_error($koneksi));

		   if ($proses_update) {
			echo "<script>alert('Data Berhasil Diupdate')
            window.location.href='index.php';
         </script>";
		}else echo "<script>alert('Data Gagal Diupdate')
         window.location.href='index.php';
         </script>"; 
	}

?>