<?php 
class Galeria{
    private $codProduto;
    private $valorUnitario;
    private $descricao;
    private $imagem;
    private $vitrine;
    
    private $galeria;
  
    public function __construct(Produto $produto) {
        $this->codProduto = $produto->getCodProduto();
        $this->valorUnitario = $produto->getValorUnitario();
        $this->descricao = $produto->getDescricao();
        $this->imagem = $produto->getImagem();
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function getVitrine() {
        return $this->vitrine;
    }
    public function getGaleria() {
        return $this->galeria;
    }
    private function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function setVitrine($vt) {
        $this->vitrine = $vt;
    }
    public function setGaleria() {
        $gal='<div class="col-md-3 col-sm-4 col-xs-12 gal">
             <span class="prod"><img src="'.$this->getImagem().'" alt="" /></span>
             <div class="descricao" codProd='.$this->getCodProduto().'>'.$this->getDescricao().'</div>
             <div class="preco">R$ '.number_format($this->getValorUnitario(),'2',',','.').'</div>
             <div class="ticket" data-toggle="modal" data-target="#prodModal">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26" /></span>
        </div>';
        $this->galeria = $gal;
    }
    public function getCodProduto() {
        return $this->codProduto;
    }
    private function setCodProduto($codProduto) {
        $this->codProduto = $codProduto;
    }
    public function getValorUnitario() {
        return $this->valorUnitario;
    }
    private function setValorUnitario($valorUnitario) {
        $this->valorUnitario = $valorUnitario;
    }
    public function getImagem() {
        return $this->imagem;
    }
    private function setImagem($imagem) {
        $this->imagem = $imagem;
    }
}