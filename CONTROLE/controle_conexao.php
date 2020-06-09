<?php
// cria a conexao

$conn = new mysqli('localhost', 'root', '', 'salao');
// verifica a conexao

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>