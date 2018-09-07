<?php
class Produto {
    private $codProduto;
    private $valorUnitario;
    private $descricao;
    private $imagem;
    
    public function __construct($codProduto, $valorUnitario, $descricao) {
        $this->codProduto = $codProduto;
        $this->valorUnitario = $valorUnitario;
        $this->descricao = $descricao;
    }
    public function getCodProduto() {
        return $this->codProduto;
    }
    public function getValorUnitario() {
        return $this->valorUnitario;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function setCodProduto($codProduto) {
        $this->codProduto = $codProduto;
    }
    public function setValorUnitario($valorUnitario) {
        $this->valorUnitario = $valorUnitario;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function getImagem() {
        return $this->imagem;
    }
    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }
}