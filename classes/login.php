<?php 
require_once "../dao/Dao.php";
require_once "../dao/CriterioProcuraPessoa.php";
require_once "../dao/BuscaDados.php";

class Login{
    private $login;
    private $senha;
    
    public function __construct() {
    }
    public function setLogin($lg){
        $dao = new BuscaDados();
        $search = new CriterioProcuraPessoa();
        $search->setTabela("tb_usuario");
        $search->setLogin($lg);
        $dados = $dao->encontre($search);
        if($dados){
            $this->login=$lg;
            $this->setSenha($dados['senha']);
        }else{
            $this->login=null;
        }
    }
    public function getLogin(){
        return $this->login;
    }
    public function setSenha($senha){
        $this->senha=$senha;
    }
    public function getSenha(){
        return $this->senha;
    }
}