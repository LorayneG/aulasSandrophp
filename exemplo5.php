<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calcular </title>
</head>
<body>
    
  <?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $Md = ($n1 + $n2 + $n3) / 3;

    echo "Média final", number_format($Md,1);

  ?>

</body>
</html>