<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <?php 
        include 'link.php';
    ?>
</head>
<body>
    <main-header base-url="./" base-nav="../" base-img="./img/"></main-header>

    <p class="titulo">Logar</p>
    <div class="meio">
        <form action="../view/validar.php" method="POST">
            <div class="input">
                <label for="usuario">Usuário ou email:</label>
                <input type="text" id="txtusuarioemail" name="txtusuarioemail" required>
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
