<?php

//Guarde em um array 5 idades. Exiba quantas pessoas são maior de idade (18 anos) e quantas são menores.

$idade = array(53,40,28,10,4);

$qtmaior=0;
$qtmenor=0;
foreach($idade as $i) {
    if ($i >= 18) {
        $qtmaior++; 
    } else {
        $qtmenor++;
    }
}
echo"<br/> Total de maior de idade ".$qtmaior;  
echo"<br/> Total de maior de idade ".$qtmenor;  

?>