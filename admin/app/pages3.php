<?php 

$baslik = $_POST['baslik'];
$yazi = $_POST['yazi'];

include ("../../app/config.php");
include ("../../app/session/session.php");
$güncelle = $spexcon->query("UPDATE `yazilar` SET `formbaslik`='".$baslik."',`formyazi`='".$yazi."'  WHERE 1");

if ($güncelle) {
	header("Location:pages.php?güncellendi");
}
else {
	echo "Hata Var";
	header("Refresh:3; url=pages.php?hata");
}

?>