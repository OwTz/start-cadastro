


<?php 




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>starting project </title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav> 
    <?php 
        $navbaritens = file_get_contents('http://localhost:1111/configs'); 
        
        $dados = json_decode($navbaritens);

        for($i = 0; $i < count($dados); $i++){
             print("<li class='item-menu'> <a href='http://localhost:1234/$dados[$i]'> $dados[$i] </a> </li> ");
            }
    ?>
    </nav>


    
</body>
</html>
