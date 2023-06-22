<?php
    namespace MODEL;

class Cliente{
    private ?int $id;
    private ?string $nome;
    private ?string $endereco;
    private ?string $telefone;

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

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco(string $endereco){
        $this->endereco = $endereco;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone(string $telefone){
        $this->telefone = $telefone;
    }

}

?>