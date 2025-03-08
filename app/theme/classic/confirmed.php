<?php
include ("app/config.php");
include ("app/database/yazilar.php");
include ("app/database/router.php");


error_reporting(0);







?>


<!DOCTYPE html>
<html>
<head>
    <?php include ("app/tag/main/meta.php");  ?>
    <link rel="stylesheet" type="text/css" href="assets/theme/classic/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

</head>
<body>
    <img class="wave" src="assets/theme/classic/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="assets/theme/classic/img/loginform.svg">
        </div>
        <div class="login-content">
            <form action="" method="">
                <img src="assets/theme/classic/img/logom.png" width="100">
                <h2 class="title"><?php echo $confirmedbaslik; ?></h2>
        <center>        <p style="max-width:87%; font-size:15px; color: #999; line-height:20px; box-sizing:border-box;"><?php echo $confirmedyazi; ?></p></center>
         <br>      
                <div>
                    </form>
                    <form action="https://www.instagram.com/">
                    <input type="submit" class="btn" value="Go Instagram">
                </form>
                </div>
                
                </div>
                
            
         
        </div>
    </div>
    <script type="text/javascript" src="assets/theme/classic/js/main.js"></script>
</body>
</html>