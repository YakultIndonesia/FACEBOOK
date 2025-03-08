<?php



include ("../../app/config.php");
 include ("../../app/session/session.php");
$ip = $_SERVER['REMOTE_ADDR'];





?>
<!DOCTYPE html>
<html lang="tr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Z-Panel V6 | User <?php echo $ip; ?></title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
    <!--<link rel="manifest" href="assets\img\favicons\manifest.json">-->
    <meta name="msapplication-TileImage" content="../assets/img/favicon.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../assets\js\config.js"></script>
    <script src="../vendors\overlayscrollbars\OverlayScrollbars.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../vendors\leaflet\leaflet.css" rel="stylesheet">
    <link href="../vendors\leaflet.markercluster\MarkerCluster.css" rel="stylesheet">
    <link href="../vendors\leaflet.markercluster\MarkerCluster.Default.css" rel="stylesheet">
    <link href="../vendors\fullcalendar\main.min.css" rel="stylesheet">
    <link href="../vendors\flatpickr\flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="../vendors\overlayscrollbars\OverlayScrollbars.min.css" rel="stylesheet">
    <link href="../assets\css\theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../assets\css\theme.min.css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
   <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
           <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="https://www.instagram.com/spexcoder">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="../assets/img/favicon.png" alt="" width="40"><span class="font-sans-serif">Panel</span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
            
                  <a class="nav-link" href="../dashboard.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link"><span class="fas fa-user-secret"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                  </a>
                 
                  </ul>
                </li>
               
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">App</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider">
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="ip.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-globe"></span></span><span class="nav-link-text ps-1">IP Konum Tespit</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="map.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-map"></span></span><span class="nav-link-text ps-1">Harita</span></div>
                  </a><!-- parent pages-->
                  <a class="nav-link" href="telegram.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code"></span></span><span class="nav-link-text ps-1">Telegram API</span></div>
                  </a>
                  <a class="nav-link" href="sms.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code"></span></span><span class="nav-link-text ps-1">SMS API</span></div>
                  </a>
                   <a class="nav-link" href="script.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code"></span></span><span class="nav-link-text ps-1">Script Oluştur</span></div>
                  </a>
                  <a class="nav-link" href="ban.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-wifi"></span></span><span class="nav-link-text ps-1">IP Ban</span></div>
                  </a>
                  
                
                

                 
               <!-- parent pages-->
               <a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span>
                      <span class="nav-link-text ps-1">Sosyal</span>
                    </div>
                  </a>
                  <ul class="nav collapse" id="social">
                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/spexcoder" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-text ps-1">Instagram</span></div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://t.me/SanaHasret" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-text ps-1">Telegram</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://github.com/spex1477" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-text ps-1">Github</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>
                </li>



                 
               




              <!--   Data ve veriler Bölümü    -->





           
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Veriler</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider">
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="../data/all.php?spexcoder" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center">
                      <span class="nav-link-icon">
                        <span class="fas fa-user"></span></span>
                        <span class="nav-link-text ps-1">Düşen Hesaplar</span>
                      </div>
                  </a><!-- parent pages-->
                  <a class="nav-link" href="sil.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center">
                      <span class="nav-link-icon">
                        <span class="fas fa-trash"></span></span><span class="nav-link-text ps-1">Hesap Sil</span></div>
                  </a>
                </ul>
                





                <!-- Ayarlar Bölümüdür. -->





                  <!-- label-->
                   <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Ayarlar</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider">
                    </div>
                  </div><!-- parent pages-->  <a class="nav-link" href="adekle.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user-plus"></span></span><span class="nav-link-text ps-1">Admin Ekle</span></div>
                  </a>
          
                      </ul>
                    </li>
                  </ul><!-- parent pages-->
                   <a class="nav-link" href="adsil.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user-minus"></span></span><span class="nav-link-text ps-1">Admin Sil</span></div>
                  </a>
                  
                  </ul><!-- parent pages-->  <a class="nav-link" href="theme.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Temalar</span></div>
                  </a>


                  </ul><!-- parent pages-->
                    <a class="nav-link" href="pages.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text ps-1">Sayfalar</span></div>
                  </a>
                
        

                     </ul><!-- parent pages-->
                   <a class="nav-link" href="sett.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-gavel"></span></span><span class="nav-link-text ps-1">Genel Ayarlar</span></div>
          </a>





                            <!-- SOn nav -->
                  
             </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../dashboard.php?z-panel?V5%user:$ip">
            <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/favicon.png" alt="" width="40"><span class="font-sans-serif">Panel</span></div>
          </a>
         
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                <div class="card shadow-none">
                  <div class="scrollbar-overlay nine-dots-dropdown">
                    <div class="card-body px-3">
                      <div class="row text-center gx-0 gy-0">
                       
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="../assets/img/favicon.png" alt="">
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href=""><span class="fas fa-crown me-1"></span><span>Z-Panel V6</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../index.php">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="https://www.instagram.com/spexcoder">
              <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/favicon.png" alt="" width="40"><span class="font-sans-serif">Panel</span></div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              
                <div class="search-box" data-list=''>
                 
                  </form>
                
                  
                   
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Beyaz Tema">
                  <span class="fas fa-sun fs-0"></span></label>
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Dark Tema"><span class="fas fa-moon fs-0"></span></label></div>
              </li>
             
         
              <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../assets/img/favicon.png" alt="">
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href=""><span class="fas fa-crown me-1"></span><span>Z-Panel V6</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../index.php?logout=true">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
        
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>

          <!--  MAİN CONTENCT SPEX İŞTE YAZAMADIMDA AMK NEYSE
          YILLRDIR KÜLLENMİS ASKİN VAR BENDEEE -->


