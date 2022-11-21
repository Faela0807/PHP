<?php

// pegar dados da tela

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$artigo = $_POST["artigo"];
$foto = $_FILES["foto"];

$ext = explode(".",$foto["name"]);//[foto][nome][ext]
$ext = array_reverse($ext);//[jfif][R]
$ext = $ext[0];

if(($ext != "jpg")&& ($ext != "png") && ($ext != "gif")){
    echo"Arquivo Invalido!";  
} elseif($foto["size"] < 1024 *8){
    echo "Tamanho excedido!";
}else{
    //vamos para o banco
    $con = msqli_connect("localhost","root","","artigo");
}