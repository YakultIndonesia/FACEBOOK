<?php
   include("ayar2.php");
   session_start();
   ob_start();
   if(($_POST["user"]==$user) and ($_POST["pass"]==$pass)){
   $_SESSION["login"] = "true";
   $_SESSION["user"] = $user;
   $_SESSION["pass"] = $pass;
   header("Location:dashboard.php?user=$ip");
    }else{
    echo "Kullancı Adı veya Şifre Yanlış.<br>";
    echo "Giriş sayfasına yönlendiriliyorsunuz.";
    header("Location:index.php?admin=false");
  }
 ob_end_flush();
?>