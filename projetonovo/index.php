<?php 
 include_once'cabecalho.php'; ?>

<span class="badge badge-dark"> SEJA BEM-VINDO! </span>
<br/> <br/>

<h1> <span class="badge badge-dark"> Faça Seu Login </span> <h1>

<form action="verificarlogin.php" method="post">
            Login:<br/>
            <input type="text" name="login" /><br/>
            <br/><br/>
            Senha:<br/>
            <input type="password" name="senha" /><br/>
            <br/><br/>
            <input type="submit" value="Logar" class="btn btn-dark" /><br/> 
            <br/> <br/>

       Não tem cadastro ? 
       <input type="submit" value="cadastre-se" class="btn btn-dark"/>
       </form>
       <?php include_once'rodape.php'; ?>

        <?php
        if(isset($_GET["msg"])) {
          echo $_GET["msg"];       
        }
       ?>