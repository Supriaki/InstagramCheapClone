<?php
if (!isset($_POST['signup-email']) || !isset($_POST['signup-password'])) exit;

include_once("funkcje/sql_login.php");
include_once("funkcje/fun.php");

$login = trim($_POST['signup-email']);
$haslo = trim($_POST['signup-password']);

// Czy istnieje uzytkownik?
$zapytanie_istnieje = "SELECT count(*) FROM users WHERE user='$login' AND password='$haslo'";
$wynik = mysqli_query($conn, $zapytanie_istnieje);
$wiersz = mysqli_fetch_row($wynik);
$ile_znaleziono=$wiersz[0];

if ($ile_znaleziono > 0){
  // Istnieje uzytkownik
  echo '<script language="JavaScript" type="text/javascript">
          location.href="index.php?str=login&b=j";
      </script>';
  exit;
} else {
  // Nie istnieje

  // Stwórz użytkownika
  $zapytanie_tworz_user = "INSERT INTO `users` (`id_users`, `user`, `password`, `obserwowani`, `obserwatorzy`, `opis`) VALUES (NULL, '$login', '$haslo', '0', '0', '');";
  $wynik = mysqli_query($conn, $zapytanie_tworz_user);
  // Wywal bląd jezeli nie stworzyło użytkownika
  if (!$wynik) { exit; }

  // Sprawdz id usera po utworzeniu
  $id_user = znajdzIdUsera($login);

  // Stwórz podfolder z nickiem
  $dir = 'img_users/' . $id_user;
  $dir_prof = 'img_users/' . $id_user . '/prof';
  $dir_zdj = 'img_users/' . $id_user . '/zdj';
  
  if(!is_dir($dir)){ mkdir($dir, 0777); }
  if(!is_dir($dir_prof)){ mkdir($dir_prof, 0777); }
  if(!is_dir($dir_zdj)){ mkdir($dir_zdj, 0777); }

  // Stworz tabele w bazie danych
  $zapytanie_tworz_tabel = "CREATE TABLE " . $login . "(`id_". $login ."` INT NOT NULL AUTO_INCREMENT , `zdj_miejsce` TEXT NOT NULL , `zdj_data` DATE NOT NULL ,PRIMARY KEY (`id_". $login ."`))";
  $wynik = mysqli_query($conn, $zapytanie_tworz_tabel);
}

mysqli_close($conn); 

echo '<script language="JavaScript" type="text/javascript">
location.href="index.php";
</script>';
?>