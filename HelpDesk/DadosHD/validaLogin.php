<?php

session_start();
require_once "conexao.php";


$sql = "SELECT * FROM usuarios";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $resgistros[] = $row; 
    }
}

$autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;
$perfis = [1 => "Administrativo", 2 => "Usuario"];

foreach ($resgistros as $user){
   if($_POST["email"] == $user["email"] and $_POST["senha"] == $user["senha"] ){
    $autenticado = true;
    $usuario_id = $user["id"];
   }
}
  
if ($autenticado){
   echo "Autenticado";
   $_SESSION["autenticado"] =  "SIM";
   $_SESSION["id"] =  $usuario_id;
   $_SESSION["perfil_id"] =  $usuario_perfil_id;

   header("Location: casa.php");
}
else{
    $_SESSION["autenticado"] =  "NAO";
    header("Location: inicio.php?login=erro");
}

?>