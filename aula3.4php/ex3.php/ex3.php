<?php

$idade = $_GET["idade"];
if($idade < 16){
    echo"Não pode votar...";

}else if($idade <18){
    echo "Seu voto é facultativo...";

}else if($idade <=70){
    echo "Voto Obrigatório...";

}else{
    echo"Voto Facultativo...";
}


?>