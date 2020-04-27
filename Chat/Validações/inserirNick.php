<?php

require_once "conexao.php";

$nome = $_POST["nickname"];
    
$sql = "insert into usuario (nome) values ('{$nome}')";
$conexao = novaConexao();    
if($conexao->query($sql)){
    header('Location: chat.php?nickname=' . $nome);
}
else {
    echo "Erro na Inserção do Nickname";
}
?>