<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Calcular </title>
</head>
<body>
    
  <?php
    $sb = $_POST["salario"];

    $desc = $sb * 0.08;
    $sal = $sb - $desc;

    echo "O desconto é R$ $desc.<br />";
    echo "O salário líquido é R$ $sal.";
  ?>

</body>
</html>