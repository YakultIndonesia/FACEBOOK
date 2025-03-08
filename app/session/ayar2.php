<?php
include ("../app/config.php");
$sorgu=$spexcon->query("SELECT * FROM admin ");               
$cikti =$sorgu->fetch_assoc();               
$user=$cikti['user'];
$pass=$cikti['pass'];
?>