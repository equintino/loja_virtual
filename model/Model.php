<?php
class Model{
    public $id;
    public $tabela;
    public $criado;
    public $array;
    
    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
    public function setTabela($tb){
        $this->tabela=$tb;
    }
    public function getTabela(){
        return $this->tabela;
    }
    public function setCriado($dt){
        $this->criado=$dt;
    }
    public function getCriado(){
        return $this->criado;
    }
    public function setArray(array $array){
        $this->array=$array;
    }
    public function getArray(){
        return $this->array;
    }
}