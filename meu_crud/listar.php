<?php
include 'conexao.php';

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP - Listar Usuários</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Lista de Usuários</h2>
    <?php while ($usuario = mysqli_fetch_assoc($resultado)): ?>
        <p>ID: <?= $usuario['id'] ?></p>
        <p>Nome: <?= $usuario['nome'] ?></p>
        <p>Email: <?= $usuario['email'] ?></p>
        <p><a href="editar.php?id=<?= $usuario['id'] ?>">Editar</a> | <a href="deletar.php?id=<?= $usuario['id'] ?>">Deletar</a></p>
        <hr>
    <?php endwhile; ?>
</body>
</html>
