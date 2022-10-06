<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="lista11.php" method="get">
    <p> Calcule seu peso ideal </p>
        <input type="text" name="altura" />
        <br/><br/>
        <input type="submit" value="calcular" />

    
    </Form>

    <?php
    $altura= $_GET["altura"];
    
    $peso= (72.7*$altura)-58;

    echo " <br/> Seu peso ideal é:" .$peso;

    ?>
    
</body>
</html>