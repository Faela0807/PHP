<?php include_once'cabecalho.php'; ?>
     <h1>área restrita</h1>
     <hr>
     <form action="verificarlogin.php"method="post">
        Login:<br/>
        <input type="text" name="login" /><br/> 
        <br/><br/>
        Senha:<br/>
        <input type="password" name="senha" /><br/> 
        <br/><br/>
        <input type="submit" value="Logar" /><br/> 
     </form>
     <?php
        if(isset($_GET["msg"])) {
          echo $_GET["msg"];
          }
        ?>
<?php include_once'rodape.php'; ?> 