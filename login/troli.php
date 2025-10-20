<?php
// ini adlaah paparan troli pilihan
include('db.php');
?>
<?php  
	$server="localhost";
	$userid ="root";
	$Password = "";
	$myDB = "produk";

   $con = mysqli_connect($server,$userid,$Password,$myDB);

	if (mysqli_connect_errno()) {
		# code...
		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
 

?>
<!DOCTYPE html>
<html>
<style>
    table{
  width:90%;
}
th{
    border: 1.5px solid;
    border-color: #7F5539;
    background-color: #B08968;
    color: white;
    font-size: large;
}
tr{
    border: 1.5px solid;
}
td{
    border: 1.5px solid;
    background-color: #FFE8D6;
    color: #7F5539;
    text-align: center;
}
</style>
<head>
<title>troli pilihan</title>
<link rel="icon" type="image/png" href="/F4/img/icons/cart.ico"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    background: #DDBEA9;
  }
.w3-wide {font-family: "Lucida Handwriting"}
body,h1,h2,h3,h4,h5,h6,.w3-sidebar a {font-family: "Candara"}
</style>
</head>
<body class="w3-content" style="max-width:1300px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-top" style="z-index:3;width:290px;background-color:#DDBEA9;" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide w3-text-brown"><b>wasserflasche</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="/F4/login/products.php" class="w3-bar-item w3-button w3-text-brown">Menu Utama</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-text-brown w3-left-align" id="myBtn">
      Produk <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="products.php" class="w3-bar-item w3-button w3-text-brown"><i class="fa fa-caret-right w3-margin-right"></i>Botol air </a>
    </div>
    <a href="/F4/login/troli.php" class="w3-bar-item w3-button w3-text-brown">Troli Pilihan</a>

    <a href="javascript:window.print()" class="w3-bar-item w3-button w3-text-brown">Cetak</a>
    <a href="/F4/login/logout.php" class="w3-bar-item w3-button w3-text-brown">Log Keluar ID: <?php  session_start();  
                                          if(isset($_SESSION["user"]))  
                                             {  
                                              echo $_SESSION["user"]; } 
                                            ?></a>
  </div>

</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-brown w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">wasserflasche</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:80px"></div>
  
  <!-- Top header -->
<header class="w3-container w3-xlarge">
    <p class="w3-left w3-text-brown" style="font-size:xx-large">Troli Pilihan </p>
    <p class="w3-container w3-right">
    <a href="/F4/login/troli.php" class="w3-bar-item w3-button w3-text-brown"><i class="fa fa-shopping-cart"></i></a>
    </p>
    <p>
    <div class="w3-container w3-right w3-bar-item">
      <div class="w3-dropdown-hover" style="background-color:#DDBEA9">
        <a class="w3-button w3-text-brown"><i class="fa fa-search"></i></a>
        <div class="w3-dropdown-content w3-light-grey w3-medium" 
    id="myDIV">
          <input class="w3-input w3-padding" type="text" placeholder="Cari warna pilihan " 
    id="myInput" onkeyup="myFunction()">
          <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/products/product1.php">pink / blue </a>
          <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/products/product2.php">pink </a>
          <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/products/product3.php">purple / blue </a>
          <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/products/product4.php">purple </a>
          <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/products/product5.php">blue / purple </a>
          <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/products/product6.php">blue </a>
          <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/products/product7.php">blue / orange </a>
          <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/products/product8.php">green </a>
        </div>
      </div>
    </div>
    <script>
// Filter
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDIV");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

</script>
</p>
</header>

  <!-- content -->

  <div class="panel panel-default">
                        <?php
                                              
                        $user = $_SESSION["user"];              
                        $sql = "SELECT * FROM pilihan WHERE IDPengguna = '$user'";
						$re = mysqli_query($con,$sql);
						?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Pilihan</th>
											                      <th>ID Produk</th>
											                      <th>ID Penjual</th>
											                      <th>Kuantiti</th>
                                            <th>Jumlah Harga</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php

										while($row= mysqli_fetch_array($re))
										{
												echo "<tr class=odd gradeX>
                          <td>".$row['IDPilihan']."</td>
													<td>".$row['IDProduk']."</td>
													<td>".$row['IDPenjual']."</td>
													<td>".$row['Kuantiti']."</td>
                          <td>".$row['JumlahHarga']."</td>


												</tr>";

										}
									?>

               
                                    </tbody>

                            </div>
                            
                        </div>
                    </div>
                    <form name="form" method="post"><select name="idpilihan"  class="form-control" required>
												<option value selected >Sila pilih ID Pilihan </option>
                                             <?php 

					                        $sqli = "SELECT * FROM pilihan ";
					                        $result = mysqli_query($con, $sqli);
					                         while ($row = mysqli_fetch_array($result)) {
					 		                 # code...
					 	                     echo '<option>'.$row['IDPilihan'].'</option>';
					                         }	
					                         ?>
                                            </select>
                                            <input type="submit" name="submit" value="Padam" class="btn btn-primary">
                                            <?php
                  if(isset($_POST['submit'])){
                  include('db.php');
                  $idp = $_POST['idpilihan'];
                    $sql ="DELETE FROM pilihan WHERE IDPilihan = '$idp'";
                    if(mysqli_query($con,$sql))
										    {	
                        echo '<script>alert("Data telah dikemaskini") </script>' ;
									        }
											else {
												  echo '<script>alert("Maaf! Sila hubungi admin") </script>' ;
                          echo "Ralat : $sql<br>".
                                            mysqli_error($con) ;
										    }
                      }
            
?>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
