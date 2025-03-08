<?php

include ("../../app/config.php");
include ("../../app/session/session.php");
if ($_POST) {
	$kaldır = $_POST['banip'];
	$sil=$spexcon->query("DELETE FROM `banlist` WHERE ip='".$kaldır."'");
	if ($sil) {
		echo "<script>alert('Ban Kaldırıldı..')</script>";
		header("Refresh:1; url=ban.php");
	}
	else {
		echo "<script>alert('Hata Var!')</script>";
		header("Refresh:1; url=ban.php");
	}
}


?>