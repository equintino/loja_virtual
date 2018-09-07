<?php
class Carrinho {
    private $comprador;
    private $produtos;
    private $quantidade;
    private $valorTotal;
    
    public function __construct(Comprador $comprador) {
        $this->comprador=$comprador;
        $this->produtos=array();
        $this->valorTotal = 0;
    }
    public function maisUm($vlr){
        $this->setValorTotal($this->getValorTotal() + $vlr);
        $this->setQuantidade($this->getQuantidade()+1);
    }
    public function calcTotal(){
        
    }
    public function getQuantidade() {
        return $this->quantidade;
    }
    public function getValorTotal() {
        return $this->valorTotal;
    }
    private function setQuantidade($qt) {
        $this->quantidade=$qt;
    }
    private function setValorTotal($vlr) {
        $this->valorTotal = $vlr;
    }
    public function getProdutos(){
        return $this->produtos;
    }
    public function setProdutos(Produto $produto){
        $this->produtos[]=$produto;
        $this->setValorTotal($this->getValorTotal()+$produto->getValorUnitario());
        $this->setQuantidade(count($this->produtos));
    }
    public function __toString() {
        echo $this->comprador;
    }
}