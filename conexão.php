<?php

class Conexao {
    private $dbHost = "localhost";
    private $dbUsuario = "root";
    private $dbSenha = "";
    private $dbBanco = "pedidos";
    private $dbConexao;

    public function __construct() {
        $this->dbConexao = new mysqli($this->dbHost, $this->dbUsuario, $this->dbSenha, $this->dbBanco);

        if ($this->dbConexao->connect_error) {
            die("Falha na conexão com o banco de dados: " . $this->dbConexao->connect_error);
        }
    }

    public function getConexao() {
        return $this->dbConexao;
    }
}
?>
