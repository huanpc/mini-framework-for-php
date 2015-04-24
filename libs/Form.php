<?php
require 'Form/Validator.php';
class Form
{
    /** @var $_currentItem The immediately posted item*/
    private $_currentItem = null;
    private $_postData = array();
    private $_validator = array();
    private $_error  = array();
    
    public function __construct() {
        $this->_validator = new Validator();
    }
    public function post($field) {
        $this->_postData[$field] = $_POST[$field];
        $this->_currentItem = $field;
        return $this;
        
    }
   
    
    public function fetch($fieldName = false){
        if($fieldName){
            if(isset($this->_postData[$fieldName]))           
                return $this->_postData[$fieldName];
            else 
                return false;
            
        }else{
            return $this->_postData;                    
        }
    }
    
     public function val($typeOfValidator,$arg=null) {        
        
        $error = $this->_validator->{$typeOfValidator}($this->_postData[$this->_currentItem],$arg);       
        
        if($error){
            $this->_error[$this->_currentItem] = $error;
        }
        echo '<pre>';
        print_r($this->_error);
        return $this;
    }
}

