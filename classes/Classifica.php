<?php
class Classifica {
    private $pesquisado;
    private $vendido;
    private $nota;
    
    public function __construct($pesquisado, $vendido, $nota) {
        $this->pesquisado = $pesquisado;
        $this->vendido = $vendido;
        $this->nota = $nota;
    }
    public function getPesquisado() {
        return $this->pesquisado;
    }
    public function getVendido() {
        return $this->vendido;
    }
    public function getNota() {
        return $this->nota;
    }
    public function setPesquisado($pesquisado) {
        $this->pesquisado = $pesquisado;
    }
    public function setVendido($vendido) {
        $this->vendido = $vendido;
    }
    public function setNota($nota) {
        $this->nota = $nota;
    }
}