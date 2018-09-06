<?php
class Comprador {
    private $nome;
    private $login;
    private $cpf;
    private $cartao;
    
    public function __construct($nome, $login, $cpf) {
        $this->nome = $nome;
        $this->login = $login;
        $this->cpf = $cpf;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getLogin() {
        return $this->login;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function getCartao() {
        return $this->cartao;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setLogin($login) {
        $this->login = $login;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function setCartao($cartao) {
        $this->cartao = $cartao;
    }
}