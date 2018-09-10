<?php
class Index {
    private $qtd;
    private $comprador;
    
    public function __construct(Carrinho $car=null) {
        if(isset($car)){
            $this->comprador=($car->getComprador());
        }
    }

    public function carrega(){
        require_once "../layout/index.php";        
    }
    public function setQtd($qtd){
        echo "<script>var compra=$qtd;</script>";
        $this->qtd=$qtd;
    }
    public function getQdt(){
        return $this->qtd;
    }
    public function getComprador() {
        return $this->comprador;
    }
    public function setComprador($comprador) {
        $this->comprador = $comprador;
    }
}
