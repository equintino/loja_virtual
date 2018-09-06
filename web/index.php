<?php
require_once "../validacao/Valida.php";
require_once "../classes/Comprador.php";
require_once "../dao/Dao.php";
require_once "../dao/CriterioProcuraPessoa.php";

class index{
    public function index(){
        require_once "../layout/index.php";        
    }
}           
$origem = array_key_exists("origem",$_GET)?$_GET['origem']:null;
$login=Valida::login();
echo '<script>var login="'.$login.'";var origem="'.$origem.'"</script>';
new index();

/* Dados do Comprador(nome/login/cpf) "$comprador" */
$dao = new Dao();
$search = new CriterioProcuraPessoa();
$search->setTabela("tb_usuario");
$search->setArray(array("login"=>$login));
$dados=$dao->encontre($search);
$key=each($dados)['key'];
$comprador = new Comprador($dados[$key]->getArray()['nome'], $dados[$key]->getArray()['login'], $dados[$key]->getArray()['cpf']);