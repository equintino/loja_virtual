<meta charset='utf-8' />
<?php 
require_once "../dao/Dao.php";
require_once "../dao/CriterioProcura.php";
require_once "../dao/BuscaDados.php";

class Login{
    private $login;
    private $senha;
    
    public function __construct() {
    }
    public function setLogin($lg){
        $dao = new BuscaDados();
        $search = new CriterioProcura();
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
session_start();
if(!array_key_exists("sair",$_POST)){
    $login = new Login();
    $login->setLogin($_POST['login']);
    if($login->getLogin() && $login->getSenha()==$_POST['senha']){
        $_SESSION['login']=$login->getLogin();
        header("Location:../web");
    }else{
        session_destroy();
        echo "Usuário ou senha não confere.";
    }
}else{
    $_SESSION['login']=null;
    header("Location:../web");
}