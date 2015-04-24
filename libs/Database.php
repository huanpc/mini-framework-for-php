<?php

class Database extends PDO {

    public function __construct($db_type,$db_host,$db_name,$db_user,$db_pass) {
        parent::__construct($db_type.':host='.$db_host.';dbname='.$db_name, $db_user, $db_pass);
    }    
    /**
     * insert
     * @param String  $table A name of table to insert into
     * @param String  $data An associative array
     */
    public function insert($table,$data){
        ksort($data);
        $data['password']=Hash::create('md5', $data['password'], HASH_KEY);
        $fieldNames = implode(",", array_keys($data));
        $fieldValues = implode("','", array_values($data));        
        $pquery = $this->prepare("INSERT INTO $table ($fieldNames) VALUES ('$fieldValues')");
        $pquery->execute();
    }
    
    /**
     * update
     * @param String  $table A name of table to insert into
     * @param String  $data An associative array
     * @param String  $where the WHERE query part
     */
    public function update($table,$data,$where){
        ksort($data);
        $data['password']=Hash::create('md5', $data['password'], HASH_KEY);
        $arrTemp = array();
        foreach($data as $key=>$value){
            $arrTemp[$key] =$key."="."'$value'"; 
        }        
        $fieldValues = implode(",", array_values($arrTemp));                
        $pquery = $this->prepare("UPDATE $table SET $fieldValues WHERE $where");
        $pquery->execute();
    }

    public function select($table,$colname){
        $arrTemp = implode(",", array_values($colname));
        $pquery = $this->prepare("SELECT $arrTemp FROM $table");
        $pquery->execute();
        return $pquery->fetchAll();
    }
    public function selectWhere($table,$colname,$where){
        $arrTemp = implode(",", array_values($colname));
        $pquery = $this->prepare("SELECT $arrTemp FROM $table WHERE $where");
        $pquery->execute();
        return $pquery->fetch();
    }
    
    public function delete($table,$where){
        $pquery = $this->prepare("DELETE FROM $table WHERE $where");
        $pquery->execute();        
    }
}
    
