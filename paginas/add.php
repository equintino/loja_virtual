<link rel="stylesheet" href="../web/css/bootstrap.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    *{
        margin: 0;
        padding: 0;
    }
    h1{
        margin-top: -5px;
    }
</style>
<?php
require_once "../dao/Dao.php";
require_once "../model/Model.php";
require_once "../dao/CriterioProcura.php";

$origem = array_key_exists("origem", $_POST)?$_POST["origem"]:null;
if($origem=="cadastro"){
    $dao = new Dao();
    $model = new Model();
    $search = new CriterioProcura();
    $search->setTabela("tb_usuario");
    //$_POST['login']='edmilson';
    //$_POST['senha']='123';
    $search->setNome($_POST['nome']);
    $dadosDb=$dao->encontre($search);
    foreach($dadosDb as $dadoDb);
    if(mb_strtoupper($_POST['nome'],'utf-8') == mb_strtoupper($dadoDb['nome'],'utf-8')){
        echo '<div class="alert alert-warning">';
        echo '<h1>Cadastro existente.</h1>';
        echo '<button class="btn btn-warning" style="float:right;margin-top:-15px;" onclick="history.go(-1)">Voltar</button>';
        echo '</div>';die;
    }
    $model->setTabela("tb_usuario");
    $model->setArray($_POST);
    
    print_r($dao->grava($model));
}