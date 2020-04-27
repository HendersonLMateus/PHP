<?php

function novaConexao($db = "helpdesk"){
    $servidor = "127.0.0.1:3306";
    $usuario = "root";
    $senha = "root";

    $conexao = new mysqli($servidor,$usuario,$senha,$db);

    if($conexao->connect_error){
        echo "Erro:" . $conexao->connect_error;
        exit();

    }

    return $conexao;
};




?>
