<?php

#print_r($_POST);

require_once "conexao.php";
    
$sql = "INSERT INTO usuarios 
(nome,email,senha)
Values (?, ?, ?)";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$params = [
    $_POST['nome'],
    $_POST['email'],
    $_POST['senha'],
];

$stmt->bind_param("sss", ...$params);

if($stmt->execute()){
    unset($_POST);
    header("Location: inicio.php?cadastro=OK");
}











?>