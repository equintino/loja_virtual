<?php
class Index {
    private $qtd;
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
}
