<?php
require_once "../dao/Config.php";
require_once "../classes/Model.php";
require_once "../dao/CriterioProcuraPessoa.php";
require_once "../excecao/Excecao.php";
require_once "../mapping/ModelMapper.php";

class Dao{
    private $db = null;
    
    public function __destruct() {
        $this->db = null;
    }
    public function encontre(CriterioProcuraPessoa $search){
        $dados = array();
        $sql = $this->getSql($search);
        $dados = $this->query($sql)->fetchAll();
        if(count($dados) > 1){
            foreach($dados as $row){
                foreach($row as $key => $item){
                    $dados[$row['id']][$key] = $item;
                    /*$model = new Model();
                    modelMapper::map($model, $row);
                    $result[$model->getid()] = $model;*/
                }
            }
        }else{
            if(count($dados) == 0){
                return false;
            }
            $row=$this->query($sql)->fetch();
            $model = new Model();
            $model->setArray($row);
            $model->setId($row['id']);
            $model->setCriado($row['criado']);
            $result[$row['id']] = $model;
            return $result;
        }
        return $dados;
    }
    public function grava(Model $model){
        if($model->getId() === null){
            return $this->insert($model);
        }
        return $this->update($model);
    }
    private function getDb() {
        if ($this->db !== null) {
            return $this->db;
        }
        $config = Config::getConfig("mysql");
        try {
            $this->db = new PDO($config['dsn'], $config['usuario'], $config['senha'],
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));  
        } catch (PDOException $ex) {
            echo ('Erro na conexão: ' . $ex->getMessage());
        }
        return $this->db;
    }
    protected function query($sql){
        try{
            $stmt = $this->getDb()->query($sql, PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return $stmt;
    }
    public function showDbMySQL(){
        $sql = "SHOW DATABASES";
        $stmt = $this->getDb()->query($sql);
        return $stmt->fetchAll();
    }
    public function showTabelas(){
        $sql = "SHOW TABLES";
        $stmt = $this->getDb()->query($sql);
        return $stmt->fetchAll();
    }
    private function getSql(CriterioProcuraPessoa $search=null){
        if($search->getArray()){
            $sql = "SELECT * FROM ".$search->getTabela()." WHERE ";
            $x=count($search->getArray());
            foreach($search->getArray() as $key => $value){
                if($x-- > 1){
                    $sql .= "$key = '$value' AND ";
                }else{
                    $sql .= "$key = '$value'";
                }
            }
            return $sql;
        }
        $sql = "SELECT * FROM ".$search->getTabela()." WHERE cpf = ".$search->getCpf();
        return $sql;
    }
    private function insert(Model $model){
        date_default_timezone_set("America/Sao_Paulo");
        $model->setCriado(date('Y-m-d H:i:s'));
        $cols=$values=null;
        foreach($this->getParams($model) as $col => $value){
            $cols .= str_replace(":","`",$col).'`, ';
            $values .= "'$value' ,";
        }
        $sql = "INSERT INTO `".$model->getTabela()."` (`id`,`criado`, $cols `excluido`) VALUES (null,'".$model->getCriado()."', $values '0')";
        $this->criaTabela($model);
        return $this->execute($sql, $model);
    }
    private function update(Model $model){
        date_default_timezone_set("America/Sao_Paulo");
        $model->setModificado(date('Y-m-d H:i:s'));
        $cols=$values=null;
        $sql = "UPDATE `".$model->getTabela()."` SET ";
        foreach($this->getParams($model) as $col => $value){
            if($col != ":criado" && $col != ":modificado"){
                $sql .= str_replace(":","`",$col).'` = ';
                $sql .= "'$value' ,";
            }
        }
        $sql .= "`modificado` = '".$model->getModificado()."'   WHERE id = ".$model->getId();
        
        return $this->execute($sql, $model);
    }
    private function execute($sql,Model $model=null){
        $stmt = $this->getDb()->prepare($sql);
        if(!$this->executeStatement($stmt, $this->getParams($model))){
            self::throwDbError($this->getDb()->errorInfo());
        }
        return $model;
    }
    private function getParams(Model $model){
        $params = array();
        foreach($model->getArray() as $col => $value){
            $params[":$col"]=$value;
        }
        return $params;
    }
    private function criaTabela(Model $model){
        $sql = "CREATE TABLE IF NOT EXISTS `".$model->getTabela()."` ( `id` INT(5) NOT NULL AUTO_INCREMENT , `criado` datetime NOT NULL,`modificado` datetime NULL,";
        foreach($model->getArray() as $col => $value){
            if($col != 'login' && $col != 'cpf'){
                $sql .= "`$col` varchar(100) NULL, ";
            }else{
                $sql .= "`$col` varchar(100) NULL UNIQUE, ";
            }
        }
        $sql .= " `excluido` ENUM('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`)) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci";
        $this->execute($sql, $model);
    }
    private function executeStatement(PDOStatement $stmt, array $params){
        if(!$stmt->execute($params)){
            return false;
        }else{
            return true;
        }
    }
    private function throwDbError(array $errorInfo){
        throw new Excecao('DB error [' . $errorInfo[0] . ', ' . $errorInfo[1] . ']: ' . $errorInfo[2]);
    }
}
/*
echo '<pre>';
$dao = new Dao();
$model = new Model();
$model->setTabela("tb_usuario");
//$dao->grava($model);
//print_r($dao->showDbMySQL());
//print_r($dao->showTabelas());
$search = new CriterioProcura();
$search->setTabela("tb_usuario");
$search->setLogin('edmilson');
$dados=$dao->enconte($search);
print_r($dados);*/

/*$array = array('nome'=>'Edmilson Messias Quintino','email'=>'edmquintino@gmail.com','login'=>'edmilson','senha'=>'123');
$model->setArray($array);
print_r($dao->grava($model));*/