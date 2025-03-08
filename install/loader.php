<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Config Z-Panel V6</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
	<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>	
<style>
body {
	overflow: auto;
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-color: black;
}	
</style>
</head>
<body>
<center>
<?php 
error_reporting(0);
$config = "../app/config.php";
$spexconfigr = file_exists($config); 
if ($spexconfigr) {
echo "<script>
  swal({
  title:'Hata..',
  text:'Kurulum Zaten Yapılmış!',
  icon:'error',
  button:'Tamam',
});
</script>";
header("Refresh:3; url=../admin/index.php?login");
}
?>
<div class="container">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="row" style="margin-top: -120px;">
		<label style="margin-top: -100px;"><font color="white"><h3><b>Z-Panel V6 Kurulumu</b></h3></font></label><br>
		<label><b><h4><font color="white">Veritabanı Bilgileri</font></h4></b></label><br><br>
		<center>
		<form action="done.php" method="POST">	
		<input type="text" name="dbhost" class="input-group-text" placeholder="localhost" value="localhost" style="width: 320px;" disabled><br>
		<input type="text" name="dbuser" class="input-group-text" placeholder="Database User" style="width: 320px;" required><br>
		<input type="password" name="dbpass" class="input-group-text" placeholder="Database Pass" style="width: 320px;"><br>
		<input type="text" name="dbdata" class="input-group-text" placeholder="Database Name" style="width: 320px;" required><br>
		<font color="white"><hr></font>
		<label><b><h4><font color="white">Admin Bilgileri</font></h4></b></label><br><br>
		<input type="text" name="adminuser" class="input-group-text" placeholder="Admin Username" style="width: 320px;" required><br>
		<input type="password" name="adminpass" class="input-group-text" placeholder="Admin Pass" style="width: 320px;" required><br>
		<input type="submit" name="sub" class="btn btn-outline-danger" value="Kaydet">
	 	</form>
	 	<br><br>
	 	</center>
	</div>
</div>
</center>	 		
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>