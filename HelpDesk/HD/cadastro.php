<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="inicio.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>    
    </nav>
    
<h2 style="padding: 7 0 0 10 " >Cadastro</h2>


<hr>

<?php 

ini_set('display_errors', 0);
ini_set('display_startup_erros', 0);

?>


<script lang="javascript" type="text/javascript">

function valida(){
  var nome =  form1.nome.value;
  var email = form1.email.value;
  var senha = form1.senha.value;
  var repSenha = form1.repSenha.value;
  var erros = 0;

  if(nome.length < 5){
    if(nome == ""){
      erros++;
      alert("Preencha o Campo Nome");
      return false;
    }
    erros++;
    alert("Coloque seu Nome Completo");
    return false;
  }

  if(email.indexOf("@") == -1 || email.indexOf(".") == -1 || email == ""){
    erros++;
    alert("O email é inválido, preencha corretamente");
    return false;
  } 
  
  if(senha.length < 5){
    erros++;
    alert("A senha precisa ser Maior");
    return false;
  }

  if(repSenha != senha){
    erros++;
    alert("As senhas não são iguais");
    return false;
  }

  if(erros > 0){
    return false;
  }

  form1.submit();

}

</script>


<form name="form1" onsubmit=" return valida(this)" action ="validaCadastro.php" method="post" style="padding: 10px">

  <div class="form-group row">
    <label class="col-sm-1 col-form-label">Nome</label>
    <div class="col-sm-2">
      <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>"
      name="nome" placeholder="Nome" value="<?= $_POST['nome']?>">
    </div> 
  </div>
  
  <div class="form-group row ">
    <label class="col-sm-1 col-form-label">Email</label>
    <div  class="col-sm-2">
      <input type="email" class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>"
      name="email" placeholder="Email" value="<?= $_POST['email']?>"> 
  </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-1 col-form-label">Senha</label>
    <div class="col-sm-2">
      <input type="password" class="form-control <?= $erros['senha'] ? 'is-invalid' : ''?>"
       name="senha" placeholder="Senha" value="<?= $_POST['senha']?>">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-1 col-form-label">Repita Senha</label>
    <div class="col-sm-2">
      <input type="password" class="form-control <?= $erros['senha'] ? 'is-invalid' : ''?>"
       name="repSenha" placeholder="Repita Senha">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
    <button class="btn btn-primary btn-lg">Enviar</button>
    </div>
        
  </div>

</form>