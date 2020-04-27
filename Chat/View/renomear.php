<p style="display: inline-block; padding-right: 90px">Nome Atual </p>
<p style="display: inline-block;">Novo Nome </p>

<form action="inserirRenome.php" method="post">

<input type="text" name="nomeAtual"
value="<?= $_GET['nickname'] ?>">

<input type="text" name="novoNome"><br><br>

<input type="submit" value="Enviar">
</form>
