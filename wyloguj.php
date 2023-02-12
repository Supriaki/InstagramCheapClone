<?php
    // Usuwamy cookiesy i sesje
    session_start();    
    session_destroy();

    if (isset($_COOKIE['user'])) {
        unset($_COOKIE['user']);
        setcookie('user', '', time() - 3600, '/'); // czyszczenie ciasteczek
    }
?>

<script language="JavaScript" type="text/javascript">
    location.href="index.php";
</script>