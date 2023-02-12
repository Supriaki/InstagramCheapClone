<?php
  session_start();

  // Checking if session is enabled
  if(!isset($_SESSION['user'])) {
    echo '<script language="JavaScript" type="text/javascript">
              location.href="index.php?b=bs";
        </script>';
  }
?>

<?php
include("funkcje/fun.php");
$uzytkownik = $_SESSION['user'];
?>
<link rel='stylesheet' href="style/style_edytuj.css" type="text/css">

<div class="container">
  <div class="row">
    <h2 class="edytuj_h2">Edycja Profilu</h2>
  </div>
  <div class="row">
    <h4 class="edytuj_h4" style="text-align: center">Edycja & Dodawanie</h4>
  </div>
  <form action="index.php?str=edycja" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_us" value="<?php echo znajdzIdUsera($uzytkownik); ?>" />
    <div class="row input-container">
      <div class="col-xs-12">
        <div class="styled-input wide">
          <input type="text" name="nick" value="<?php echo znajdzNick($uzytkownik);?>" required />
          <label>Nick</label>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="styled-input wide">
          <input type="password" name="haslo" />
          <label>Hasło</label>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="styled-input wide">
          <input type="password" name="haslo_powt" />
          <label>Ponownie Hasło</label>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="styled-input wide">
          <textarea name="opis"><?php echo wyswietlOpis($uzytkownik);?></textarea>
          <label>Opis</label>
        </div>
      </div>

      <p><h3>Opcja Dodania Zdjęcia!</h3></p>
      <div class="col-xs-12">
        <div class="styled-input wide">
          <input type="file" name="zdjecie" />
          <!-- <label>Dodaj Plik</label> -->
        </div>
      </div>
      <div class="col-xs-12">
        <div class="styled-input wide">
          <textarea name="opiszdj"></textarea>
          <label>Opis nowego zdjęcia</label>
        </div>
      </div>


      <p><h3>Opcja Dodania Zdjęcia Profilowego!</h3></p>
      <div class="col-xs-12">
        <div class="styled-input wide">
          <input type="file" name="profilowe" />
        </div>
      </div>

      <div class="col-xs-12">
        <button class="btn-lrg submit-btn" type="submit">Zapisz</button>
      </div>
    </div>
  </form>
</div>
