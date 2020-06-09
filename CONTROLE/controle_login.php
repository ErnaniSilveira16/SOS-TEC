<?php
session_start();

include 'controle_conexao.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
//comparando usario e senha e consultando a tabela usuarios no banco
$sql = "SELECT*FROM usuarios WHERE usuario = '$usuario' AND senha ='$senha'";
//armazenando o resultado de senha e usuario
$resultado = mysqli_query($conn, $sql);
//perguntando se resultado é maior que 0
if(mysqli_num_rows($resultado) > 0)
{
    //criei a seesao usario e estou passando um valor para ela
    $_SESSION['usuario'] = $usuario;
    //quem esta com o usuario ok, prossegue pro site
    header("Location:/SERVICOS/");
}
else{
    $erro = "ERRO DE ACESSO";
    
    header("Location:/Login/?erro='$erro'");
}
