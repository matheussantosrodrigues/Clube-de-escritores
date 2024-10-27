<?php
include_once '../view/login.php';
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


?>
