<?php

date_default_timezone_set("america/Sao_Paulo");
//resgate de dados da tela
$nome= $_POST["nome"];
$descricao= $_POST["descricao"];
$quantidade= $_POST["quantidade"];
$valor= $_POST["valor"];
$fornecedor= $_POST["fornecedor"];

$dtcadastro= date("Y-m-d"); //Padrão do banco

// abrir conexão com o banco de dados.

include_once'./conexao.php';

//montar o sql de gravação

$sql = "insert into cliente values(null,'".$nome."','".$descricao."','".$quantidade."','".$valor."','".$fornecedor."')";

if (mysqli_query($con,$sql)) {
    $msg = "Cadastro criado com sucesso!";
} else {
    $msg = "Erro ao criar cadastro!";
}
// fechar a conexão com o banco
mysqli_close($con);

if (isset($msg)) {
    echo "<script>alert('{$msg}')</script>";
    }   
include("index.php");

?>