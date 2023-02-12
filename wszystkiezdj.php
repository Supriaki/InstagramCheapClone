<?php
  session_start();

  // Checking if session is enabled
  if(!isset($_SESSION['user'])) {
    echo '<script language="JavaScript" type="text/javascript">
              location.href="index.php?b=bs";
        </script>';
  }
  error_reporting(0);
?>

<?php
  if (isset($_GET['u'])){
    $kogo_szukamy = $_GET['u'];
  } else {
    $kogo_szukamy = $_SESSION['user'];
  }

  include("funkcje/fun.php");
?>
<link rel='stylesheet' href="style/style_wszystkiezdj.css" type="text/css">

<div class="wszystkiezdj_body">
    <div class="container mt-5 mb-5">
        <div class="row no-gutters">
            <div class="col-md-4 col-lg-4"><img class="rounded wszystkiezdj_img" src="<?php echo wyswietlProf($kogo_szukamy); ?>"></div>
            <div class="col-md-8 col-lg-8">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between align-items-center p-5 bg-nieb text-white rounded-top">
                        <h3 class="display-5"><a href="index.php?str=uzytkownik"><?php echo znajdzNick($kogo_szukamy); ?></a></h3></div>
                    <div class="p-3 bg-opis text-white ">
                        <h6><?php echo wyswietlOpis($kogo_szukamy); ?></h6>
                    </div>
                    <div class="d-flex flex-row text-white">
                        <div class="p-2 bg-kraniec text-center skill-block flex-fill">
                            <h4><?php echo ileZdjec($kogo_szukamy); ?></h4>
                            <h6>Zdjęć</h6>
                        </div>
                        <div class="p-2 bg-srodek text-center skill-block flex-fill">
                            <h4><?php echo ileObserwujacych($kogo_szukamy); ?></h4>
                            <h6>Obeserwujących</h6>
                        </div>
                        <div class="p-2 bg-kraniec text-center skill-block flex-fill">
                            <h4><?php echo ileObserwuje($kogo_szukamy); ?></h4>
                            <h6>Obserwuje</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pin_container">
    <?php 
        wyswietlWszystkieZdjecia($kogo_szukamy);
    ?>  
</div>

<?php
$_POST['u'] = null;
?>
