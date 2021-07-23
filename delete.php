<?php
// conectando com o banco
include("bootstrap.php");

$id = $_GET['id'];

//apagar pessoa do banco de dados 
$sql = "DELETE FROM `pessoas` WHERE id = $id";

// executar o comando
mysqli_query($conn,$sql);

// desconecta do banco
mysqli_close($conn);

// mensagem de sucesso!
echo "pessoa excluida com sucesso!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a href="/">Voltar</a>
</body>
</html>