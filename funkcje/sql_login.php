<?php

$domena = 'localhost';
$user = 'root';
$pass = '';
$database = 'picturebox';

// Connection with MySQL
$conn = mysqli_connect($domena, $user , $pass);
if (!$conn){
    echo 'Brak połączenia z MySQL!';
    exit;
}

// Picking good database
$baza = mysqli_select_db($conn, $database);
if (!$baza)
{
    echo 'Brak połączenia z bazą uzytkowników!';
    exit;
}

?>