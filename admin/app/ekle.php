<?php 

include ("../../app/config.php");
include ("../../app/session/session.php");
$alveri = $spexcon->query("SELECT * FROM tag");

$veri = $alveri->fetch_assoc();

$baslik = $veri['sitebaslik'];
$aciklama = $veri['siteaciklama'];

?>