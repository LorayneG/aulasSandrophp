<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas Vindas</title>
</head>
<body>
    
    <?php

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];

    $completo = $nome. " " .$sobrenome;
    
    echo "Olá $completo, seja bem vindo(a)!";
    ?>

</body>
</html>