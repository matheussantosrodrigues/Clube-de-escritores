<?php
session_start();

$usuarioCorreto = 'Adm';
$usuarioCorreto2 = 'adm';
$senhaCorreta = '123';

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($usuario === $usuarioCorreto || $usuarioCorreto2 && $senha === $senhaCorreta) {
    $_SESSION['usuario'] = $usuario;
    header('Location: boasVindas.php');
    exit();
} else {
    echo "Dados incorretos! <a href='logar.php'>Tente novamente</a>";
}
?>
