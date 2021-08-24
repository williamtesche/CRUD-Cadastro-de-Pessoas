<?php

// forçar exibição de erros PHP
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

// conecta no banco
$host =  "localhost";
$port = 8880;
$user = "william_willian"; 
$pass = "v&h]BtTAAAvZ";
$base = "william_crud";

$conn = mysqli_connect($host,$user,$pass,$base, $port);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>


