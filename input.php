<?php 
error_reporting(0);
session_start();

include "koneksi.php";
include "edit.php";
$proses = mysqli_query($koneksi,"SELECT * FROM barang") or die (mysqli_error($koneksi));

$edit = mysqli_fetch_assoc($proses_ambil);

if ( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;

}
?>




<!DOCTYPE html>
<html>
<head>
  <title>Input Data</title>
  <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
  <link href="library/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
  <link href="library/assets/styles.css" rel="stylesheet" media="screen">
  <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
        <div class="span6">
                  <div class="container">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Input Produk</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                      <?php
                                      if($_GET['id'] != ""){
                                          //proses edit
                                      ?>
                                          <form  action="input.php?id=<?php echo $edit['id_brg']; ?>&proses=1" method="POST" class="form-horizontal">
                                      <?php
                                        }else{
                                      ?>
                                           <form action="proses.php" method="POST" class="form-horizontal">
                                      <?php
                                          }
                                      ?>
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="id"></label>
                                          <div class="controls">
                                             <input class="input" id="id" name="id" type="hidden" value="<?php if($edit != "") echo $edit['id']; ?>">  
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="nama_brg">Nama Produk</label>
                                          <div class="controls">
                                             <input type="text" class="input-xlarge focused" id="nama_brg" name="nama_brg" value="<?php if($edit != "") echo $edit['nama_brg']; ?>">  
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="stock">Stock</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="stock" name="stock" value="<?php if($edit != "") echo $edit['stock']; ?>">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="stock">Harga</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="harga" name="harga" value="<?php if($edit != "") echo $edit['harga']; ?>">
                                          </div>
                                        </div> 
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                         </div>
                      </div>
</body>
</html>