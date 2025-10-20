<?php
// ini adalah paparan tambah stok
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
<title>tambah stok</title>
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
<div class="w3-padding-64 w3-large" style="font-weight:bold">
<a href="/F4/login/restock.php" class="w3-bar-item w3-button w3-text-brown">Inventori</a>
<a href="/F4/login/addstock.php" class="w3-bar-item w3-button w3-text-brown">Tambah Stok</a>
<a href="/F4/login/import.php" class="w3-bar-item w3-button w3-text-brown">Import Produk</a>
<a href="/F4/login/penjual.php" class="w3-bar-item w3-button w3-text-brown">Maklumat Penjual</a>
<a href="/F4/login/search.php" class="w3-bar-item w3-button w3-text-brown">Carian Pilihan</a>
<a href="javascript:window.print()" class="w3-bar-item w3-button w3-text-brown">Cetak</a>
<a href="/F4/login/logout.php" class="w3-bar-item w3-button w3-text-brown">Log Keluar ID:
  <?php
  session_start();
  if(isset($_SESSION["user"])) {
    echo $_SESSION["user"];
  }
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
  <p class="w3-left w3-text-brown" style="font-size:xx-large">Tambah Stok</p>
</header>
<!-- content -->
<table>
  <form name="form" method="post">
    <tr>
      <td>
        <label for="name">
          ID Produk
        </label>
      </td>
      <td><select name="idproduk"  class="form-control" required>
        <option value selected >Sila pilih ID Produk</option>
        <?php 
        $sqli = "SELECT * FROM produk ";
				$result = mysqli_query($con, $sqli);
        while ($row = mysqli_fetch_array($result)) {
          # code...
          echo '<option>'.$row['IDProduk'].'</option>';
        }
        ?>
        </select>
        <input type="submit" name="add" value="Semak" class="btn btn-primary"> 
      </td>
    </tr>
    <tr>
      <td><label for="stock">
        Stok terkini
      </label>
    </td>
    <td>
      <?php
      if(isset($_POST['add']))
      {
        $idproduk = $_POST['idproduk'];
        $sql = "SELECT * FROM produk WHERE idproduk = '$idproduk'";
				$re = mysqli_query($con,$sql);
        while($row= mysqli_fetch_array($re))
        {
          echo $row['stock'];
        }      
      }
      else {
        echo "Sila tekan butang semak";
      }
      ?>
      </td>
    </tr>
    <tr>
      <td><label for="Kuantiti">
        Kuantiti
      </label>
    </td>
    <td>
      <input type="number" name="stock"  id="Kuantiti" /><br><input type="submit" name="submit" value="Kemas Kini" class="btn btn-primary"> 
      <?php
      include('db.php');
      if(isset($_POST['submit'])) {
        $stock = $_POST['stock'];
        $idproduk = $_POST['idproduk'];
        $sql ="UPDATE produk SET stock = stock + '$stock'  where IDProduk = '$idproduk'";
        if(mysqli_query($con,$sql)) {	
          echo '<script>alert("Stock telah dikemaskini") </script>' ;
        }
        else {
          echo '<script>alert("Ralat! Sila hubungi admin") </script>' ;
          echo "Ralat : $sql<br>".
          mysqli_error($con) ;
        }
      } else {}
      ?>
      </td>
    </tr>
  </form>
</body>
</html>