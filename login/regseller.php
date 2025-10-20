<?php 
// ini adalah paparan daftar masuk penjual
session_start();  
if(isset($_SESSION["user"]))  
{
	header("location:restock.php");  
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>daftar masuk penjual</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/cart.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<style>
	.login100-form-title, .label-input100, .login100-form-btn, .txt1, .input100 {font-family:"Candara"}
</style>
<body style="background-color: #666666;">
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100" style="background-image: url('images/login.png');">
		<form class="login100-form validate-form" style="background-color:white" method="post">
		<span class="login100-form-title p-b-43" style="color:#7F5539">
		Daftar Masuk Penjual
	</span>
	<div class="wrap-input100 validate-input" data-validate = "IDPenjual diperlukan">
		<input class="input100" style="color:black" type="text" name="user">
		<span class="focus-input100"></span>
		<span class="label-input100" style="color:grey">Masukkan IDPenjual</span>
	</div>
	<div class="wrap-input100 validate-input" data-validate = "NamaPenjual diperlukan">
		<input class="input100" style="color:black" type="text" name="name">
		<span class="focus-input100"></span>
		<span class="label-input100" style="color:grey">Masukkan NamaPenjual</span>
	</div>
	<div class="wrap-input100 validate-input" data-validate="KataLaluan diperlukan">
		<input class="input100" style="color:black" type="text" name="pass">
		<span class="focus-input100"></span>
		<span class="label-input100" style="color:grey">Masukkan KataLaluan</span>
	</div>
	<div class="flex-sb-m w-full p-t-2 p-b-32">
		<div>
			<a href="reguser.php" class="txt1" style= "color: blue">
			Anda bukan penjual? Daftar Masuk Pengguna
		</a>
	</div>
</div>
<div class="container-login100-form-btn">
	<button class="login100-form-btn" name="add" style="background-color:#7F5539">
	Daftar Masuk
</button>
<br>
</div>
</div>
</form>
<a href="/F4/login/loginseller.php" class="login100-form-btn" style="background-color:#7F5539">Kembali</a>
<div class="login100-more" style="background-image: url('images/bg.jpg');">
</div>
</div>
</div>
</div>
</div>
<?php
include('db.php');
if(isset($_POST['add'])) {
	// username and password sent from form 
	$idp = mysqli_real_escape_string($con,$_POST['user']);
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$pass = mysqli_real_escape_string($con,$_POST['pass']); 
	$sql ="INSERT INTO `penjual`( `IDPenjual`, `NamaPenjual`,`KataLaluan`) VALUES ('$idp','$name','$pass')" ;
	if(mysqli_query($con,$sql))
	{
		echo '<script>alert("Penjual sudah didaftarkan. Sila kembali ke pautan log masuk") </script>' ;		
	} else {
		echo '<script>alert("Ralat! Masalah telah berlaku") </script>' ;
	}
}
?>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>