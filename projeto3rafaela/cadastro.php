<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <hr>
    <form action="gravar.php" method="post"> 
        Nome do produto:<br/>
        <input type="text" name="nome do produto" id=""
         ><br/><br/>
         Descrição do produto:<br/>
        <input type="text" name="descricao do produto" id=""
         ><br/><br/>
         Quantidade do produto:<br/>
        <input type="text" name="quantidade do produto" id=""
         ><br/><br/>
         Valor unitário:<br/>
        <input type="text" name="valor unitario" id=""
         ><br/><br/>
         Fornecedor:<br/>
         <input type="text" name="fornecedor" id=""
          ><br/><br/>
        <input type="submit" value="Cadastrar">
        
    </form>
</body>
</html>