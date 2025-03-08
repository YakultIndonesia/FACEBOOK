<?php
include ("app/config.php");
include ("app/database/yazilar.php");
include ("app/database/router.php");
?>



<DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
 <?php include ("app/tag/main/meta.php"); ?>
  <link rel="stylesheet" type="text/css" href="assets/theme/spex/assets/css/spex.css">
  
  
</head>
 <body>
    <center>  <img src="assets/theme/spex/assets/img/meta.jpg" width="500" height="200" align="align" ></center>
              <br>
             
              <br>
              <br>
             <center> <bold > <h2> 
                      <?php echo $confirmedbaslik; ?>
                      </h2> </bold> </center> 
                      <br>
                      <br>
                      <br>
                      <center> <bold> <h2>

<?php echo $confirmedyazi; ?>
              </h2> </bold> </center>
              <br>
               <center> <img src="assets/theme/spex/assets/img/donetik.gif"  width="370" height="290" align="align"> </center>
               


 </body>

</html>