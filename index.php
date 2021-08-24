<?php 
include("bootstrap.php");


//   if ($_POST){
//     $nome = $_POST['nome'];
//      $id = $_POST['id'];
//     $sql = "INSERT INTO (nome,id) VALUES ('${nome}','${id}')";

//  }


// preparar query para salvar
$sql = "SELECT id, nome FROM pessoas ORDER BY id DESC";

// executa a query
$result = mysqli_query($conn,$sql);

// converter o resultado para um array simpático de pessoas (esta é a parte foda)
$pessoas = [];
while($r = mysqli_fetch_array($result)) {
    $pessoas[] = array(
        "id" => (int)$r["id"],
        "nome" => $r["nome"]
    );
}

//  print_r($pessoas);
//  die;

// desconecta do banco
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylo.css">
    <title>CRUD!</title>
</head>

<body>

    <div id="container">
        <div id="inner-container">

            <header>
                <h1>cadastro de pessoas</h1>
                <p>apredendo a fazer um CRUD maneiro</p>
            </header>

            <main>

                <h2>Listagem de pessoas usando WHILE</h2>

                <ul>
                    <?php
                    $i = 0;
                    while ($i < sizeof($pessoas)) {
                        $p = $pessoas[$i];
                        include("li.php");
                        $i++;
                    }
                    ?>
                         
                    
                </ul>

                <h2>Listagem de pessoas usando FOR</h2>
                <ul>
                    <?php
                    for ($i = 0; $i < sizeof($pessoas); $i++) {
                        $p = $pessoas[$i];
                        include("li.php");
                    }?>
                </ul>


                <h2>Listagem de pessoas usando FOREACH</h2>
                <ul>
                    <?php foreach ($pessoas as $p) {
                        include("li.php");
                    } ?>
                </ul>


                <br>
                <h2>Nova pessoa</h2>
                <form action="/salvar.php" method="POST">
                    <input type="text" name="nome" placeholder="Nome da nova pessoa">
                    <button type="salvar">salvar</button>
                </form>
            </main>

        </div>
    </div>


</body>

</html>