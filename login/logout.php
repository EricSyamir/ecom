<?php
// ini adalah paparan log keluar
session_start();
unset($_SESSION["user"]);
header("location:home.php");
?>