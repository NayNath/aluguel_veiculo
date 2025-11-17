<?php
require_once 'Veiculo.php';
class Moto extends Veiculo{
    private $cilindradas;

    public function __construct($marca, $modelo, $precoDiaria, $disponivel, $cilindradas){
        parent::__construct($marca, $modelo, $precoDiaria, $disponivel);
        $this->cilindradas = $cilindradas;
    }
    public function setAlugar ($disponivel){
        return $disponivel - 1;
    }
    public function setDevolver ($disponivel){
        return $disponivel + 1;
    }
    public function getDisponivel($disponivel){
        if ($disponivel==1){
            return "Disponivel";
        }else{
            return "Indisponivel";
        }
    }
    public function calcularCusto($dias, $precoDiaria){
        if($dias>=1){
            $valor = ($dias*$precoDiaria)*0.05;
        }
    }
    public function infosVeiculos($marca, $modelo, $precoDiaria, $disponivel, $portas){
        return "<p>Marca: {$marca} </p>".
                "<p>Modelo: {$modelo} </p>".
                "<p>Preço Diaria: {$precoDiaria} </p>".
                "<p>Disponibilidade: {$disponivel} </p>".
                "<p>Preço Diaria: {$portas} </p>";
    }
}
?>