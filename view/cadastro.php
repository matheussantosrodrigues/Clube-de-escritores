<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="../css/style.css">
<body>
    <div class="body">
        <p class="titulo">Cadastrar Usuário</p>

        <form action="../controller/recebeDados.php" method="POST">
            <div class="input">
                <label for="nome">Nome:</label>
                <input type="text" id="usuario" name="usuario"  required>
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