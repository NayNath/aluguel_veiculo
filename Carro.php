<?php
require_once 'Veiculo.php';
class Carro extends Veiculo{
    private int $portas;

    public function __construct($marca, $modelo, $precoDiaria, $disponivel, $portas){
        parent::__construct($marca, $modelo, $precoDiaria, $disponivel);
        $this->portas = $portas;
    }
    public function calcularCusto($dias, $precoDiaria){
        if($dias>=1){
            $valor = ($dias*$precoDiaria)*0.1;  
        }
    }
    public function infosVeiculos(){
        return "<p>Marca: {$this->marca} </p>".
                "<p>Modelo: {$this->modelo} </p>".
                "<p>Preço Diaria: {$this->precoDiaria} </p>".
                "<p>Disponibilidade: {$this->disponivel} </p>".
                "<p>Preço Diaria: {$this->portas} </p>";
    }
}
?>