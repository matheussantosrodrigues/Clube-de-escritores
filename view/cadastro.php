<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../nav/header.css">
    <script defer src="../nav/script.js"></script>
<body>
    <main-header base-url="./" base-nav="../" base-img="./img/"></main-header>

    <p class="titulo">Cadastrar Usuário</p>
    <div class="meio">
        <form action="../controller/recebeDados.php" method="POST" enctype="multipart/form-data">

            <div class="input">
                <label for="nome">Nome:</label>
                <input type="text" id="usuario" name="usuario"  required>
            </div>

            <div class="input">
                <label for="nome">Email:</label>
                <input type="text" id="email" name="email"  required>
            </div>
            
            <div class="input">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button type="submit" class="button">
                <span class="shadow"></span>
                <span class="edge"></span>
                <div class="front">
                    <span>Cadastrar</span>
                </div>
            </button>
        </form>
    </div>
</body>
</html>