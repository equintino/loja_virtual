<?php
class Entrega {
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    
    public function __construct($endereco, $numero, $complemento, $bairro, $cidade, $uf, $cep) {
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->cep = $cep;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    public function getNumero() {
        return $this->numero;
    }
    public function getComplemento() {
        return $this->complemento;
    }
    public function getBairro() {
        return $this->bairro;
    }
    public function getCidade() {
        return $this->cidade;
    }
    public function getUf() {
        return $this->uf;
    }
    public function getCep() {
        return $this->cep;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    public function setUf($uf) {
        $this->uf = $uf;
    }
    public function setCep($cep) {
        $this->cep = $cep;
    }
}