<?php
class ModelMapper {
    public static $array;
    
    public static function map(Model $model,array $array){
        print_r($array);
        
        return $model;
    }
}
