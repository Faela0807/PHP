<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="explica4.php" method= "get">
        Digite M-matutino, V-Vespertino ou N-Noturno :<br/>
        Digite aqui:
        <input type="text" name="turno">
        <br/><br/>
        <input type="submit" value="verificar">

    </form> 

<?php
$turno= $_GET["turno"];

if ($turno == "m") {
    echo "<br/> Bom Dia!";
}elseif($turno == "v") {
    echo "<br/> Boa tarde!";
}elseif($turno == "n") {
    echo "<br/> Boa noite!";  
}else {
    echo "<br/> Valor inválido.";
}      

?>    
    
</body>
</html>