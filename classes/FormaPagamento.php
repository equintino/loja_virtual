<?php
class FormaPagamento {
    private $tipo;
    private $numero;
    private $codSeg;
    private $validade;
    private $titular;
    private $bandeira;
    private $codBarra;
    
    public function __construct($tipo, $numero, $codSeg, $validade, $titular, $bandeira, $codBarra) {
        $this->tipo = $tipo;
        $this->numero = $numero;
        $this->codSeg = $codSeg;
        $this->validade = $validade;
        $this->titular = $titular;
        $this->bandeira = $bandeira;
        $this->codBarra = $codBarra;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getNumero() {
        return $this->numero;
    }
    public function getCodSeg() {
        return $this->codSeg;
    }
    public function getValidade() {
        return $this->validade;
    }
    public function getTitular() {
        return $this->titular;
    }
    public function getBandeira() {
        return $this->bandeira;
    }
    public function getCodBarra() {
        return $this->codBarra;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function setCodSeg($codSeg) {
        $this->codSeg = $codSeg;
    }
    public function setValidade($validade) {
        $this->validade = $validade;
    }
    public function setTitular($titular) {
        $this->titular = $titular;
    }
    public function setBandeira($bandeira) {
        $this->bandeira = $bandeira;
    }
    public function setCodBarra($codBarra) {
        $this->codBarra = $codBarra;
    }
}