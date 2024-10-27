<?php
session_start();

$usuarioAdmin = 'Adm';
$senhaAdmin = '123';

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($usuario === $usuarioAdmin && $senha === $senhaAdmin) {
    $_SESSION['usuario'] = $usuario;
    header('Location: telaInicialAdmin.php');
    exit();
} else ($usuario === $usuarioCorreto || $usuarioCorreto2 && $senha === $senhaCorreta){
    echo "Dados incorretos! <a href='logar.php'>Tente novamente</a>";
}
?>
