<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="home.php" method="get">
        Numero1: 
        <input type="text" name="num"><br>
        <input type="submit">
</form>
<?php
$raio= $_GET['num'];

echo"Raio: $raio<br />";

echo"Perimetro: ", 2*m_PI*raio, "<br />;

echo"Area: ,M_PI*$raio*$raio, "<br />;
?>

    
</body>
</html>