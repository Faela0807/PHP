<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faça um script que converta metros para centímetros. -->

    <form action="lista5.php" method="get">
        <input type="number" name= "valor">
        <input type="submit" value= "transformar">
        <br><br>
    </form>

    <?php
        $valor = $_GET["valor"];
        $resultado = $valor = 100;

       echo" o resultado é:" .$resultado." cm";
    ?>

</body>
</html>