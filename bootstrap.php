<?php

// forçar exibição de erros PHP
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

// conecta no banco
$host =  "localhost:8889";
$user = "william_willian"; 
$pass = "v&h]BtTAAAvZ";
$base = "william_crud";

$conn = mysqli_connect($host,$base,$user,$pass);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>