<h3><b></b></h3>
<div class="table-responsive scrollbar">
  <table class="table table-hover table-striped overflow-hidden">
    <thead>
      <tr>
        <th scope="col">User</th>
        <th scope="col">Pass</th>
       
      </tr>
    </thead>
    <tbody>
    

<h3><b>Admin Sil</b></h3>
<form action="adsilclude.php" method="POST">
<input type="text" name="users" class="input-group-text" placeholder="Username" required><br>
<input type="submit" name="sub" class="btn btn-info" value="Sil" >
</form>
<br><br>
<?php 



$admin = $spexcon->query("SELECT * FROM admin");

while ($list = $admin->fetch_assoc()) {

     $user = $list['user'];
     $pass = $list['pass'];



echo "<tr class='align-middle'>
      <td class='text-nowrap'>$user</td>
      <td class='text-nowrap'>$pass</td>
      </tr>
";



}


?>



</tbody></table></div>


















          <footer><center>
             <b>Designed By SpeX</b>
           </footer></center>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../vendors\popper\popper.min.js"></script>
    <script src="../vendors\bootstrap\bootstrap.min.js"></script>
    <script src="../vendors\anchorjs\anchor.min.js"></script>
    <script src="../vendors\is\is.min.js"></script>
    <script src="../vendors\chart\chart.min.js"></script>
    <script src="../vendors\leaflet\leaflet.js"></script>
    <script src="../vendors\leaflet.markercluster\leaflet.markercluster.js"></script>
    <script src="../vendors\leaflet.tilelayer.colorfilter\leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../vendors\countup\countUp.umd.js"></script>
    <script src="../vendors\echarts\echarts.min.js"></script>
    <script src="../vendors\fullcalendar\main.min.js"></script>
    <script src="../assets\js\flatpickr.js"></script>
    <script src="../vendors\dayjs\dayjs.min.js"></script>
    <script src="../vendors\fontawesome\all.min.js"></script>
    <script src="../vendors\lodash\lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors\list.js\list.min.js"></script>
    <script src="../assets\js\theme.js"></script>
  </body>

</html>    