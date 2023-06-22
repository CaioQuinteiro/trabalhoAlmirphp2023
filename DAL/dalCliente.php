<?php
    namespace DAL;
    include 'conexao.php';
    include '..\..\MODEL\Cliente.php';

    class dalCliente{

        public function Select(){
            $sql = "select * from cliente;";

            $con = Conexao::conectar(); 
            $result = $con->query($sql); 
            $con = Conexao::desconectar(); 

            foreach($result as $linha){
                $cliente = new \MODEL\Cliente();
 
                $cliente->setId($linha['ID']); 
                $cliente->setNome($linha['NOME']);
                $cliente->setEndereco($linha['ENDERECO']); 
                $cliente->setTelefone($linha['TELEFONE']);

                $lstCliente[]= $cliente; 

                return $lstCliente; 
           }
        }

        public function SelectID(int $id){
            
        }

        public function Insert(){

        }

        public function Update(){

        }

        public function Delete(){

        }

    }

?>