<?php

require_once "conexao.php";

$mensagem = $_POST['mensagem'];
$nome = $_POST['nome'];

$conexao = novaConexao();
$sql = "INSERT INTO usuario (nome,mensagem) values ('{$nome}','{$mensagem}')";


if($inserir = $conexao->query($sql)){
    header("Location: chat.php?nickname=".$nome);
}
else{
    echo 'Erro na inserção da Mensagem';
}













?>