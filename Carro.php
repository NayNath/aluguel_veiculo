<?php
require_once 'Veiculo.php';
class Carro extends Veiculo{
    private int $portas;

    public function __construct($marca, $modelo, $precoDiaria, $disponivel, $portas){
        parent::__construct($marca, $modelo, $precoDiaria, $disponivel);
        $this->portas = $portas;
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
            $valor = ($dias*$precoDiaria)*0.1;  
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