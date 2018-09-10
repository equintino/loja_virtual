<?php
class DaoVitrine extends Dao{
    public function grava(Model $model){
        if($model->getId() === null){
            return $this->insert($model);
        }
        return $this->update($model);
    }
    public function encontre(CriterioProcura $search){
        $sql = $this->getSql2($search);
        $dados = $this->query($sql)->fetchAll();
        if(count($dados) == 0){
            return false;
        }
        /*echo '<pre>';
        print_r($dados);
        if(count($dados) > 1){*/
        foreach($dados as $row){
            foreach($row as $key => $item){
                $dados_[$row['id']][$key] = $item;
            }
        }
        return $dados_;
        /*}else{
            if(count($dados) == 0){
                return false;
            }
            $row=$this->query($sql)->fetch();
            $model = new Model();
            $model->setArray($row);
            $model->setId($row['id']);
            $model->setCriado($row['criado']);
            $result[$row['id']] = $model;
            print_r($result);
            return $result;
        }*/
    }
    public function getSql2(CriterioProcura $search){
        if($search->getArray()){
            $sql = "SELECT *,tb_produto.cod_produto FROM ".$search->getTabela()." LEFT JOIN `tb_classifica` ON ".$search->getTabela().".cod_produto = tb_classifica.cod_classifica WHERE tb_produto.";
            $x=count($search->getArray());
            foreach($search->getArray() as $key => $value){
                if($x-- > 1){
                    $sql .= "$key like '%$value%' AND ";
                }else{
                    $sql .= "$key like '%$value%'";
                }
            }
            return $sql;
        }
        $sql = "SELECT * FROM ".$search->getTabela()." INNER JOIN `tb_classifica` ON ".$search->getTabela().".cod_produto = tb_classifica.cod_classifica ORDER BY nota DESC";
        return $sql;
    }
}
