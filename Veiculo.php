<?PHP
abstract class Veiculo{
    protected $marca;
    protected $modelo;
    protected $precoDiaria;
    protected bool $disponivel;

    public function __construct($marca,$modelo,$precoDiaria,$disponivel){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precoDiaria = $precoDiaria;
        $this->disponivel = $disponivel;
    }
    public function getDescricao(){
        return $this->marca.
                $this->modelo;
    }
    public function setAlugar(){
        return $this->disponivel = false;
    }
    public function setDevolver(){
        return $this->disponivel = true;
    }
    public function getDisponivel(){
        return $this->disponivel ? "Disponíval":"Indisponíval";
    }
    abstract public function calcularCusto($dias);
}
?>