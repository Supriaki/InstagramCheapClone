<div id="logowanieIw">
<section class="formularz">
  <h1 class="tytul">PictureBox</h1>
  <span id="blad"></span>
  <div class="loginforms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login" style="color: black;">
        Zaloguj
        <span class="underline"></span>
      </button>
      <form class="form form-login" method="post" action="index.php?str=zaloguj">
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">Nazwa użytkownika</label>
            <input name="login-email" id="login-email" required></input>
          </div>
          <div class="input-block">
            <label for="login-password">Hasło</label>
            <input name="login-password" id="login-password" type="password" required></input>
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup" style="color: black;">
        Zarejestruj
        <span class="underline"></span>
      </button>
      <form class="form form-signup" method="post" action="index.php?str=rejestruj">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-email">Nazwa użytkownika</label>
            <input name="signup-email" id="signup-email" required></input>
          </div>
          <div class="input-block">
            <label for="signup-password">Hasło</label>
            <input name="signup-password" id="signup-password" type="password" required></input>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Powtórz hasło</label>
            <input name="signup-password-confirm" id="signup-password-confirm" type="password" required></input>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
      </form>
    </div>
  </div>
</section>
</div>

<script>
  const switchers = [...document.querySelectorAll('.switcher')]
  switchers.forEach(item => {
    item.addEventListener('click', function() {
      switchers.forEach(item => item.parentElement.classList.remove('is-active'))
      this.parentElement.classList.add('is-active')
    })
  })
</script>

<script>
  let czyblad = <?php 
    if (isset($_GET['b'])){
    echo  "'". $_GET['b'] . "' ;"; } else echo "'" . "f;" . "' ;";
  ?>

  if (czyblad == "t") {
    const miejscebledu = document.getElementById('blad');
    miejscebledu.innerHTML = "Nie ma takiego użytkownika!";
  }

  if (czyblad == "j") {
    const miejscebledu = document.getElementById('blad');
    miejscebledu.innerHTML = "Istnieje już taki użytkownik!";
  }

  if (czyblad == "n") {
    const miejscebledu = document.getElementById('blad');
    miejscebledu.innerHTML = "Coś poszło nie tak!";
  }

  if (czyblad == "bs") {
    const miejscebledu = document.getElementById('blad');
    miejscebledu.innerHTML = "Nie zalogowałeś się cwaniaczku.";
  }

  if (czyblad == "nun") {
    const miejscebledu = document.getElementById('blad');
    miejscebledu.innerHTML = "Nie możesz sobie usunąć nicku.";
  }

  if (czyblad == "zh") {
    const miejscebledu = document.getElementById('blad');
    miejscebledu.innerHTML = "Hasła muszą się różnić od siebie.";
  }

  if (czyblad == "zo") {
    const miejscebledu = document.getElementById('blad');
    miejscebledu.innerHTML = "Opis się z jakiegoś powodu nie zmienił :(";
  }

  if (czyblad == "nlu") {
    const miejscebledu = document.getElementById('blad');
    miejscebledu.innerHTML = "Nie zmieniło ci loginu usera";
  }

</script>