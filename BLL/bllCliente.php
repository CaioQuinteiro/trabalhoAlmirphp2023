<?php
    namespace BLL; 
    use DAL\dalCliente; 
    include_once '../../DAL/dalCliente.php';
    
    class bllCliente {
        public function Select (){
            $dal = new  \Dal\dalCliente(); 
           
            return $dal->Select();
        }
    }


?>