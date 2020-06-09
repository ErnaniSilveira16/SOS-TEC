
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link   rel="stylesheet"  href="cadastro-cliente.css">
</head>
<body>

<form action="/CONTROLE/controle_cadastro.php"method="POST">
  <div class="container">
    <h1>Registar</h1>
    <p>Por favor, preencha este formulário para criar uma conta.</p>
    <hr>

    <label for="usuario"><b>usuario</b></label>
    <input type="text" placeholder="digite um usuario" name="usuario" required>

    <label for="senha"><b>senha</b></label>
    <input type="password" placeholder="digite sua senha" name="senha" required>

    <label for="nome_cliente"><b>Nome </b></label>
    <input type="text" placeholder="Digite seu nome" name="nome_cliente" required>
    <label for="contato_cliente"><b>Whatsapp </b></label>
    <input type="number" placeholder="Digite seu contato whatsapp" name="contato_cliente" required>
    <hr>
    

    <button type="submit" class="cadastrarbtn">Cadastrar</button>
  </div>
  
  <div class="container entrar">
    <p>Você já tem uma conta? <a href="/LOGIN/">Entrar</a>.</p>
  </div>
</form>

</body>
</html>