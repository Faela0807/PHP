<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Faça um script que peça as 3 notas de um aluno e mostre a média. -->

<form action="lista4.php" method="get">
        Nota 1: <br/> 
        <input type="number" name="nota1" placeholder="Digite o 1° nota"/>
        <br/> <br/>
        Nota 2: <br/> 
        <input type="number" name="nota2" placeholder="Digite o 2° nota"/>
        <br/> <br/>
        Nota 3: <br/> 
        <input type="number" name="nota3" placeholder="Digite o 3° nota"/>
        <br/> <br/>

        <input type="submit" value="Calcular">

    </form>
    <?php
    $n1 =  $_GET["nota1"]; 
    $n2 =  $_GET["nota2"];
    $n3 =  $_GET["nota3"];

    $media= ($n1 + $n2 + $n3) /3;

     //saida
     echo "<br/>A Média é : " .$media;
        
    
    ?>
</body>
</html>