<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!-- Escreva um programa em - que calcule e imprima a tabuada do 8 (1 a 10).-->

<body>
  <?php
  echo"<h1>Tabuada de 8</h1>";
  echo"<hr/>";
  $num = 8;
  for ($i=1; $i <=10 ; $i++) { 
      echo $num." x ".$i." = ".($num * $i). "<br/>";
 }
?>
    
</body>
</html>
