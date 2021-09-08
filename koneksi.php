<?php 
	$hostname="localhost";
	$user="root";
	$password=""; 
	$database="uas_pbw";

	$koneksi=mysqli_connect($hostname, $user, $password, $database) or die (mysql_error());
 ?>