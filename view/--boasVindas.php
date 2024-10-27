<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: logar.php');
    exit();
}

$nomeGrupo = "BEM VINDO(A)<br>
Feito por: Gisele, Matheus, Pedro"; // Altere conforme necessário
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body bgcolor="#b492f7">
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p><?php echo $nomeGrupo; ?></p>
    <a href="sair.php">Sair</a>
</body>
</html>
