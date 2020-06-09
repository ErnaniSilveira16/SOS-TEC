<?php
 include 'controle_conexao.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nome_cliente = $_POST['nome_cliente']; 
$contato_cliente = $_POST['contato_cliente']; 
//COMPARAR DADOS PARA NÃO HAVER USUARIOS IGUAIS
$sql = "SELECT*FROM usuario WHERE usuario = '$usuario' AND senha ='$senha'";

$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) > 0){echo "Tem nego na rede";}
//SE NÃO HOUVER USUARIOS IDENTICO ENTÃO EXECUTAR
else{

// INSERINDO NOVO USUARIO E NOVA SENHA
$sql ="INSERT INTO usuario (usuario,senha,nome_cliente,contato_cliente) VALUES ('$usuario','$senha','$nome_cliente','$contato_cliente')";

$resultado = mysqli_query($conn, $sql);
//ENCERRAR CONEXAO
mysqli_close($conn);
//redirecionando para o login
header("Location:/LOGIN/");
}