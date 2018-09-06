<?php
class Carrinho {
    private $codProduto;
    private $valorUnitario;
    private $quantidade;
    private $valorTotal;
    private $descricao;
    
    public function __construct($codProduto, $valorUnitario, $quantidade, $valorTotal, $descricao) {
        $this->codProduto = $codProduto;
        $this->valorUnitario = $valorUnitario;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
        $this->descricao = $descricao;
    }
    public function getCodProduto() {
        return $this->codProduto;
    }
    public function getValorUnitario() {
        return $this->valorUnitario;
    }
    public function getQuantidade() {
        return $this->quantidade;
    }
    public function getValorTotal() {
        return $this->valorTotal;
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
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
    public function setValorTotal($valorTotal) {
        $this->valorTotal = $valorTotal;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}