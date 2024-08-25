<!DOCTYPE html>
<html lang="pt-br">
<head<link rel="stylesheet" href="css/style.css">
>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP - Criar Usuário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Criar Usuário</h2>
    <form action="salvar_usuario.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
