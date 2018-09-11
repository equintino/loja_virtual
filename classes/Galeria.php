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
    public function setGaleria($gal) {
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