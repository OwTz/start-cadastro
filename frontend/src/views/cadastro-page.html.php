


<?php


    $placa = $_POST['placa'];
    $nome = $_POST['nome'];   
    
    class Carro{
    public function __construct(string $placa, boolval $ativo) {
        $this->placa = $placa;
        $this->ativo = $ativo;
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Project - Cadastro</title>
</head>
<body>
    <form method="POST" action="./cadastro-page.html.php">
        <span> Nome : </span>
        <input type="text" name="nome" id="nome"> <br>
        <span> Placa : </span>
        <input type="placa" name="placa" id="placa">
        <input type="submit" value="enviar">
    </form>

    <?php 
        printf("Resultado <span> $nome </span> , placa <span> $placa </span>");
    ?>
</body>
</html>
