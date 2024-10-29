<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="./view/nav/script.js"></script>
    <link rel="stylesheet" href="../nav/header.css">
    <script defer src="../nav/script.js"></script>
</head>
<body>
    <main-header base-url="./" base-nav="../" base-img="./img/"></main-header>

    <p class="titulo">Logar</p>
    <div class="meio">
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
    </div>
</body>
</html>
