<?php
class BuscaDados extends Dao{
    public function encontre(CriterioProcura $search){
        $dados = array();
        $sql = $this->getSql($search);
        if(count($this->query($sql)->fetchAll()) > 1){
            foreach($this->query($sql)->fetchAll() as $row){
                foreach($row as $key => $item){
                    $dados[$row['id']][$key] = $item;
                }
            }
        }else{
            return $this->query($sql)->fetch();
        }
        return $dados;
    }
    public function getSql(CriterioProcura $search=null){
        $sql = "SELECT * FROM ".$search->getTabela()." WHERE login = '".$search->getLogin()."'";
        return $sql;
    }
}
