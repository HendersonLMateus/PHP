<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
</head>
<body>
<h3> Usuários </h3>

<?php

    require_once "conexao.php";
    $conexao = novaConexao(); 
    $usuarios = "SELECT distinct nome FROM usuario;";
    $online = $conexao->query($usuarios);
    $usu = [];

    if($online->num_rows > 0){
        while($row1 = $online->fetch_assoc()){
            $usu[] = $row1;  
        }
    }

    $i = 0;
    foreach($usu as $u):?>

    <td><?= $i . ' - ' . $u['nome']?></td>
    <?='<br>'?>

    <?php
    $i += 1;
    ?>
    <?php endforeach ?>

</body>
</html>




