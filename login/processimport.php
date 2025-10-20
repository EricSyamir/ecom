<?php
// ini adalah paparan import produk 
session_start();
//connection
$conn = new mysqli('localhost', 'root', '', 'produk');
if(isset($_POST['import'])){
	//check if input file is empty
	if(!empty($_FILES['file']['name'])){
		$filename = $_FILES['file']['tmp_name'];
		$fileinfo = pathinfo($_FILES['file']['name']);
		//check file extension
		if(strtolower($fileinfo['extension']) == 'csv'){
			//check if file contains data
			if($_FILES['file']['size'] > 0){
				$file = fopen($filename, 'r');
				$fk = "SET FOREIGN_KEY_CHECKS = 0;";
				if(mysqli_query($con,$fk)){
				} else {
					echo '<script>alert("Maaf ! Sila Semak Sistem") </script>' ;
					echo "Ralat : $sql<br>".
					mysqli_error($con) ; 
				}
				while(($impData = fgetcsv($file, 1000, ',')) !== FALSE){
					$sql = "INSERT INTO produk ( IDProduk, NamaProduk, Warna, Saiz, Bahan, Harga, stock) 
							VALUES ('".$impData[0]."', '".$impData[1]."', '".$impData[2]."','".$impData[3]."','".$impData[4]."','".$impData[5]."','".$impData[6]."')";
							$query = $conn->query($sql);
							if($query){
								$_SESSION['message'] = "<script type='text/javascript'> alert('Data berjaya dimuatnaik')</script>";
							} else {
								$_SESSION['message'] = "<script type='text/javascript'> alert('Data gagal dimuatnaik ')</script>";
							}
						}
						header('location: import.php');
					} else {
						$_SESSION['message'] = "<script type='text/javascript'> alert('Fail mempunyai data kosong')</script>";
						header('location: import.php');
					}
				} else {
					$_SESSION['message'] = "<script type='text/javascript'> alert('Sila muatnaik fail .CSV sahaja')</script>";
					header('location: import.php');
				}
			} else {
				$_SESSION['message'] = "<script type='text/javascript'> alert('Fail kosong')</script>";
				header('location: import.php');
			}
		} else {
			$_SESSION['message'] = "<script type='text/javascript'> alert('Sila muatnaik fail dahulu')</script>";
			header('location: import.php');
		}  
?>