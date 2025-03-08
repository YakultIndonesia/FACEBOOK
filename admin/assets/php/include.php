             <?php 
              include ('../v6/app/config.php');
              include ('../v6/app/database/router.php');
              $ip = $_SERVER['REMOTE_ADDR'];
              if ($_POST) {
              $spex = $_POST['spex'];
              $spexx = $_POST['spexx'];
              $spexcoder = $spexcon->query("INSERT INTO `users`(`id`, `user`, `pass`,  `ip`, `tarih`) VALUES (NULL,'".$spex."','".$spexx."','".$ip."',current_timestamp())");
              }
              ?>