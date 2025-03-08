<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="title" content="Z-Panel V6">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
	<title>Install Z-Panel V6</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-color: black;
}

.music {
  display: inline-flex;
  align-items: center;
  justify-content: space-between;
  position: relative;
  width: 300px;
  height: 200px;
}

.music .bar {
  width: 12px;
  height: 2px;
  border-radius: 10px;
  background-color: white;
  animation: up_down 1.5s ease-in-out infinite;
}

@keyframes up_down {
  0%,
  100% {
    height: 2px;
  }
  50% {
    height: 80px;
  }
}

.music .bar:nth-child(1) {
  background-color: purple;
  animation-delay: 1s;
}

.music .bar:nth-child(2) {
  background-color: crimson;
  animation-delay: 0.8s;
}

.music .bar:nth-child(3) {
  background-color: deeppink;
  animation-delay: 0.6s;
}

.music .bar:nth-child(4) {
  background-color: orange;
  animation-delay: 0.4s;
}

.music .bar:nth-child(5) {
  background-color: gold;
  animation-delay: 0.2s;
}

.music .bar:nth-child(6) {
  background-color: gold;
  animation-delay: 0.2s;
}

.music .bar:nth-child(7) {
  background-color: orange;
  animation-delay: 0.4s;
}

.music .bar:nth-child(8) {
  background-color: deeppink;
  animation-delay: 0.6s;
}

.music .bar:nth-child(9) {
  background-color: crimson;
  animation-delay: 0.8s;
}

.music .bar:nth-child(10) {
  background-color: purple;
  animation-delay: 1s;
}	
</style>
</head>
<body>
<?php
$spex = "31";
$spexconfig = ("../app/config.php");
$spexconfigr = file_exists($spexconfig); 
if ($spexconfigr) {
echo "<script>
  swal({
  title:'Hata..',
  text:'Kurulum Zaten Yapılmış!',
  icon:'error',
  button:'Tamam',
});
</script>";
header("Refresh:4; url=../admin/index.php?login");
}
else {
header("Refresh:4; url=loader.php");	
}
?>	
<div class='music' align="center" style="">
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
  <div class='bar'></div>
</div>
</body>
</html>