<?php
require_once '../model/conexao.php';
include_once '../view/login.php';

$conn = new Conexao();
$conn->conectar();

$usuarioOuEmailForm = addslashes($_POST['txtusuarioemail']);
$senhaForm = addslashes($_POST['txtsenha']);

session_start();
$usuarioAdmin = 'Adm';
$emailAdmin = 'Adm@gmail.com';
$senhaAdmin = '123';

// Verificação para o admin
if (($usuarioOuEmailForm === $usuarioAdmin || $usuarioOuEmailForm === $emailAdmin) && $senhaForm === $senhaAdmin) {
    $_SESSION['usuario'] = $usuarioAdmin; // Armazena o usuário admin
    header('Location: telaInicialAdmin.php');
    exit();
} 

// Verificação para usuário normal (busca no banco)
$usuarioBanco = $conn->buscarUsuario($usuarioOuEmailForm, $senhaForm);
if ($usuarioBanco) {
    $_SESSION['usuario'] = $usuarioBanco['usuario']; // Armazena apenas o usuário
    header('Location: telaInicial.php');
    exit();
} else {
    echo "Dados incorretos!";
}
?>
