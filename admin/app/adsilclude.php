<?php

include ("../../app/config.php");
include ("../../app/session/session.php");
if ($_POST) {
    $user = $_POST['users'];
 	$sil = $spexcon->query("DELETE FROM `admin` WHERE user='".$user."'");
 	if ($sil) {
 	echo "<script>alert('Silindi!')</script>";
 	header("Refresh:1; url=adsil.php");
}
else {
	echo "<script>alert('Silinemedi...')</script>";
	header("Refresh:1; url=adsil.php");
}
}


?>