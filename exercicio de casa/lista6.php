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
    
    <form action="lista6.php" method="get">
    Digite o Valor do Quadrado:
        <input type="number" name="quadrado" />
        <br/><br/>
        <input type="submit" value="Calcular area do quadraro">
</form>

<?php
$areadoquadraro= $_GET["areadoquadraro"];

// processamento

//area = A = l**2 


?>
    
</body>
</html>
