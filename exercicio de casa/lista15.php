<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="lista15.php" method="get">
     valor da hora: <br>
     <input type="number" name= "vhora">
     <br><br>
     horas trabalhadas: <br>
     <input type="number" name= "htrab">
     <br><br>
     <input type="submit" value= "calcular">

    </form>

    <?php
    $vhora = $_GET["vhora"];
    $htrabalhadas = $_GET["htrab"];

    $salariobruto = $vhora = $htrabalhadas;
    $inss = $salariobruto *0.08;
    $sindicato = $salariobruto *0.05;
    $iprf = $salariobruto *0.11;
    $salarioliq = $salariobruto - ($inss + $sindicato - $iprf);

    echo " Sálario Bruto : ".$salariobruto;
    echo " <br> Sálario Liquido : ".$salarioliq;
    echo " <br> Inss : ".$inss;
    echo " <br> Irpf : ".$iprf;
    echo " <br> Sindicato : ".$sindicato;

?>

</body>
</html>