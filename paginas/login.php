<meta charset='utf-8' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../web/css/bootstrap.min.css" />
<style>
    h2{
        text-align: center;
    }
    button{
        float: right;
        margin-top: 15px;
    }
</style>
<?php
require_once "../dao/Dao.php";
require_once "../classes/login.php";
require_once "../dao/CriterioProcura.php";
require_once "../dao/BuscaDados.php";

session_start();
if(!array_key_exists("sair",$_POST)){
    $login = new Login();
    $login->setLogin($_POST['login']);
    if($login->getLogin() && $login->getSenha()==$_POST['senha']){
        $_SESSION['login']=$login->getLogin();
        header("Location:../web");
    }else{
        session_destroy();
        echo "<div class='alert alert-danger'>";
        echo "<h2>LOGIN ou SENHA não confere.</h2>";
        echo "<button class='btn btn-danger' onclick='history.go(-1)'>Voltar</button>";
        echo "</div>";
    }
}else{
    $_SESSION['login']=null;
    header("Location:../web");
}