<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body bgcolor="#b492f7">
    <h2>Formulário de Login</h2>
    <form action="validar.php" method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
