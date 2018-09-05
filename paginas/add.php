<link rel="stylesheet" href="../web/css/bootstrap.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<style>
    *{
        margin: 0;
        padding: 0;
    }
    h1{
        text-align: center;
    }
</style>
<?php
require_once "../dao/Dao.php";
require_once "../classes/Model.php";
require_once "../dao/CriterioProcuraPessoa.php";
require_once "../mensagem/Mensagem.php";

$origem = array_key_exists("origem", $_POST)?$_POST["origem"]:null;
$cpf = array_key_exists("cpf",$_POST)?$_POST["cpf"]:null;

$dao = new Dao();
$model = new Model();
$search = new CriterioProcuraPessoa();
    
if($origem=="cadastro"){
    $search->setTabela("tb_usuario");
    $confirma = gerRandStr();
    $_POST['confirma']=$confirma;
    $search->setCpf($cpf);
    $dadosDb=$dao->encontre($search);
    if(is_array($dadosDb)){
        $kay = each($dadosDb)['key'];
        $cpfDb = $dadosDb[$kay]->getArray()['cpf'];
        if($cpf == $cpfDb){
            echo Mensagem::getWarning("Cadastro existente.");
            die;
        }
    }
    $model->setTabela("tb_usuario");
    $model->setArray($_POST);
    
    if(is_object($dao->grava($model))){
        echo '<div class="alert alert-success">';
        echo '<h1>Cadastro enviado com secesso.</h1>';
        echo '<a href="../web/index.php?origem=login&conf='.$model->getArray()['confirma'].'"><button class="btn btn-success" style="float:right;margin-top: 15px;" .>Avançar</button></a>';
        echo '</div>';die;        
    }
}elseif($origem=="login"){
    $confirma=$_POST['confirma'];
    $login=$_POST['login'];
    $senha=$_POST['senha'];
    $search->setTabela("tb_usuario");
    $search->setArray(array("confirma"=>$confirma));
    if($row=$dao->encontre($search)){
        if($row){
            foreach($row as $model){
                $arr=($model->getArray());
                $model->setTabela("tb_usuario");
                $model->setArray(array_replace($arr,array('login'=>$login,'senha'=>$senha,'confirma'=>'ok')));
                try{
                    $dao->grava($model);
                    echo Mensagem::getSucess("Cadastro concluido com secesso.");
                    die;
                } catch (Exception $ex) {
                    echo Mensagem::getErro("Erro no cadastro, LOGIN já existe.");
                    die;
                }
            }
        }
    }else{
        echo Mensagem::getErro("Erro no cadastro, tente novamente.");
        die;
    }
    
}
function gerRandStr($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}