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

            $sql = "select * from cliente where id=?;";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $cliente = new \MODEL\Cliente();
            $cliente->setId($linha['ID']); 
            $cliente->setNome($linha['NOME']);
            $cliente->setEndereco($linha['ENDERECO']); 
            $cliente->setTelefone($linha['TELEFONE']);

            return $cliente;
            
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

        public function Update(\MODEL\Cliente $cliente){
            $sql = "UPDATE cliente SET nome=?, endereco=?, telefone=? WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cliente->getNome(), $cliente->getEndereco(), 
                                            $cliente->getTelefone(), $cliente->getId()));
            $con = Conexao::desconectar();
            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE FROM cliente WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;           
        }

    }

?>