<?php include_once'cabecalho.php'; ?>
   <h1>Atualização de Cliente</h1>
   <hr>
   <form action="atualizar.php" method="post">
          Nome:<br/>
         <input type="text" name="nome" 
          placeholder="Digite o nome"
          required/>
         <br/><br/>
          E-mail:<br/>
         <input type="text" name="email" 
          placeholder="Digite o e-mail"
          required/>
         <br/><br/>
          Telefone:<br/>
         <input type="text" name="telefone" 
          placeholder="Digite o telefone"
          required/>
         <br/><br/>
         <input type="submit" value="Atualizar"/>
         </form>
         
<?php include_once'rodape.php'; ?>