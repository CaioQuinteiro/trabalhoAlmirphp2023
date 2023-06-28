<?php
    namespace MODEL;

class Pedido{
    private ?int $id;
    private ?int $idCliente;
    private ?int $idProduto;
    private ?string $data;

    public function __construct()
    {
  
    }

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getIdCliente(){
        return $this->idCliente;
    }

    public function setIdCliente(int $idCliente){
        $this->idCliente = $idCliente;
    }

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setIdProduto(string $idProduto){
        $this->idProduto = $idProduto;
    }

    public function getData(){
        return $this->data;
    }

    public function setData(string $data){
        $this->data = $data;
    }

}

?>