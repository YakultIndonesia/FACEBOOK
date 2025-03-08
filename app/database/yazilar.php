<?php
// yazilar Tablosunu sectik.
$VerileriCek=$spexcon->query("SELECT * FROM yazilar");
$Verileriİsle=$VerileriCek->fetch_assoc();
// yazilar Tablosundaki Verileri Değişkenlere Atıyoruz. @spexcoder
$homebaslik=$Verileriİsle['homebaslik'];
$homeyazi=$Verileriİsle['homeyazi'];
$formbaslik=$Verileriİsle['formbaslik'];
$formyazi=$Verileriİsle['formyazi'];
$faktorbaslik=$Verileriİsle['faktorbaslik'];
$faktoryazi=$Verileriİsle['faktoryazi'];
$confirmedbaslik=$Verileriİsle['confirmedbaslik'];
$confirmedyazi=$Verileriİsle['confirmedyazi'];
// SpeX Coder © 2022 Tool For Z-Panel V5  --->
?>