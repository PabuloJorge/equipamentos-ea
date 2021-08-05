<?php
$serverName = "localhost";
$database = "db_ea_cmequip";
$username = "root";
$password = "";

$strcon = mysqli_connect($serverName, $username, $password, $database);

if (!$strcon) {
    die("Falha na Conexão: " . mysqli_connect_error());
}
