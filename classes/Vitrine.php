<?php
class Vitrine {
    private $titulo;
    private $texto;
    private $imagem;
    
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
}