<?php include_once'cabecalho.php'; ?>
<h4>Consulta por Nome</h4>
<form action="consultar.php" method="get">
  Nome:<br/>
  <input type="text"
  placeholder="Digite o nome para buscar"
  name="nome" required />
  <br/><br/>
  <input type="submit" value="Buscar"/>

</form>
<?php
if(isset($_GET["nome"])){
// pegar o campo nome da tela
$nome = $_GET["nome"];

// abrir a conexão com o banco
include_once'./conexao.php';

// montar a instrução sql para buscar a informação
$sql = "select * from cliente where nome like'".$nome."%'";

// mysql_query() -> executa a instrução no banco
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
?>
<table class="table">
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Data de Cadastro</td>
        <td>Editar</td>
        <td>Excluir</td>
        
    </tr>
    <?php
    while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $row["nome"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["telefone"]; ?></td>
        <td><?php echo $row["dtcadastro"]; ?></td>
        <td><img src="./img/editar.jpg"/>
    </td> <td><img src="./img/excluir.jfif"/></td>
    </tr>
    <?php
    }
    }else{
        echo" Não existe cliente com este nome.";
    }
    }
    include_once'./rodape.php';
?>
