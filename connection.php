<?php

// konfiguracja polaczenia z serwerem

$mysql_server = "localhost";
$mysql_database = "projekt_php";
$mysql_admin = "radek";
$mysql_password = "oByg6Bxtrfr9PWHD";

$link = mysqli_connect(
    $mysql_server,
    $mysql_admin,
    $mysql_password,
    $mysql_database);
    
    

if ($link === false) {
    die("Błąd bazy danych" . mysqli_connect_error());
}

echo "udało sie nawiązać połączenie z bazą danych.".
    mysqli_get_host_info($link);

?>