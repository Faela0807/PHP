<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action "ex7.php" nethod= "get"
   Digite um número para tabuada: <br/>
   <input type "number" name= "num"/>
   <br/>
   <input type= "submit" value= "Enviar">
</form
<?php
if(isset($_GET["num"])){
  $num = $_GET["num"];
    if(($num < 1) || ($num > 10)) {
    echo"aceitar somente valores entre 1 e 10";
  }else{
    for ($i=1; $i <=10 ; $i++) { 
      echo $num." x ".$i." = ".($num * $i). "<br/>";
    }//fecha o for
 }//fecha o if
}// fecha o isset
?>
  
</body>
</html>