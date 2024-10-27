<?php
include_once '../view/cadastro.php';
require_once '../model/conexao.php';

$conn = new Conexao();
$conn->conectar();

$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);

// var_dump($usuario);
// var_dump($senha);

$conn->insere($usuario, $senha);
// $recebe = $conn->consulta();
// var_dump($recebe);

// session_start();

// $usuarioAdmin = 'Adm';
// $senhaAdmin = '123';

// $usuario = $_POST['usuario'] ?? '';
// $senha = $_POST['senha'] ?? '';

// if ($usuario === $usuarioAdmin && $senha === $senhaAdmin) {
//     $_SESSION['usuario'] = $usuario;
//     header('Location: telaInicialAdmin.php');
//     exit();
// } elseif ($usuario === $usuarioCorreto || $usuario === $usuarioCorreto2 && $senha === $senhaCorreta) {
//     $_SESSION['usuario'] = $usuario;
//     header('Location: telaInicialAdmin.php');
//     exit();
// } else {
//     echo "Dados incorretos!";
// }
?>
