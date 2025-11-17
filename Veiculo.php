<?PHP
class Veiculo{
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
    public function alugar(){
        
    }
    public function devolver(){

    }
    abstract public function calcularCusto($dias, $precoDiaria);

/*alugar() e devolver() para alterar o status do veículo;*/
}
?>