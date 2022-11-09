<?php 
//PASSO 1- pegar dados da tela
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$dtcadastro = date("y-m-d"); // padrão do banco


//PASSO 2- montar a conexão com o banco de dados
include_once'./conexao.php';

//PASSO 3- montar o sql de gravar no banco





?>