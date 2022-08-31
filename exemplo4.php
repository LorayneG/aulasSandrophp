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

    $Ma = ($n1 + $n2) / 2;
    $Md = ($n1 - $n2) / 2;

    echo "A média aritimética é $Ma.";
    echo "<br><br>";
    echo "Metade da diferença é $Md.";
    
  ?>
    
</body>
</html>