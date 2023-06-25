<?php
    namespace DAL;

    include_once 'conexao.php';
    include_once '..\..\MODEL\Cliente.php';

    class dalCliente{

        public function Select(){

            $con = Conexao::conectar(); 
            $sql = "select * from cliente;";
            $result = $con->query($sql); 
            $con = Conexao::desconectar(); 

            foreach($result as $linha){
                $cliente = new \MODEL\Cliente();
 
                $cliente->setId($linha['ID']); 
                $cliente->setNome($linha['NOME']);
                $cliente->setEndereco($linha['ENDERECO']); 
                $cliente->setTelefone($linha['TELEFONE']);

                $lstCliente[]= $cliente; 
           }
           return $lstCliente; 
        }

        public function SelectID(int $id){
            
        }

        public function Insert(\MODEL\Cliente $cliente){
            $con = Conexao::conectar();
            $sql = "INSERT INTO cliente (nome, endereco, telefone)
                    VALUES ('{$cliente->getNome()}', '{$cliente->getEndereco()}',
                            '{$cliente->getTelefone()}');";

            $result = $con->query($sql);
            $con = Conexao::desconectar();
            return $result;
        }

        public function Update(){

        }

        public function Delete(){

        }

    }

?>