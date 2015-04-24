<?php

class Registry{
    private $_obj = array();
    public static function set($name, $object){
        self::$_obj[$name]=$object;
    }
    public static function &get($name){
        return self::$_obj[$name];
    }
    
}

