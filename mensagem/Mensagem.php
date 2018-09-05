<?php
class Mensagem {    
    public static function getErro($msg) {
        $html = '<div class="alert alert-danger">';
        $html .= '<h1><strong>'.$msg.'</strong></h1>';
        $html .= '<button class="btn btn-danger" style="float:right;margin-top: 15px;" onclick="history.go(-1)">Voltar</button></div>';
        return $html;
    }
    public static function getSucess($msg) {
        $html = '<div class="alert alert-success">';
        $html .="<h1>".$msg."</h1>";
        $html .='<a href="../web/index.php"><button class="btn btn-success" style="float:right;margin-top: 15px;" >Avançar</button></a></div>';
        return $html;
    }
    public static function getWarning($msg) {
        $html = '<div class="alert alert-warning">';
        $html .= "<h1>$msg</h1>";
        $html .= '<button class="btn btn-warning" style="float:right;margin-top:-15px;" onclick="history.go(-1)">Voltar</button></div>';
        return $html;
    }
}