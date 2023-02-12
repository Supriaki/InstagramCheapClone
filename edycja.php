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
include_once("funkcje/sql_login.php");
include_once("funkcje/fun.php");

if ($_POST['nick'] == null) {
  echo '<script language="JavaScript" type="text/javascript">
  location.href="index.php?b=nun";
  </script>';
}

$login = trim($_POST['nick']);
$id_usera = $_POST['id_us'];
$opis = $_POST["opis"];
$opiszdj = $_POST['opiszdj'];

// Zmiana Hasła
if ($_POST['haslo'] != null && $_POST['haslo_powt'] != null) { 
  if ($_POST['haslo'] == $_POST['haslo_powt']) {
    $haslo = $_POST['haslo'];

    $zapytanie_update_hasla = "UPDATE `users` SET `password` = '$haslo' WHERE `users`.`id_users` = $id_usera;";  
    $wynik = mysqli_query($conn, $zapytanie_update_hasla);
    
    if (!$wynik) {
      echo '<script language="JavaScript" type="text/javascript">
              location.href="index.php?b=zh";
        </script>';
    }
  }
}

//Zmiana Opisu
if ($opis != null) { 
  $zapytanie_update_opisu = "UPDATE `users` SET `opis` = '$opis' WHERE `users`.`id_users` = $id_usera; ";  
  $wynik = mysqli_query($conn, $zapytanie_update_opisu);
  
  if (!$wynik) {
    echo '<script language="JavaScript" type="text/javascript">
              location.href="index.php?b=zo";
        </script>';
  }
}

//Zmiana Loginu Usera
if ($login != null) { 
  $zapytanie_update_nicku = "UPDATE `users` SET `user` = '$login' WHERE `users`.`id_users` = $id_usera;";
  $wynik = mysqli_query($conn, $zapytanie_update_nicku);
  
  if (!$wynik) {
    echo '<script language="JavaScript" type="text/javascript">
              location.href="index.php?b=nlu";
        </script>';
  }
  $_SESSION['user'] = $login;
}


//Dodanie nowego zdjęcia
if ($_FILES["zdjecie"]['name'] != "") {
  $target_dir = "img_users/" .$id_usera. "/zdj/";
  $target_file = $target_dir . $_FILES["zdjecie"]['name'];
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["zdjecie"]);
    if($check !== false) {
      echo "Plik jest zdjęciem - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "Plik nie jest zdjęciem.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Wybacz, plik o takiej nazwie już istnieje";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["zdjecie"]["size"] > 500000) {
    echo "Wybacz, twój plik jest za duży.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Wybacz, tylko JPG, JPEG, PNG & GIF są dozwolone.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Wybacz, twój plik nie został dodany.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["zdjecie"]["tmp_name"], $target_file)) {
      // Dodanie nowego postu do ogolnej tabeli...
      $akt_data = date("Y/m/d H:i:s");
      $zapytanie_dodania_ost_zdj = "INSERT INTO `ostatnie_zdj` (`id_ost_zdj`, `nick_ost`, `ostatnie_zdj_path`, `opis_zdj`, `data_dod`) VALUES (NULL, '$id_usera', '$target_file', '$opiszdj', '$akt_data');";
      $wynik = mysqli_query($conn, $zapytanie_dodania_ost_zdj);

      echo "Plik został dodany!";
    } else {
      echo "Wybacz, wystąpił błąd.";
    }
  }
}


// Dodanie nowego profilowego
if ($_FILES["profilowe"]['name'] != "") {
  $imgpath = 'img_users/' . $id_usera . '/prof/*';
  $files = glob($imgpath); // get all file names
  foreach($files as $file){ // iterate files
    if(is_file($file)) {
      unlink($file); // delete file
    }
  }

  $target_dir = "img_users/" . $id_usera . "/prof";
  $target_file = $target_dir . $_FILES["profilowe"]['name'];
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profilowe"]);
    if($check !== false) {
      echo "Plik jest zdjęciem - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "Plik nie jest zdjęciem.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Wybacz, plik o takiej nazwie już istnieje";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["zdjecie"]["size"] > 500000) {
    echo "Wybacz, twój plik jest za duży.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Wybacz, tylko JPG, JPEG, PNG & GIF są dozwolone.";
    $uploadOk = 0;
  }

  // Check if uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Wybacz, twój plik nie został dodany.";
  // if everything is ok, try to upload file
  } else {
    /* create new name file */
    $basename   = "prof." . $imageFileType;
    $destination  = "img_users/" . $id_usera . "/prof/" . $basename;

    if (move_uploaded_file($_FILES["profilowe"]['tmp_name'], $destination)) {
      echo "Profilowe zostało dodane!";
    } else {
      echo "Wybacz, wystąpił błąd.";
    }
  }
}


echo '<script language="JavaScript" type="text/javascript">
        location.href="index.php?str=uzytkownik";
      </script>';
?>