        <?php 
        $local=$_SERVER['SERVER_NAME'];
        $al=$spexcon->query("SELECT * FROM tag ");
        $veri=$al->fetch_assoc();
        $sitebaslik=$veri['sitebaslik'];
        $siteaciklama=$veri['siteaciklama'];
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $sitebaslik;?></title>    
        <link rel="icon" type="image/png" href="assets/img/faviconig.png"/>
        <meta name="robots" content="noimageindex, noarchive">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#ffffff">
        <meta property="og:description" content="<?php echo $siteaciklama; ?>">
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">                                                                
        <meta property="og:image" content="assets/img/meta.png" />
        <meta property="og:type" content="website">                                  
        <meta property="og:url" content="$local">                        
        <meta property="og:title" content="<?php echo $sitebaslik; ?>">
        <meta property="og:description" content="<?php echo $siteaciklama; ?>">