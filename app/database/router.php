<?php 
error_reporting(0);
$localip=$_SERVER['REMOTE_ADDR'];
$kontrol=$spexcon->query("SELECT * FROM banlist");
$ban=$kontrol->fetch_assoc();
$banned=$ban['ip'];
if ($localip==$banned) {
 header("Location:app/404/index.php");
}
?>