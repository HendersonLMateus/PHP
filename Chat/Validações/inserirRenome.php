<?php


require_once "conexao.php";

ini_set('display_errors', 0);
ini_set('display_startup_erros', 0);
$nickname = $_POST['nickname'];
$novoNome = $_POST['novoNome'];
$conexao = novaConexao();

$sql =
"UPDATE usuario
SET nome = '{$novoNome}'
WHERE nome = '{$nickname}' ";

$delete = "DELETE FROM usuario
WHERE nome = '{$nickname}' ";

if($att = $conexao->query($sql)){
    if($a = $conexao->query($delete)){
        header('Location: chat.php?nickname=' . $novoNome . '&r=ok');
    }
}
else{
    echo "Erro na mudança de Renomeação";
}






?>