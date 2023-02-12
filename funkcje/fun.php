<?php
  function znajdzNick($osoba){
    include("sql_login.php");
    $id_user = znajdzIdUsera($osoba);

    $zapytanie_istnieje = "SELECT count(*) FROM users WHERE id_users='$id_user'";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);
    $ile_znaleziono=$wiersz[0];
    
    if ($ile_znaleziono > 0) {
      return $osoba;
    } else {
      return "Nie istnieje";
    }
  }

  function ileZdjec($osoba){
    $id_user = znajdzIdUsera($osoba);

    if (!is_dir('img_users/'.$id_user)) { return 0; };
    $files = glob("img_users/". $id_user . "/zdj/*.*");
    return count($files);
  }

  function ileObserwujacych($osoba){
    include("sql_login.php");
    $id_user = znajdzIdUsera($osoba);
    
    $zapytanie_istnieje = "SELECT obserwatorzy FROM users WHERE id_users='$id_user'";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);
    
    if ($wiersz == 0) { return 0; }
    return $wiersz[0];
  }

  function ileObserwuje($osoba){
    include("sql_login.php");
    $id_user = znajdzIdUsera($osoba);

    $zapytanie_istnieje = "SELECT obserwowani FROM users WHERE id_users='$id_user'";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);

    if ($wiersz == 0) { return 0; }
    return $wiersz[0];
  }

  function wyswietlOpis($osoba){
    include("sql_login.php");
    $id_user = znajdzIdUsera($osoba);

    $zapytanie_istnieje = "SELECT opis FROM users WHERE id_users='$id_user'";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);

    if ($wiersz == 0) { return "Nie istnieje użytkownik"; }
    return $wiersz[0];
  }

  function wyswietlProf(string $osoba){
    $id_user = znajdzIdUsera($osoba);
    $files = glob("img_users/". $id_user . "/prof/*.*");
    for ($i=0; $i<count($files); $i++)
    {
      $image = $files[$i];
      $supported_file = array(
              'gif',
              'jpg',
              'jpeg',
              'png'
        );

      $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
      if (in_array($ext, $supported_file)) {
          return $image;
        } else {
          continue;
        }
    }

    return "img/def_prof.png";
  }

  function wyswietlZdjecia($osoba){
    $id_user = znajdzIdUsera($osoba);

    $dir = "img_users/". $id_user . "/zdj/*.*";

    $array_paths = array();

    $files = glob("img_users/". $id_user . "/zdj/*.*");
    
    if (count($files) == 0) { 
      return '
      <div class="col-lg-6 mb-2 pr-lg-1">
      <img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-lg-6 mb-2 pl-lg-1">
        <img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-lg-6 pr-lg-1 mb-2">
        <img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-lg-6 pl-lg-1">
        <img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm">
      </div>';
    }

    for ($i=0; $i< 4; $i++)
    {
      $image = $files[$i];
      $supported_file = array(
              'gif',
              'jpg',
              'jpeg',
              'png'
        );

      $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
      if (in_array($ext, $supported_file)) {
          $array_paths[] = $image;
        } else {
          continue;
        }
    }

    return '
    <div class="col-lg-6 mb-2 pr-lg-1">
    <img src="'. $array_paths[0] .'" alt="" class="img-fluid rounded shadow-sm">
    </div>
    <div class="col-lg-6 mb-2 pl-lg-1">
      <img src="'. $array_paths[1] .'" alt="" class="img-fluid rounded shadow-sm">
    </div>
    <div class="col-lg-6 pr-lg-1 mb-2">
      <img src="'. $array_paths[2] .'" alt="" class="img-fluid rounded shadow-sm">
    </div>
    <div class="col-lg-6 pl-lg-1">
      <img src="'. $array_paths[3] .'" alt="" class="img-fluid rounded shadow-sm">
    </div>';
  }

  function znajdzIdUsera($osoba){
    include('sql_login.php');
    $zapytanie_dostania_id = "SELECT id_users FROM `users` WHERE user='$osoba';";  
    $wynik = mysqli_query($conn, $zapytanie_dostania_id);
    $wiersz = mysqli_fetch_array($wynik);
    if ($wiersz == null) { return 0;}
    return $wiersz[0];
  }

  function znajdzNickUsera($id_osoby){
    include('sql_login.php');
    $zapytanie_dostania_id = "SELECT user FROM `users` WHERE id_users='$id_osoby'";  
    $wynik = mysqli_query($conn, $zapytanie_dostania_id);
    $wiersz = mysqli_fetch_array($wynik);
    if ($wiersz == null) { return 0;}
    return $wiersz[0];
  }

  function wyswietlWszystkieZdjecia($osoba){
    $id_user = znajdzIdUsera($osoba);

    $dir = "img_users/". $id_user . "/zdj/*.*";

    $array_paths = array();

    $files = glob("img_users/". $id_user . "/zdj/*.*");
    
    if (count($files) == 0) { 
      return '';
    }

    for ($i=0; $i < count($files); $i++)
    {
      $image = $files[$i];
      $supported_file = array(
              'gif',
              'jpg',
              'jpeg',
              'png',
              'webp'
        );

      $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
      if (in_array($ext, $supported_file)) {
          $array_paths[] = $image;
        } else {
          continue;
        }
    }

    $licznik_template = 0;
    $klasy_string = array("card card_small", "card card_medium", "card card_large", "card card_medium", "card card_small", "card card_medium", "card card_large");
    foreach ($array_paths as $zdjecie_path){
      if ($licznik_template == 6) {$licznik_template = 0;}
      echo '<div class="' . $klasy_string[$licznik_template] . '"><img class="rounded wszystkiezdj_wys" src="' . $zdjecie_path . '"></div>';
      $licznik_template++;
    }

    $template = '
    <div class="card card_small"></div>  1
    <div class="card card_medium"></div> 2
    <div class="card card_large"></div>  3
    <div class="card card_medium"></div> 2
    <div class="card card_small"></div>  1
    <div class="card card_medium"></div> 2 
    <div class="card card_large"></div>  3
    ';

  }

  function sprawdzPierwszeIdPierwszegoZdjecia() {
    // Sprawdzamy pierwsze id zdjecia zeby nie wywalic wszystkiego
    include("sql_login.php");
    $zapytanie_istnieje = "SELECT id_ost_zdj FROM `ostatnie_zdj` ORDER BY id_ost_zdj;";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);

    $pierwsze_id=$wiersz[0];

    return $pierwsze_id;
  }

  function sprawdzOstatnieIdOstatniegoZdjecia(){
    // Sprawdzamy ostatnie id zdjęcia zeby sie nie zgubić.
    include("sql_login.php");
    $zapytanie_istnieje = "SELECT id_ost_zdj FROM `ostatnie_zdj` ORDER BY id_ost_zdj DESC;";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);

    $ostatnie_id=$wiersz[0];

    return $ostatnie_id;
  }

  function wyswietlOstatnieZdjecia($id_zdjecia){
    // Wyciagnij sciezke ostatniego zdjecia
    include("sql_login.php");
    $zapytanie_istnieje = "SELECT ostatnie_zdj_path FROM `ostatnie_zdj` WHERE id_ost_zdj = $id_zdjecia;";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);

    $sciezka_zdjecia=$wiersz[0];

    return $sciezka_zdjecia;
  }

  function wyswietlNickOstatniegoZdjecia($id_zdjecia){
    // Wyciagni nick osoby z ostatniego zdjecia
    include("sql_login.php");
    $zapytanie_istnieje = "SELECT nick_ost FROM `ostatnie_zdj` WHERE id_ost_zdj = $id_zdjecia;";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);

    $nick_zdjecia = $wiersz[0];

    $res = znajdzNickUsera($nick_zdjecia);

    return $res;
  }

  function wyswietlOpisOstatniegoZdjecia($id_zdjecia){
    include("sql_login.php");
    $zapytanie_istnieje = "SELECT opis_zdj FROM `ostatnie_zdj` WHERE id_ost_zdj = $id_zdjecia;";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);

    $nick_zdjecia = $wiersz[0];

    return $nick_zdjecia;
  }

  function wyswietlDateOstatniegoZdjecia($id_zdjecia){
    include("sql_login.php");
    $zapytanie_istnieje = "SELECT data_dod FROM `ostatnie_zdj` WHERE id_ost_zdj = $id_zdjecia;";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);

    $godzina_postu = timeAgo($wiersz[0]);

    return $godzina_postu;
  }

  function timeAgo($time_ago) {
    $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
    $time  = time() - $time_ago;

    switch($time):
    // seconds
    case $time <= 60;
    return 'mniej niż minute temu';
    // minutes
    case $time >= 60 && $time < 3600;
    return (round($time/60) == 1) ? 'minute temu' : round($time/60).' minut temu';
    // hours
    case $time >= 3600 && $time < 86400;
    return (round($time/3600) == 1) ? 'godzine temu' : round($time/3600).' godzin temu';
    // days
    case $time >= 86400 && $time < 604800;
    return (round($time/86400) == 1) ? 'dzień temu' : round($time/86400).' dni temu';
    // weeks
    case $time >= 604800 && $time < 2600640;
    return (round($time/604800) == 1) ? 'tydzień temu' : round($time/604800).' tygodnie temu';
    // months
    case $time >= 2600640 && $time < 31207680;
    return (round($time/2600640) == 1) ? 'miesiąc temu' : round($time/2600640).' miesięcy temu';
    // years
    case $time >= 31207680;
    return (round($time/31207680) == 1) ? 'rok temu' : round($time/31207680).' lat temu' ;

    endswitch;
  }

  function sprawdzOstatnieIdUseraDESC() {
    include("sql_login.php");
    $zapytanie_istnieje = "SELECT id_users FROM `users` ORDER BY id_users DESC;";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);

    return $wiersz[0];
  }

  function sprawdzOstatnieIdUseraASC() {
    include("sql_login.php");
    $zapytanie_istnieje = "SELECT id_users FROM `users` ORDER BY id_users;";
    $wynik = mysqli_query($conn, $zapytanie_istnieje);
    $wiersz = mysqli_fetch_row($wynik);

    return $wiersz[0];
  }

  function wyswietlSugestie($id_zalogowanego) {
    include("sql_login.php");

    $maxIndeks = sprawdzOstatnieIdUseraDESC();
    $minIndeks = sprawdzOstatnieIdUseraASC();
    $ilosc_sugestii = 0;

    $array_idkow = array();

    while(count($array_idkow) != 5)
    {
      $Indeks = rand($minIndeks, $maxIndeks);
      $zapytanie_usera = "SELECT id_users FROM `users` WHERE id_users = $Indeks;";
      $wynik = mysqli_query($conn, $zapytanie_usera);
      $wiersz = mysqli_fetch_row($wynik);
      
      if ($wiersz[0] != "") 
      {
        if ($wiersz[0] != $id_zalogowanego) 
        {
          array_push($array_idkow, $wiersz[0]);
          $array_idkow = array_unique($array_idkow);
        }
      }
    }

    foreach ($array_idkow as $id_osoby) 
    {
      $nick_akt = znajdzNickUsera($id_osoby);

      $sugestie_pattern = '
      <div class="profile-card">
      <div class="profile-pic">
          <img src="'.wyswietlProf($nick_akt).'" alt="profile picture">
      </div>
      <div>
          <p class="username">'.$nick_akt.'</p>
          <p class="sub-text">Obejrzyj mnie!</p>
      </div>
      <form action="index.php?str=uzytkownik" method="post">
        <input type="hidden" name="u" value="'.$nick_akt.'">
        <button class="action-btn">Profil</button>
      </form>
      </div>';

      echo $sugestie_pattern; 
    }
  }
?>
