<?php 
class Conexao {
    private $conn;
    private $host = "localhost";
    private $dbname = "clubeDeEscritores";
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
    
}
?>
