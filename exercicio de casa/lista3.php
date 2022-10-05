<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Faça um script que peça dois números e imprima a soma. -->

<form action="lista3.php" method="get">
        Primeiro Número: <br/> 
        <input type="number" name="num1" placeholder="Digite o 1° número"/>
        <br/> <br/>
        Segundo Número: <br/> 
        <input type="number" name="num2" placeholder="Digite o 2° número"/>
        <br/> <br/>

        <input type="submit" value="Calcular">

    </form>
    <?php

    $n1 =  $_GET["num1"]; 
    $n2 =  $_GET["num2"];

    $somar= $n1 + $n2;

     //saida
     echo "<br/>A soma é : " .$somar;
        
    
    ?>
</body>
</html>