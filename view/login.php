<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <p class="titulo">Formulário de Login</p>
    </header>
    <main>
        <form action="../view/validar.php" method="POST">
            <div class="input">
                <label for="usuario">Usuário:</label>
                <input type="text" id="txtusuario" name="txtusuario" required>
            </div>
            <div class="input">
                <label for="senha">Senha:</label>
                <input type="password" id="txtsenha" name="txtsenha" required>
            </div>
            <button type="submit" class="button">
                <span class="shadow"></span>
                <span class="edge"></span>
                <div class="front">
                    <span>Entrar</span>
                </div>
            </button>
        </form>
    </main>
</body>
</html>
