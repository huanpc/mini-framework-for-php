<?php
class Model {

    function __construct() {
        $this->database = new Database(DB_TYPE,DB_HOST,DB_NAME,DB_USER,DB_PASS);
        $this->_model = get_class($this);
        $this->_table = strtolower($this->_model)."s";
    
    }
    
}
