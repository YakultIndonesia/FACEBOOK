<?php
include ("app/config.php");
include ("app/database/router.php");
include ("app/database/yazilar.php");
$username=$_GET["nick"];
?>
<html>
  <head>

    <link href="assets/theme/bestui/css/style.css" type="text/css" rel="stylesheet"/>
   </head>
   

    

       
 <body style="padding:0px; margin:0px; background: #fafafa;">

</center>
 </div>
 <center>
 <br><br><br>
  <div class="form">
    <form method="post">
<br>	<img src="assets/theme/bestui/image/tik.png" width=80 style="border-radius:50%;">
<br><br>
<h1><?php echo $confirmedbaslik; ?></h1>
<p>
<?php echo $confirmedyazi; ?>
	</p>
	</form>
	</div>
	<br> <br>
<div id="get">

<img src="assets/theme/bestui/image/app.webp" width=120 >

<img src="assets/theme/bestui/image/play.webp" width=120>

</div>

<br><br><br>


<?php include 'assets/theme/bestui/footer.php'; ?>
