<?PHP
abstract class Veiculo{
    private $marca;
    private $modelo;
    private $precoDiaria;
    private bool $disponivel;

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
    public function setAlugar($disponivel){
        return $this->disponivel = false;
    }
    public function setDevolver($disponivel){
        return $this->disponivel = true;
    }
    public function getDisponivel($disponivel){
        return $this->disponivel == true ? "Disponival":"Indisponival";
    }
    abstract public function getCalcularCusto();
}
?>