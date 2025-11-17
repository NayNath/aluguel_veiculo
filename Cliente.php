<?php
class Cliente{
    private string $nome;
    private string $cpf;
    public function __construct($nome,$cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
}
?>