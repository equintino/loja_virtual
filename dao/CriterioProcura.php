<?php
class CriterioProcura {
    private $tabela;
    private $login;
    private $nome;
    private $cpf;
    private $array;
    
    public function setTabela($tb){
        $this->tabela=$tb;
    }
    public function getTabela(){
        return $this->tabela;
    }
    public function setLogin($lg){
        $this->login=$lg;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setNome($nm){
        $this->nome=$nm;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setArray(array $array){
        $this->array=$array;
    }
    public function getArray(){
        return $this->array;
    }
}
