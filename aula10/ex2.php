<?php

// crie um array com 10 números e informe a média dos números digitados

$numero = array(100,90,8,7,6,5,4,3,2,1);
$soma = 0;
//$quantidade = 10;
$contador = 0;
foreach($numero as $n) {
    $soma += $n;
    //$soma = $soma + $n;
    echo $n."<br/>";
    //$contador = $contador + 1;
    $contador++;

}
echo"<br/> Soma:".$soma;
//echo"<br/>Media:".$soma/$quantidade;
echo"<br/> Contador:".$contador;
echo"<br/> Média:".$soma/$contador;
 ?>