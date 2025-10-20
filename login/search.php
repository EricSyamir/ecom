<?php
// ini adalah paparan carian pilihan 
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
<head>
<title>carian pilihan</title>
<link rel="icon" type="image/png" href="/F4/img/icons/cart.ico"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-top" style="z-index:3;width:290px;background-color:#DDBEA9;" id="mySidebar">
<div class="w3-container w3-display-container w3-padding-16">
  <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
  <h3 class="w3-wide w3-text-brown"><b>wasserflasche</b></h3>
</div>
<div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
<a href="/F4/login/restock.php" class="w3-bar-item w3-button w3-text-brown">Inventori</a>
<a href="/F4/login/addstock.php" class="w3-bar-item w3-button w3-text-brown">Tambah Stok</a>
<a href="/F4/login/import.php" class="w3-bar-item w3-button w3-text-brown">Import Produk</a>
<a href="/F4/login/penjual.php" class="w3-bar-item w3-button w3-text-brown">Maklumat Penjual</a>
<a href="/F4/login/search.php" class="w3-bar-item w3-button w3-text-brown">Carian Pilihan</a>
<a href="javascript:window.print()" class="w3-bar-item w3-button w3-text-brown">Cetak</a>
<a href="/F4/login/logout.php" class="w3-bar-item w3-button w3-text-brown">Log Keluar ID: <?php  session_start();  
if(isset($_SESSION["user"])) {  
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
  <p class="w3-left w3-text-brown" style="font-size:xx-large">Carian Pilihan Pengguna</p>
  <p class="w3-right"></p>
</header>
<!-- content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card mt-4">
        <div class="card-body">
          <div class="row">
            <div class="col-md-7">
              <form action="" method="GET">
                <div class="input-group mb-3">
                  <input type="text" id = "search" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Masukkan IDProduk">
                  <button id="search_button" type="submit" class="btn btn-primary">Cari</button><button onclick="location.href='http://localhost/F4/login/restock.php'" type="reset" id = "reset_button" class="btn btn-primary">Set semula</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card mt-4">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID Pilihan</th>
              <th>ID Pengguna</th>
              <th>ID Produk</th>
              <th>Kuantiti</th>
              <th>JumlahHarga</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $con = mysqli_connect("localhost","root","","produk");
            if(isset($_GET['search']))
            {
              $filtervalues = $_GET['search'];
              $query = "SELECT IDPilihan, IDPengguna, IDProduk, Kuantiti, JumlahHarga FROM pilihan WHERE CONCAT(IDPilihan,IDPengguna,IDProduk,Kuantiti,JumlahHarga) LIKE '%$filtervalues%' ";
              $query_run = mysqli_query($con, $query);
              if(mysqli_num_rows($query_run) > 0)
              {
                foreach($query_run as $items)
                {
                  ?>
                  <tr>
                    <td><?= $items['IDPilihan']; ?></td>
                    <td><?= $items['IDPengguna']; ?></td>
                    <td><?= $items['IDProduk']; ?></td>
                    <td><?= $items['Kuantiti']; ?></td>
                    <td><?= $items['JumlahHarga']; ?></td>
                  </tr>
                  <?php
                  }
                } else {
                  ?>
                  <tr>
                    <td colspan="4">Tiada rekod dijumpai</td>
                  </tr>
                  <?php
                  }
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
  function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTables-example");
    tr = table.getElementsByTagName("tr");
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
    }
    </script>
    <style>
  body {
    background: #DDBEA9;
  }
.w3-wide {font-family: "Lucida Handwriting"}
body,h1,h2,h3,h4,h5,h6,.w3-sidebar a {font-family: "Candara"}
</style>
</head>
<body class="w3-content" style="max-width:1300px">
    <style>
    .w3-text-grey,.w3-hover-text-grey:hover,.w3-text-gray,.w3-hover-text-gray:hover {
      color: #000!important
      }
</style>
<style>
  .w3-white,.w3-hover-white:hover {
    color: #000!important;
    background-color: #F5F5DC!important
}
</style>
<style>
  #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
</style>
<style>
    table {
    width:90%;
}
th {
    border: 1.5px solid;
    border-color: #7F5539;
    background-color: #B08968;
    color: white;
    font-size: large;
}
tr {
    border: 1.5px solid;
}
td {
    border: 1.5px solid;
    background-color: #FFE8D6;
    color: #7F5539;
    text-align: center;
}
#search{
  width : 762px;
}
#search_button{
  margin-right : 2px;
}
#reset_button{
  margin-right : 2px;
}
</style>
</html>