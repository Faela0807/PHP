<?php
$carro = array("gol","celta","fox","corola","civic");
var_dump($carro);
echo"<br/>================== <br/>";
$carros1[]="gol";
$carros1[]="hillux";
$carros1[]="camaro";
$carros1[]="ferrari";
$carros1[]="porsche";
$carros1[]="brasília";
var_dump($carros1);

echo"<br/>================== <br/>";
echo" eu tenho um ".$carros1[0];   // impresso um item do vetor


echo"<br/>================== <br/>";   // impresso um item do vetor 
echo" eu tenho um ".$carro[0];

echo"<br/>================== <br/>";

// o que ocorre é o seguinte... fazemos com que o array $car assuma o valor
// de cada elemento do array maior $carro,
foreach($carro as $car){
    // impresso todo o conteúdo do vetor
    echo $car."<br/>";

}

?>
