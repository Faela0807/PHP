<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Faça um Programa que peça um número e então mostre a mensagem O número informado foi [número]. -->

    <form action="lista2.php" method="get">
     Digite um número:
     <input type="number" name="numero" />
     <input type="submit" value="enviar" />
     </form>
     <?php
     $numero= $_GET["numero"];
     echo"O Número Informado foi:".$numero;
     ?>
    
</body>
</html>