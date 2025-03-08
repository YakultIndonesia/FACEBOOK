<?php
include ("../../app/session/session.php");
$dosya = ("../../app/spex/ips.txt");

unlink("../../app/spex/ips.txt");


$ac = fopen("$dosya", 'a+');
fwrite($ac," ");
fclose($ac);
header("Location:../dashboard.php?temizlendi");
?>