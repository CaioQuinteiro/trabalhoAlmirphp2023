<?php
    namespace DAL;

    include_once 'conexao.php';
    include_once '..\..\MODEL\Pedido.php';

    class dalPedido{

        public function Select(){

            $con = Conexao::conectar(); 
            $sql = "select * from pedidos;";
            $result = $con->query($sql); 
            $con = Conexao::desconectar(); 

            foreach($result as $linha){
                $pedido = new \MODEL\Pedido();
 
                $pedido->setId($linha['ID']); 
                $pedido->setIdCliente($linha['ID_CLIENTE']);
                $pedido->setIdProduto($linha['ID_PRODUTO']); 
                $pedido->setData($linha['DATA_PEDIDO']);

                $lstPedido[]= $pedido; 
           }
           return $lstPedido; 
        }

        public function SelectID(int $id){

            $sql = "select * from pedidos where id=?;";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $pedido = new \MODEL\Pedido();
            $pedido->setId($linha['ID']); 
            $pedido->setIdCliente($linha['ID_CLIENTE']);
            $pedido->setIdProduto($linha['ID_PRODUTO']); 
            $pedido->setData($linha['DATA_PEDIDO']);

            return $pedido;
            
        }

        public function Insert(\MODEL\Pedido $pedido){
            $con = Conexao::conectar();
            $sql = "INSERT INTO pedidos (id_cliente, id_produto, data_cadastro)
                    VALUES ('{$pedido->getIdCliente()}', '{$pedido->getIdProduto()}',
                            '{$pedido->getData()}');";

            $result = $con->query($sql);
            $con = Conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\Pedido $pedido){
            $sql = "UPDATE pedidos SET id_cliente=?, id_produto=?, data_pedido=? WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($pedido->getIdCliente(), $pedido->getIdProduto(), 
                                            $pedido->getData(), $pedido->getId()));
            $con = Conexao::desconectar();
            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE FROM pedidos WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;           
        }

    }

?>