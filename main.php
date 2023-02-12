<?php
  session_start();

  // Checking if session is enabled
  if(!isset($_SESSION['user'])) {
    echo '<script language="JavaScript" type="text/javascript">
              location.href="index.php?b=bs";
        </script>';
  }

  error_reporting(0);

  include("funkcje/fun.php");
  include("funkcje/sql_login.php");

  if (isset($_GET['p'])){
    $kogo_szukamy = (int)$_GET['p'];
  } else {
    $kogo_szukamy = sprawdzOstatnieIdOstatniegoZdjecia();
  }
  
  if ($kogo_szukamy > sprawdzOstatnieIdOstatniegoZdjecia()) {
    $kogo_szukamy = $kogo_szukamy - 1;
  }
  
  if ($kogo_szukamy < sprawdzPierwszeIdPierwszegoZdjecia()) {
    $kogo_szukamy = $kogo_szukamy + 1;
  }

  $nick_akt = znajdzNick($_SESSION['user']); // Login person
  $nick_najnowszej_osoby = wyswietlNickOstatniegoZdjecia($kogo_szukamy); 
  $sciezka_najnowszego_zdj = wyswietlOstatnieZdjecia($kogo_szukamy); 
  $opis_najnowszego_zdj = wyswietlOpisOstatniegoZdjecia($kogo_szukamy);
  $godzina_najnowszego_zdj = wyswietlDateOstatniegoZdjecia($kogo_szukamy);

  // if ($nick_najnowszej_osoby == 0){
  //   $next_osoba = $kogo_szukamy - 1;
  //   echo '<script language="JavaScript" type="text/javascript">
  //             location.href="index.php?str=main";
  //       </script>';
  // }  
?>

<section class="main">
    <div class="wrapper">
        <div class="left-col">
            <div class="post">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="<?php  echo wyswietlProf($nick_najnowszej_osoby); ?>" alt=""></div>
                        <p class="username"><?php echo $nick_najnowszej_osoby; ?></p>
                    </div>
                    <img src="img/option.PNG" class="options" alt="">
                </div>

                <svg
                  aria-hidden="true"
                  style="position: absolute; width: 0; height: 0; overflow: hidden;"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                <defs>
                  <symbol id="icon-heart" viewBox="0 0 32 32">
                    <path
                      d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"
                    ></path>
                  </symbol>
                </defs>
                </svg>
                
                <div style="display: flex; justify-content: center; align-items: center">
                <svg class="icona icon-heart">
                  <use xlink:href="#icon-heart"></use>
                </svg>
                <img src="<?php echo $sciezka_najnowszego_zdj; ?>" class="post-image" id="iemeg" alt="">
                </div>
                
                <div class="post-content">
                    <div class="reaction-wrapper">
                        <img src="img/like.PNG" class="icon" alt="" id="serce" onclick="swapImage()">
                        <img src="img/comment.PNG" class="icon" alt="">
                        <img src="img/send.PNG" class="icon" alt="">
                        <img src="img/save.PNG" class="save icon" alt="">
                    </div>
                    <p class="likes"><span id="iloscLikeow">0</span> polubień</p>
                    <p class="description"><span><?php echo $nick_najnowszej_osoby; ?></span> <?php echo $opis_najnowszego_zdj; ?></p>
                    <p class="post-time"><?php echo $godzina_najnowszego_zdj;?></p>
                </div>
                <div class="comment-wrapper">
                    <a href="index.php?str=uzytkownik"><img src="<?php echo wyswietlProf($nick_akt); ?>" class="icon" alt=""></a>
                    <input type="text" class="comment-box" placeholder="">
                    <a href="index.php?str=uzytkownik"><button class="comment-btn">Profil</button></a>
                    <a href="index.php?str=edytuj"><button class="comment-btn">Dodaj</button></a>
                    <a href="index.php?str=wyloguj"><button class="comment-btn">Wyloguj</button></a>
                </div>
            </div>
          <div class="nast-posty">
            <form method="get" action="index.php">
                <input type="hidden" name="str" value="main">
                <input type="hidden" name="p" value="<?php echo $kogo_szukamy - 1;?>">
                <button type="submit" class="btn btn-secondary me-1">
                  <i class="bi bi-arrow-left"></i> Poprzedni Post  
                </button>
              </a>
            </form>

            <form method="get" action="index.php">
                <input type="hidden" name="str" value="main">
                <input type="hidden" name="p" value="<?php echo $kogo_szukamy + 1;?>">
                <button type="submit" class="btn btn-secondary">
                  Następny Post <i class="bi bi-arrow-right"></i> 
                </button>
              </a>
            </form>
          </div>
        </div>

        <!-- PRAWA KOLUMNA -->

        <div class="right-col">
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="<?php echo wyswietlProf($nick_akt); ?>" alt="">
                </div>
                <div>
                    <p class="username"><?php echo $nick_akt ?></p>
                    <a href="index.php?str=uzytkownik"><button class="action-btn">Profil</button></a>
                </div>
            </div>
            <p class="suggestion-text">Sugestie dla Ciebie</p>
            <?php wyswietlSugestie(znajdzIdUsera($nick_akt)); ?>
            <p class="sub-text">Nie ma więcej sugestii.</p>
        </div>

    </div>
</section>

<script type="text/javascript">
  const img = document.getElementById('iemeg');
  const icon = document.querySelector('.icona');
  const countEl = document.getElementById('iloscLikeow');
  var ileAkt = parseInt(countEl.innerHTML);
  console.log(ileAkt);

  img.addEventListener("dblclick", () => {
    icon.classList.add("lajk");
    swapImage();
    setTimeout(() => {
      icon.classList.remove("lajk");
    }, 1200);
  });

  function swapImage() {
    if (document.getElementById("serce").src.endsWith("img/like.PNG") == true) {
      document.getElementById("serce").src = "img/like_full.PNG";
      ileAkt = ileAkt + 1;
      countEl.innerHTML = ileAkt.toString();
      console.log(ileAkt);
    } else if (document.getElementById("serce").src.endsWith("img/like_full.PNG") == true) {
      document.getElementById("serce").src = "img/like.PNG";
      ileAkt = ileAkt - 1;
      countEl.innerHTML = ileAkt.toString();
      console.log(ileAkt);
    }
  }
</script>