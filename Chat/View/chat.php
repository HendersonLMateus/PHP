<?php

require_once 'conexao.php';

ini_set('display_errors', 0);
ini_set('display_startup_erros', 0);

    if ($_GET['r'] == 'ok'){
        $r = "<b> Renomeado com Sucesso </b>";
    }
    $nickname = $_GET['nickname'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $porta = $_SERVER['REMOTE_PORT'];

    $mensagem = $_POST['mensagem'];
    

    $sql = 'SELECT * FROM usuario';
    $conexao = novaConexao();
    $pesquisar = $conexao->query($sql);
    $resgistros = [];

    $delete = "DELETE FROM usuario
    WHERE mensagem = 'BYE' ";
    $deleteU = "DELETE FROM usuario
    WHERE mensagem = 'LIST' ";
    $deleteN = "DELETE FROM usuario
    WHERE mensagem = 'RENAME' ";
    
?>

<!doctype html>
<html lang="pt">
<head>
 <meta charset="utf-8">
 <meta http-equiv="refresh" content="15">
 <title>Chat público</title>
 <style rel="stylesheet" type="text/css">

    .menu {
        float: right;
        width: 30%;
        
        }

    .info {
        float: left;
        width: 60%;
        padding: 15px;
        background-color: white;
        }

    </style>

    <script language=javascript type="text/javascript">
        function newPopup(){

        var mensagem =  form1.mensagem.value;

        if(mensagem == "LIST"){
        varWindow = window.open ('usuarios.php', 'popup')
            }
        }
    </script>
</head>
<body>

<div class="info"> <h3> Informações do Usuário </h3>
    <p> IP: <b> <?= $ip  ?> </b></p>
    <p> Nickname: <b> <?= $nickname ?> </b></p>
    <p> <b> <?= $r ?> </b></p>
</div>

<div class="menu">
    <form name="form1" onsubmit=" return newPopup(this)" action="inserirMensagem.php" method="post">
        <input type="hidden" name="nome" value="<?= $nickname ?>">
        <input type="text" name="mensagem"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


<?php

echo '<br>';

if($pesquisar->num_rows > 0){
    while($row = $pesquisar->fetch_assoc()){
        $resgistros[] = $row;
        
    }
}

foreach($resgistros as $registro):?>
        <td><?=$ip  . " - " ?></td>
        <td><?=$porta . " - " ?></td>
        <td><?=$registro['nome'] ?></td> 
        <td><?= '- ' . $registro['mensagem'] ?></td> 
        <?='<br>'?>
        
        <?php
        
        if($registro['mensagem'] == 'BYE'){
            header("Location: inicio.php");
            $conexao->query($delete);
        }

        if($registro['mensagem'] == 'LIST'){
           echo '<a href="javascript:newPopup()"></a>;';
            $conexao->query($deleteU);
        } 

        if($registro['mensagem'] == 'RENAME'){
            header("Location: renomear.php?nickname=".$nickname);
            $conexao->query($deleteN);
         } 
        
        ?>

<?php endforeach ?>

</div>




