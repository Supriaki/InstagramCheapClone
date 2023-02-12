<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="img/favico.ico">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="style/classy.css" type="text/css">
    <link rel="stylesheet" href="style/style_login.css" type="text/css" />
    <link rel='stylesheet' href="style/style_main.css" type="text/css">
    <link rel='stylesheet' href="style/style_user.css" type="text/css">

    <title>PictureBox</title>
</head>
<body>

  <header>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php?str=main" >PictureBox</a>
        <form class="d-flex" action="index.php?str=uzytkownik" method="post">
          <input class="form-control me-2" name="u" type="search" placeholder="Wyszukaj" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Szukaj</button>
        </form>
      </div>
    </nav>
    <!-- <nav class="navbar d-flex">
      <div class="justify-content-start" style="margin-left: 15rem;">
        <img src="img/logo1.png" class="rounded" alt="pictureboxlogo" id="logo-index" style="height: 40px; width: 40px; margin-bottom: 5px; margin-top: 5px;">
        <a class="navbar-brand" id="tekst-logo" href="index.php?str=main">PictureBox</a>
      </div>
      <div class="justify-content-end" id="searchbar" >
        <form class="form-inline" action="index.php?str=uzytkownik" method="post">
          <div class="input-group">
            <input id="input-szukaj" class="form-control mr-sm-2" name="u" type="search" placeholder="Wyszukaj" aria-label="Search">
            <button id="butt-szukaj" class="btn btn-outline-success my-2 my-sm-0"  type="submit">Szukaj</button>
          </div>
        </form>
      </div>
    </nav> -->
  </header>

  <div id="szablon">
    <?php
      $roz = ".php";
      
      if (isset($_GET['str']))
      {
        $czyindex = false;
        $plik = $_GET['str'];
        include("$plik$roz");
      } else {
        $plik = "login";
        $czyindex = true;
        include("$plik$roz");
      }
    ?>    
  </div>
</body>

</html>
