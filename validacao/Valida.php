<?php
class Valida {
    private static $login;
    
    public static function start(){
        $session_start = session_start([
            "cookie_lifetime" => 1,
        ]);
        $login=!(isset($_SESSION['login']))?"Entrar":$_SESSION['login'];
        echo "<script>var login='$login';</script>";
        self::setLogin($login);
        return self::getLogin();
    }
    public static function getLogin(){
        return self::$login;
    }
    private static function setLogin($lg){
        self::$login=$lg;
    }
}