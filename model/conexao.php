<?php 

Class Conexao {
    private $conn;
    
    private $host = "localhost";
    private $dbname = "secao";
    private $user = "root";
    private $senha = "";

    public function conectar()
    {     
        try{
            $this->conn = new PDO("mysql:dbname=".$this->dbname.";host=".$this->host,$this->user, $this->senha);
        echo "Conexão Realizada ;)";
        }
        catch(PDOException $e){
            echo"Erro com parâmetro no banco de dados! :("      .$e->getMessage();
            exit();
        }
        catch (Exception $e){
            echo"Erro Não passou da conexão: ".$e->getMessage();
            exit();
        }
        return $this->conn;
    }

    public function insere($usuario, $senha) {
        $insere = $this->conn->prepare("insert into cadastro (usuario, senha) 
        values (:u, :s)");
        $insere->bindValue(":u", $usuario);
        $insere->bindValue(":s", $senha);
        $insere->execute();
    
    }
}
?>