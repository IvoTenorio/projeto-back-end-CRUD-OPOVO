<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($conexao, $sql)) {
        echo "Usuário criado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }
}
?>
