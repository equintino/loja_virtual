<?php
class Valida {
    public static function login(){
        $session_start = session_start();
        $login=!(isset($_SESSION['login']))?"Entrar":$_SESSION['login'];
        return $login;
    }
}