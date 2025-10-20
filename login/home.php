<?php
// ini adalah paparan log keluar 
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>log keluar</title>
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
<a href="/F4/home.php" class="w3-bar-item w3-button w3-text-brown">Menu Utama</a>
<a href="/F4/login/reguser.php" class="w3-bar-item w3-button w3-text-brown">Daftar Masuk</a>
<a href="/F4/login/loginuser.php" class="w3-bar-item w3-button w3-text-brown">Log Masuk</a>
<a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-left-align w3-text-brown" id="myBtn">Produk <i class="fa fa-caret-down"></i></a>
<div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
  <a href="#" class="w3-bar-item w3-button w3-text-brown"><i class="fa fa-caret-right w3-margin-right"></i>Botol air</a>
</div>
<a href="/F4/login/loginuser.php" class="w3-bar-item w3-button w3-text-brown">Troli Pilihan</a>
<a href="/F4/login/logout.php" class="w3-bar-item w3-button w3-text-brown">Log Keluar</a>
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
<header class="w3-container w3-xlarge w3-text-brown">
  <p class="w3-left">Log Keluar</p>
</header>
<!-- Image header -->
<div class="w3-display-container w3-container">
  <img src="/F4/img/maribeli.png" alt="Jeans" style="width:100%">
  <div class="w3-display-topleft w3-text-brown" style="padding:24px 48px">
  <h1 class="w3-jumbo w3-hide-small w3-text-brown">Terima kasih !</h1>
  <h1 class="w3-hide-small w3-text-brown">Sila datang lagi >.< </h1>
  <p><a href="/F4/home.php" class="w3-button w3-white w3-text-brown w3-padding-large w3-large">Kembali</a></p>
</div>
</div>
<div class="w3-container" style="color:#DDBEA9" id="jeans">
<p>Botol air: 8 item</p>
</div>
<!-- Footer -->
<footer class="w3-padding-64 w3-text-brown w3-small w3-center" style="background-color:#FFE8D6" id="footer">
<div class="w3-row-padding">
  <div class="w3-col s4">
    <h4>About</h4>
    <p><a href="#">About us</a></p>
    <p><a href="#">We're hiring</a></p>
    <p><a href="#">Support</a></p>
    <p><a href="#">Find store</a></p>
    <p><a href="#">Shipment</a></p>
    <p><a href="#">Payment</a></p>
    <p><a href="#">Gift card</a></p>
    <p><a href="#">Return</a></p>
    <p><a href="#">Help</a></p>
  </div>
  <div class="w3-col s4 w3-justify">
    <h4>Store</h4>
    <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
    <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
    <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
    <h4>We accept</h4>
    <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
    <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
    <br>
    <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
    <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
    <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
    <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
    <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
  </div>
</div>
</footer>
<div class="w3-brown w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>
<!-- End page content -->
</div>
<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
  <div class="w3-container w3-white w3-center">
    <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
    <h2 class="w3-wide">NEWSLETTER</h2>
    <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
    <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
  </div>
</div>
</div>
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