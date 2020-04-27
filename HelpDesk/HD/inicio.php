<?php
#../DadosHelpDesk/validaLogin.php
ini_set('display_errors', 0);
ini_set('display_startup_erros', 0);

if($_GET['login'] == 'erro'){ 
  $e = "<b><font color=\"#FF0000\"> Usuario ou Senhas Incorretos </font></b> ";                  
}
if($_GET['cadastro'] == "OK"){
  $a = "<b><font color=\"#00b300\"> Cadastro feito com Sucesso </font></b>";
}

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }

      .espaco{
        padding: 15px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
      
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="inicio.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>    
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">


              <form action= "validaLogin.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">

                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                </form> 
                
                
                <?= $a ?>
                <?= $e ?>
                

                

              <div class="espaco"> Ainda não é cadastrado? Clique <a href="cadastro.php"> Aqui </a> </div>
                    

            </div>
            </div>
        </div>
    </div>
  </body>
</html>