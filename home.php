<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>menu utama</title>
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
<a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-text-brown w3-left-align" id="myBtn">Produk <i class="fa fa-caret-down"></i>
</a>
<div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
  <a href="/F4/login/loginuser.php" class="w3-bar-item w3-button w3-text-brown"><i class="fa fa-caret-right w3-margin-right"></i>Botol air </a>
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
<header class="w3-container w3-xlarge">
  <p class="w3-left w3-text-brown">Produk </p>
  <p class="w3-container w3-right">
    <a href="/F4/login/loginuser.php" class="w3-bar-item w3-button w3-text-brown"><i class="fa fa-shopping-cart"></i></a>
  </p>
  <p>
    <div class="w3-container w3-right w3-bar-item">
      <div class="w3-dropdown-hover" style="background-color:#DDBEA9">
      <a class="w3-button w3-text-brown"><i class="fa fa-search"></i></a>
      <div class="w3-dropdown-content w3-light-grey w3-medium" id="myDIV">
        <input class="w3-input w3-padding" type="text" placeholder="Cari warna pilihan" id="myInput" onkeyup="myFunction()">
        <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/loginuser.php">pink / blue </a>
        <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/loginuser.php">pink </a>
        <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/loginuser.php">purple / blue </a>
        <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/loginuser.php">purple </a>
        <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/loginuser.php">blue / purple </a>
        <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/loginuser.php">blue </a>
        <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/loginuser.php">blue / orange </a>
        <a class="w3-bar-item w3-button" style="padding: 10px 24px" href="/F4/login/loginuser.php">green </a>
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
<!-- Image header -->
<div class="w3-display-container w3-container">
  <img src="/F4/img/mainpagee.jpg" alt="Jeans" style="width:100%">
  <div class="w3-display-topleft w3-text-brown" style="padding:24px 48px">
  <h1 class="w3-jumbo w3-hide-small w3-text-brown">Selamat Datang !</h1>
  <h1 class="w3-hide-small w3-text-brown">Koleksi 2023</h1>
  <p><a href="#products" class="w3-button w3-white w3-text-brown w3-padding-large w3-large">Beli sekarang</a></p>
</div>
</div>
<!-- Header -->
<div class="w3-container w3-text-brown" id="products">
  <p>Botol air: 8 item</p>
</div>
<!-- Product grid -->
<div class="w3-display-container w3-container">
  <div class="w3-col l3 s6">
    <div class="w3-container" href="/F4/login/loginuser.php">
      <div class="w3-display-container" >
        <img src="/F4/img/rosablauu.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft w3-yellow">Hangat !</span>
        <div class="w3-display-middle w3-display-hover" href="/F4/login/loginuser.php">
          <button class="w3-button w3-white w3-text-brown" ><a href="/F4/login/loginuser.php">Beli sekarang <i class="fa fa-shopping-cart"></a></i></button>
        </div>
      </div>
      <p style="text-align:center; color:#7F5539">B01<br><b>RM19.90</b></p>
    </div>
    <div class="w3-container">
      <div class="w3-display-container">
        <img src="/F4/img/rosa.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft w3-yellow">Hangat !</span>
        <div class="w3-display-middle w3-display-hover" >
          <button class="w3-button w3-white w3-text-brown"><a href="/F4/login/loginuser.php">Beli sekarang <i class="fa fa-shopping-cart"></a></i></button>
        </div>
      </div>
      <p style="text-align:center; color:#7F5539">B05<br><b>RM24.90</b></p>
    </div>
  </div>
  <div class="w3-col l3 s6">
    <div class="w3-container">
      <div class="w3-display-container">
        <img src="/F4/img/lilablau.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft w3-green">Popular !</span>
        <div class="w3-display-middle w3-display-hover">
          <button class="w3-button w3-white w3-text-brown"><a href="/F4/login/loginuser.php">Beli sekarang <i class="fa fa-shopping-cart"></a></i></button>
        </div>
      </div>
      <p style="text-align:center; color:#7F5539">B02<br><b>RM19.90</b></p>
    </div>
    <div class="w3-container">
      <div class="w3-display-container">
        <img src="/F4/img/lila.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft w3-green">Popular !</span>
        <div class="w3-display-middle w3-display-hover">
          <button class="w3-button w3-white w3-text-brown"><a href="/F4/login/loginuser.php">Beli sekarang <i class="fa fa-shopping-cart"></a></i></button>
        </div>
      </div>
      <p style="text-align:center; color:#7F5539">B06<br><b>RM24.90</b></p>
    </div>
  </div>
  <div class="w3-col l3 s6">
    <div class="w3-container">
      <div class="w3-display-container">
        <img src="/F4/img/blaulila.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft w3-blue">Terkini !</span>
        <div class="w3-display-middle w3-display-hover">
          <button class="w3-button w3-white w3-text-brown"><a href="/F4/login/loginuser.php">Beli sekarang <i class="fa fa-shopping-cart"></a></i></button>
        </div>
      </div>
      <p style="text-align:center; color:#7F5539">B03<br><b>RM19.90</b></p>
    </div>
    <div class="w3-container">
      <div class="w3-display-container">
        <img src="/F4/img/blau.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft w3-blue">Terkini !</span>
        <div class="w3-display-middle w3-display-hover">
          <button class="w3-button w3-white w3-text-brown"><a href="/F4/login/loginuser.php">Beli sekarang <i class="fa fa-shopping-cart"></a></i></button>
        </div>
      </div>
      <p style="text-align:center; color:#7F5539">B07<br><b>RM24.90</b></p>
    </div>
  </div>
  <div class="w3-col l3 s6">
    <div class="w3-container">
      <div class="w3-display-container">
        <img src="/F4/img/blauorange.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft w3-red">Terhad !</span>
        <div class="w3-display-middle w3-display-hover">
          <button class="w3-button w3-white w3-text-brown"><a href="/F4/login/loginuser.php">Beli sekarang <i class="fa fa-shopping-cart"></a></i></button>
        </div>
      </div>
      <p style="text-align:center; color:#7F5539">B04<br><b>RM19.90</b></p>
    </div>
    <div class="w3-container">
      <div class="w3-display-container">
        <img src="/F4/img/grun.jpg" style="width:100%">
        <span class="w3-tag w3-display-topleft w3-red">Terhad !</span>
        <div class="w3-display-middle w3-display-hover">
          <button class="w3-button w3-white w3-text-brown"><a href="/F4/login/loginuser.php">Beli sekarang <i class="fa fa-shopping-cart"></a></i></button>
        </div>
      </div>
      <p style="text-align:center; color:#7F5539">B08<br><b>RM24.90</b></p>
    </div>
  </div>
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
<div class="w3-brown w3-center w3-padding-24">Powered by <a  title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>
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