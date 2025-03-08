<?php
include ("app/config.php"); 
include ("app/database/yazilar.php");


if ($_GET) {
    $username=$_GET["username"];
    session_start();
    $_SESSION["username"]=$username;
    header("location: form.php?username=$username");
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
			<form action="" method="get">
				<img src="assets/theme/classic/img/logom.png" width="100">
				<h2 class="title"><?php echo $homebaslik; ?></h2>
		<center>		<p style="max-width:87%; font-size:15px; color: #999; line-height:20px; box-sizing:border-box;"><?php echo $homeyazi; ?></p></center>
         <br>  		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input" required>
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
