<?php
require_once '../model/conexao.php';
include_once '../view/login.php';

$conn = new Conexao();
$conn->conectar();

$usuarioForm = addslashes($_POST['txtusuario']);
$senhaForm = addslashes($_POST['txtsenha']);

session_start();
$usuarioAdmin = 'Adm';
$senhaAdmin = '123';

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Verificação para o admin
if ($usuarioForm === $usuarioAdmin && $senhaForm === $senhaAdmin) {
    $_SESSION['usuario'] = $usuarioForm;
    header('Location: telaInicialAdmin.php');
    exit();
} 

// Verificação para usuário normal (busca no banco)
$usuarioBanco = $conn->buscarUsuario($usuarioForm, $senhaForm);
if ($usuarioBanco) {
    $_SESSION['usuario'] = $usuarioBanco['usuario'];
    header('Location: telaInicial.php');
    exit();
} else {
    echo "Dados incorretos!";
}

?>
