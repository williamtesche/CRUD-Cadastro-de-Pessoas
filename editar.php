<?php

 // conectando com o banco
 
include("bootstrap.php");

$nome = $_GET['nome'];
 $id = $_GET['id'];
 $sql = "SELECT * FROM pessoas where id = $id";
 $result = mysqli_query($conn, $sql);
 $linha = mysqli_fetch_assoc($result);
 
 print_r($nome);


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
    <form action="editado.salvo.php?id=<?=  $id ; ?>" method="POST">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $linha['nome']; ?>">
        </div>
        <br>
        <button type="salvar" class="btn btn-success" >Salvar</button>
</body>

</html>