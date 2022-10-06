<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário. -->
    
    <form method="GET" action="">
     Digite a largura do quadrado:
      <input type="number" name="largura" />
      <br />
     Digite a altura do quadrado:
     <input type="number" name="altura" />
     <input type="submit" value= "calcular"/>
     </form>

  <?php
  $largura = $_GET["largura"];
  $altura = $_GET["altura"];
  $area = $largura * $altura;
  $dobroarea = $area * 2;
  echo "Área: {$area}<br />Dobro da área: {$dobroarea}";
  ?>
</body>

</html>
