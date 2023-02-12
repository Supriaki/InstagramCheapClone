<?php

if (!isset($_POST['username']) || !isset($_POST['password'])) exit;

$login = trim($_POST['username']);
$haslo = trim($_POST['password']);

include_once("funkcje/sql_login.php");

// Czy istnieje uzytkownik?
$zapytanie_istnieje = "SELECT count(*) FROM uzytk_spec WHERE uzytkownik='$login' AND haslo='$haslo'";
$wynik = mysqli_query($conn, $zapytanie_istnieje);
$wiersz = mysqli_fetch_row($wynik);
$ile_znaleziono=$wiersz[0];

// Wróć z błędem
if ($ile_znaleziono > 0) {
  echo '<script language="JavaScript" type="text/javascript">
          location.href="index.php?str=login";
      </script>';
  exit;
}

// Stworz nowego
$zapytanie_tworz = "";
$wynik = mysqli_query($conn, $zapytanie_istnieje);

if (!$wynik){
  // Istnieje uzytkownik
  echo '<script language="JavaScript" type="text/javascript">
          location.href="index.php?str=login";
      </script>';
  exit;
} else {
  // Nie istnieje


  // Stwórz podfolder z nickiem
  $dir = 'img_users/'.$_SESSION['user'];
  if(!is_dir($dir)){ mkdir($dir, 0777); }
  
  // Stworz tabele w bazie danych
  $zapytanie_tworz_tabel = "CREATE TABLE " . $_SESSION['user'] . "(`id_". $_SESSION['user'] ." ` INT NOT NULL AUTO_INCREMENT , `zdj_miejsce` TEXT NOT NULL , `zdj_data` DATE NOT NULL ,PRIMARY KEY (`id_". $_SESSION['user'] ."`))";
  $wynik = mysqli_query($conn, $zapytanie_tworz_tabel);

  
  echo '<script language="JavaScript" type="text/javascript">
          location.href="index.php?str=uzytkownik";
      </script>';
  exit;
}


//$zapytanie = "SELECT user, opis FROM `users`;";
// $wynik = mysqli_query($conn, $zapytanie);

// while( $wiersz = mysqli_fetch_array($wynik)){
//     echo "Nazwa użytkownika " . $wiersz['user'];
//     echo "<br>"; echo "Jego opis -> " . $wiersz['opis']; echo "<br /><br />"; 
// }

mysqli_close($conn); 
?>