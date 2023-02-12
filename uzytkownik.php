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
  if (isset($_POST['u'])){
    $kogo_szukamy = $_POST['u'];
  } else {
    $kogo_szukamy = $_SESSION['user'];
  }

  include("funkcje/fun.php");
?>

<div class="row py-5 px-4">
  <div class="col-md-5 mx-auto">
    <!-- Profile widget -->
    <div class="bg-white shadow rounded overflow-hidden">
      <div class="px-4 pt-0 pb-4 cover">
        <div class="media align-items-end profile-head">
          <div class="profile mr-3">
            <img src="<?php echo wyswietlProf($kogo_szukamy); ?>" alt="Zdjęcie Profile Użytkownika" width="130" class="rounded mb-2 img-thumbnail">
          </div>
          <div class="media-body mb-5 text-white">
            <h4 class="mt-0 mb-0"><?php echo znajdzNick($kogo_szukamy); ?></h4>
            <p class="small mb-4">
            </p><a href="index.php?str=edytuj" class="btn btn-dark btn-sm btn-block">Edytuj Profil</a>
            <a href="index.php?str=wyloguj" class="btn btn-dark btn-sm btn-block">Wyloguj</a>
          </div>
        </div>
      </div>
      <div class="bg-light p-4 d-flex justify-content-end text-center">
        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <h5 class="font-weight-bold mb-0 d-block"><?php echo ileZdjec($kogo_szukamy); ?></h5>
            <small class="text-muted">
              <i class="fas fa-image mr-1"></i>Zdjęć </small>
          </li>
          <li class="list-inline-item">
            <h5 class="font-weight-bold mb-0 d-block"><?php echo ileObserwujacych($kogo_szukamy); ?></h5>
            <small class="text-muted">
              <i class="fas fa-user mr-1"></i>Obserwujący </small>
          </li>
          <li class="list-inline-item">
            <h5 class="font-weight-bold mb-0 d-block"><?php echo ileObserwuje($kogo_szukamy); ?></h5>
            <small class="text-muted">
              <i class="fas fa-user mr-1"></i>Obserwuje </small>
          </li>
        </ul>
      </div>
      <div class="px-4 py-3">
        <h5 class="mb-0">O mnie:</h5>
        <div class="p-4 rounded shadow-sm bg-light">
          <?php echo wyswietlOpis($kogo_szukamy); ?>
        </div>
      </div>
      <div class="py-4 px-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h5 class="mb-0">Ostatnie Zdjęcia</h5>
          <a href="<?php echo 'index.php?str=wszystkiezdj&u='. $kogo_szukamy; ?>" class="btn btn-link text-muted">Pokaż wszystkie</a>
        </div>
        <div class="row">
          <?php echo wyswietlZdjecia($kogo_szukamy);?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$_POST['u'] = null;
?>