<?php

// forçar exibição de erros PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// conecta no banco
$host =  "localhost:8889";
$user = "user";
$pass = "123";
$base = "empresa";
$conn = mysqli_connect($host, $user, $pass, $base);

