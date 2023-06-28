<?php
    namespace BLL; 
    use DAL\dalPedido; 
    include_once '../../DAL/dalPedido.php';
    
    class bllPedido {
        public function Select (){
            $dal = new  \Dal\dalPedido(); 
           
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new \DAL\dalPedido();

            return $dal->SelectID($id);
        }

        public function Insert(\MODEL\Pedido $pedido){

            $dal = new \DAL\dalPedido();

            $dal->Insert($pedido);
    
        }
        
        public function Update(\MODEL\Pedido $pedido){

            $dal = new \DAL\dalPedido();

            $dal->Update($pedido);
        }

        public function Delete(int $id){

            $dal = new \DAL\dalPedido();

            $dal->Delete($id);            
        }

    }

?>