<?php
    namespace DAL;

    include_once 'conexao.php';
    include_once '..\..\MODEL\Produto.php';

    class dalProduto{

        public function Select(){

            $con = Conexao::conectar(); 
            $sql = "select * from produto;";
            $result = $con->query($sql); 
            $con = Conexao::desconectar(); 

            foreach($result as $linha){
                $produto = new \MODEL\Produto();
 
                $produto->setId($linha['ID']); 
                $produto->setNome($linha['NOME']);
                $produto->setPreco($linha['PRECO']); 
                $produto->setQtde($linha['QTDE']);

                $lstProduto[]= $produto; 
           }
           return $lstProduto; 
        }

        public function SelectID(int $id){

            $sql = "select * from produto where id=?;";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $produto = new \MODEL\Produto();
            $produto->setId($linha['ID']); 
            $produto->setNome($linha['NOME']);
            $produto->setPreco($linha['PRECO']); 
            $produto->setQtde($linha['QTDE']);

            return $produto;
            
        }

        public function Insert(\MODEL\Produto $produto){
            $con = Conexao::conectar();
            $sql = "INSERT INTO produto (nome, preco, qtde)
                    VALUES ('{$produto->getNome()}', '{$produto->getPreco()}',
                            '{$produto->getQtde()}');";

            $result = $con->query($sql);
            $con = Conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\Produto $produto){
            $sql = "UPDATE produto SET nome=?, preco=?, qtde=? WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($produto->getNome(), $produto->getPreco(), 
                                            $produto->getQtde(), $produto->getId()));
            $con = Conexao::desconectar();
            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE FROM produto WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;           
        }

    }

?>