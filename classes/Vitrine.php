<?php
class Vitrine {
    private $titulo;
    private $texto;
    private $imagem;
    private $cod_produto;
    private $valor;
    private $descricao;
    
    public function __construct($titulo, $texto, $imagem) {
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->imagem = $imagem;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }
    public function getTexto() {
        return $this->texto;
    }
    public function getImagem() {
        return $this->imagem;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setTexto($texto) {
        $this->texto = $texto;
    }
    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }
    public function getCod_produto() {
        return $this->cod_produto;
    }
    public function getValor() {
        return $this->valor;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function setCod_produto($cod_produto) {
        $this->cod_produto = $cod_produto;
    }
    public function setValor($valor) {
        $this->valor = $valor;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}