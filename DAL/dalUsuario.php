<?php
    namespace DAL;

    include_once 'C:\xampp\htdocs\trabalhoAlmirphp2023\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\trabalhoAlmirphp2023\MODEL\Usuario.php';

    class dalUsuario{

        public function SelectUser(string $usuario){

            $sql = "select * from usuario where usuario LIKE ?;";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute (array($usuario));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $usuario = new \MODEL\Usuario();
            
            if($linha != null){
                $usuario->setId($linha['ID']); 
                $usuario->setUsuario($linha['USUARIO']);
                $usuario->setSenha($linha['SENHA']); 
                $usuario->setEmail($linha['EMAIL']);
            }


            return $usuario;
            
        }
    }

?>