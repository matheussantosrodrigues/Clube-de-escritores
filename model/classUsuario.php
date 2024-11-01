<?php 
require_once 'classConexao.php';

class Usuario {
    private $usuario;

    public function __construct(){
        $conexao = new Conexao();
        $this->usuario = $conexao->conectar();
    }

    public function insereUsuario($usuario, $senha, $email) {
        $insere = $this->usuario->prepare("INSERT INTO usuario (usuario, senha, email) VALUES (:u, :s, :e)");
        $insere->bindValue(":u", $usuario);
        $insere->bindValue(":s", $senha);
        $insere->bindValue(":e", $email);
        $insere->execute();
        echo "Cadastro realizado com sucesso!";
    }

    public function validaUsuario($usuario, $senha, $email) {
        $valida = $this->usuario->prepare("SELECT email FROM usuario WHERE email = :email");
        $valida->bindValue(":email", $email);
        $valida->execute();

        if ($valida->rowCount() > 0) {
            echo "<script>alert('Usuário ou e-mail já cadastrado, verifique duplicidade');</script>";
        } else {
            $this->insereUsuario($usuario, $senha, $email);
        }
    }

    public function buscarUsuario($usuarioOuEmail, $senha) {
        $stmt = $this->usuario->prepare("SELECT * FROM usuario WHERE (usuario = :usuarioOuEmail OR email = :usuarioOuEmail) AND senha = :senha");
        $stmt->bindParam(':usuarioOuEmail', $usuarioOuEmail);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}
?>
