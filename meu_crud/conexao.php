<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'meu_crud';

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
