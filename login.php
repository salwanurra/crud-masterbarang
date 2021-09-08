<?php
 session_start();

include "koneksi.php";
//untuk login
//username: admin
//password: 123

if(isset($_POST["login"])){

	$username = $_POST["username"];
	$password = $_POST["password"];


	$proses= mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password='$password'");

	if(mysqli_num_rows($proses)===1){

		$row = mysqli_fetch_assoc($proses);
		$_SESSION['login']=$username;
			header("Location: index.php");
			exit;
		
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <!-- Bootstrap -->
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="library/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">
    	
      <form class="form-signin" method="post">

        <legend>Login</legend>
        <input name="username" type="text" class="input-block-level" placeholder="Username">
        <input name="password" type="password" class="input-block-level" placeholder="Password">

        <button name="login" class="btn btn-primary" type="submit">Login</button>
      </form>

    </div>
 
     <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>