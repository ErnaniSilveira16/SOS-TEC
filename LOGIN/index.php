<?php
//tratamento de erro de login para que não apreça pro usuario
ini_set('display_errors',0);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css">

</head>
<body>
<div>
<form action="/controle/controle_login.php" method="post">
  <div class="imgcontainer">
    <img src="logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="Usuario"><b>Usuario</b></label>
    <input type="text" placeholder="Digite seu usuario" name="usuario" required>

    <label for="psw"><b>Senha</b></label>
    <input type="Senha" placeholder="Digite sua senha" name="senha" required>
      
    <label>
      <input type="checkbox" checked="checked" name="Lembre-me"> Lembre-me 
    </label>

    <a href="/LOGIN/SERVICOS/"> <button class="button">Entrar</button></a>
</form>
</div>
<div>
<a href="/LOGIN/CADASTRO-CLIENTES/"> <button class="button">Novo cadastro</button></a>
  
      <button class="button"><a href="#">Esqueceu senha?</a></button>
</div>
      
  </div>

  
  <?php
  //mensagem de erro
    $erro = $_GET['erro'];
    echo $erro;

  ?>
</form>


</body>
</html>

<!--nova tela de login-->

