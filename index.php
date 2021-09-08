<?php 

session_start();

include "koneksi.php";
include "edit.php";
$proses = mysqli_query($koneksi,"SELECT * FROM barang") or die (mysqli_error($koneksi));


if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;

}
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Program Penjualan Barang</title>
 	<link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
 </head>
 <body>
 	<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="index.php">Salwa's Shop</a>
                   <div class="nav-collapse collapse">
                       <ul class="nav pull-right">
                           <li>                           
                              <a tabindex="-1" href="logout.php">Logout</a>
                           </li>
                       </ul>
                       <ul class="nav">
                           <li>
                             <a href="index.php">Master Barang</a>
                           </li>
                           <li>
                             <a href="transaksi.php">Transaksi</a>
                           </li>  
                       </ul>
                   </div>
                    <!--/.nav-collapse -->
             </div>
        </div>
    </div>

    <div id="content">
  <div class="bg-image" style="
      background-image: url('image.jpg');
      background-size: cover;
      height: 100vh;
      background-position: center;
      background-repeat: no-repeat;
">
      

    <div class="container">
        <div class="span10" style="float: none; margin: 0 auto;">
        
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">List Produk</div>
                    <div class="pull-right"><span class="badge badge-info">Available</span>
                    </div>
            </div>
                                <div class="block-content collapse in">
                                    <div class="btn-group pull-right" style="padding-bottom: 1%;">
                                         <a href="input.php"><button class="btn btn-success"><i class="icon-plus icon-white"></i> Tambah Data</button></a>
                                      </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                              
                                                <th>No.</th>
                                                <th>Nama Produk</th>
                                                <th>Stock</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>

                                            </tr>
                                        

                                        </thead>
                                        <tbody>
                                            <?php 
                                              while($data = mysqli_fetch_assoc($proses)){
                                            ?>
                                            <tr>
                                              <td><?php echo $data['id_brg'] ?></td>
                                              <td><?php echo $data['nama_brg'] ?></td>
                                              <td><?php echo $data['stock'] ?></td>
                                              <td><?php echo $data['harga'] ?></td>
                                              
                                              <td><a class="btn btn-primary" href="input.php?id=<?php echo $data['id_brg']; ?>"><i class="icon-pencil icon-white"></i> Edit</a>
                                              <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id_brg']; ?>"><i class="icon-remove icon-white"></i> Delete</a> </td>
                                            </tr>
                                            <?php 
                                              }
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>

 </body>
 </html>