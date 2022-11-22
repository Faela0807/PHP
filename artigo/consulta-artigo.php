<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Consultar Artigos</title>
   </head>
   <body>
     <h1> Artigos </h1>
     <hr> 
     <?php
     include_once'conexao.php';
     $sql = "select * from artigo";
     $result = mysqli_query($con,$sql);
     while($row = mysqli_fetch_array($result)){
         ?>
         <h4> Titulo</h4>
         <?php echo $row[titulo] ?> </h4>
         <h4> Autor</h4>
         <?php echo $row[autor] ?> </h4>
         <img src="uploads/<?php echo $row["foto"] ?>" />
         <?php echo substr($row["artigo"],0,30)."..."; ?>
        <?php
        }
        ?>

    </body>
</html>