<?php
require_once '../model/conexao.php';

$conn = new Conexao();
$conn->conectar();

$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);
$email = addslashes($_POST['email']);

$NovoUpload = isset($_POST['upload']) ? addslashes($_POST['upload']) : '';

if(isset($_FILES['upload']))
{
    //receber o arquivo na variavel 
    $arquivo = $_FILES['upload'];
    //tratar erro de envio
    if($arquivo['error'])
    die("falha ao carregar");

    //delimitar tamanho do arquivo
    if($arquivo['size']>10485760)
    die("arquivo excedeu o limite, maximo 10MB");

    //ver o conteudo
    echo "<pre>";
    print_r($arquivo);
    echo "</pre>";

    //converter para variaveis as partes do arquivo
    $pasta = "../view/img/";
    $pasta2 = "../view/img";
    $nomeArquivo = $arquivo['name'];
    $nomeCodigo = uniqid();
    $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION));
    //strtolower - transforma a extensão em minusculo

    //criar a variavel $path
    $caminho= $pasta.$nomeCodigo.".".$extensao;
    $caminho2= $pasta2.$nomeCodigo.".".$extensao;

    //verificar a extensão
    if($extensao != 'jpg' && $extensao !='png')
       die("arquivo invalido");
       
    //mover para pasta do projeto
    $arquivoUpload = move_uploaded_file($arquivo["tmp_name"],$caminho);
    $conn->validaUsuario($usuario, $senha, $caminho, $email);
}
// var_dump($usuario);
// var_dump($senha);
// $conn->insere($usuario, $senha, $email, $caminho);
// $recebe = $conn->consulta();
// var_dump($recebe);


?>