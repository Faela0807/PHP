<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="lista10.php" method="GET">
    <p> 10.Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:</p>
    <input type="number" name="int1" />
    <input type="number" name="int2" />
    <input type="number" name="real" />
    <input type="submit"  value="Calcular"> </input>
    </form>
 
  <?php

    $int1 = $_GET["int1"];
    $int2 = $_GET["int2"];
    $real = $_GET["real"];

    $primeiro = ($int1*2) + ($int2/2);
    $segundo = ($int1*3) + $real;
    $terceiro = $real**3;

    echo "<br/>O resultado é : " .$int1. " com " .$int2. " é : " .$primeiro;
    echo "<br/>O resultado é : " .$int1. " com " .$real. " é : " .$segundo;
    echo "<br/>O resultado é : " .$real. " é : " .$terceiro;

    ?>
</body>

</html>