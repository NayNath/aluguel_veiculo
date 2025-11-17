<?php
require_once 'Veiculo.php';
class Moto extends Veiculo{
    private $cilindradas;

    public function __construct($marca, $modelo, $precoDiaria, $disponivel, $cilindradas){
        parent::__construct($marca, $modelo, $precoDiaria, $disponivel);
        $this->cilindradas = $cilindradas;
    }
    public function calcularCusto($dias){
        if($dias>=1){
            $valor = ($dias*$this->precoDiaria)*0.05;
        }
    }
    
}
?>