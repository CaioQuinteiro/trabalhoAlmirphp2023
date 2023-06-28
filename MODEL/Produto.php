<?php
    namespace MODEL;

class Produto{
    private ?int $id;
    private ?string $nome;
    private ?float $preco;
    private ?int $qtde;

    public function __construct()
    {
  
    }

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco(string $preco){
        $this->preco = $preco;
    }

    public function getQtde(){
        return $this->qtde;
    }

    public function setQtde(string $qtde){
        $this->qtde = $qtde;
    }

}

?>