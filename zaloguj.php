<?php
    session_start();
?>

<?php

if (!isset($_POST["login-email"]) || !isset($_POST["login-password"])) exit;

$login = trim($_POST["login-email"]);
$haslo = trim($_POST["login-password"]);

include("funkcje/sql_login.php");

// Czy istnieje uzytkownik?
$zapytanie_istnieje = "SELECT count(*) FROM users WHERE user='$login' AND password='$haslo'";
$wynik = mysqli_query($conn, $zapytanie_istnieje);
$wiersz = mysqli_fetch_row($wynik);
$ile_znaleziono=$wiersz[0];

// Wróć z błędem
if ($ile_znaleziono == 0) {
  // Nie istnieje
  echo '<script language="JavaScript" type="text/javascript">
          location.href="index.php?str=login&b=t";
      </script>';
  exit;
} else if ($ile_znaleziono > 0) {
  // Istnieje taki uzytkownik
  // Set cookie
  setcookie("loginob", $login, time()+60);
  $_SESSION['user'] = $login;

  echo '<script language="JavaScript" type="text/javascript">
          location.href="index.php?str=main";
      </script>';
  exit;
}

mysqli_close($conn); 
?>