<?php 
include("ayar.php");
session_start();
if (!isset($_SESSION["login"])) {
echo "<center><b><h3>Bu Sayfayı Görüntüleme<br>Yetkiniz Yoktur!</h3></b></center>";
header("Location:../../admin/index.php");
 }else{
}
?>