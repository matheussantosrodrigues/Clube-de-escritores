<?php 
class Conexao {
    private $conn;
    private $host = "localhost";
    private $dbname = "secao";
    private $user = "root";
    private $senha = "";

    public function conectar() {     
        try {
            $this->conn = new PDO("mysql:dbname=".$this->dbname.";host=".$this->host, $this->user, $this->senha);
            echo "Banco está conectado!";
        } catch (PDOException $e) {
            echo "Erro com parâmetro no banco de dados: " . $e->getMessage();
            exit();
        } catch (Exception $e) {
            echo "Erro não passou da conexão: " . $e->getMessage();
            exit();
        }
        return $this->conn;
    }

    public function insereUsuario($usuario, $senha, $caminho, $email) {
        $insere = $this->conn->prepare("INSERT INTO usuario (usuario, senha, caminho, email) VALUES (:u, :s, :c, :e)");
        $insere->bindValue(":u", $usuario);
        $insere->bindValue(":s", $senha);
        $insere->bindValue(":c", $caminho);
        $insere->bindValue(":e", $email);
        $insere->execute();
        echo "Cadastro realizado com sucesso!";
    }

    public function validaUsuario($usuario, $senha, $caminho, $email) {
        $valida = $this->conn->prepare("SELECT email FROM usuario WHERE email = :email");
        $valida->bindValue(":email", $email);
        $valida->execute();

        if ($valida->rowCount() > 0) {
            echo "<script>alert('Usuário ou e-mail já cadastrado, verifique duplicidade');</script>";
        } else {
            $this->insereUsuario($usuario, $senha, $caminho, $email);
        }
    }

    public function buscarUsuario($usuarioOuEmail, $senha) {
        $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE (usuario = :usuarioOuEmail OR email = :usuarioOuEmail) AND senha = :senha");
        $stmt->bindParam(':usuarioOuEmail', $usuarioOuEmail);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}
?>
