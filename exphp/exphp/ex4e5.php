<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <form action="ex4.php" method= "get">
  Digite um número:<br/>
  <input type="number" name="num" >
  <br/>
  <input type="submit" nalue="Enviar">
  </form><

 <?php
 if (isset($_GET["num"])) {
     $num = $_GET["num"];
     if ($num >0) {
                    if ($i=1 ; $i < $num; $i ++) {
                      echo $i;
            }    
      } else{
          echo "Considere entra com número positivo";
     } // fecha o if do numero maior que zero   
   }// fecha o if do SE existe

    
</body>
</html>



