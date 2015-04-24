<?php

class Validator{
    public function __construct() {       
    }
    
    public function minlength($data,$arg){
        if($arg!=null)
            if(strlen($data)<$arg){
                return "Your string can only be $arg long";
            }
    }
    
    public function maxlength($data,$arg){
        if(strlen($data)<$arg){
            return "Your string can only be $arg long";
        }
    }         
    public function digit($data){
        if(ctype_digit($data)){
            return "Your string must be a digit";
        }
    }
}

