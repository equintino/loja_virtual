<?php
class Config{
    private static $data;
    
    public static function getConfig($section = null){
        if($section == null){
            return self::$data;
        }else{
            $data = self::getData();
            if(!array_key_exists($section, $data)){
                throw new Exception("Sessão não reconhecida: ".$section);
            }
        }
        return $data[$section];
    }
    public static function getData(){
        if(self::$data != null){
            return self::$data;
        }else{
            self::$data = parse_ini_file("../dao/conf.ini", true);
        }
        return self::$data;
    }
}