<?php
class CriterioProcura {
    private $tabela;
    private $login;
    private $nome;
    
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
}
