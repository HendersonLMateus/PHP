<?php

require_once "conexao.php";
        
$sql = "INSERT INTO chamados 
(titulo,categoria,descricao)
Values (?, ?, ?)";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$params = [

    $_POST['titulo'],
    $_POST['categoria'],
    $_POST['descricao']
];

$stmt->bind_param("sss", ...$params);

if($stmt->execute()){
    header("Location: abrir_chamado.php?envio=OK");

}
else{
    echo "NOT STONKS";
}












?>