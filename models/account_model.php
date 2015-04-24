<?php

class Account_Model extends Model {

    function __construct() {
        parent::__construct();
    }
    public function accountList(){
        $whatNeed = array('id','user','role');        
        return $this->database->select('users',$whatNeed);
    }
    public function getAccountInfo($id){
        $whatNeed = array('id','user','role');        
        $where = "id ="."'$id'";
        return $this->database->selectWhere('users',$whatNeed,$where);
    }
    
    public function create($data){
        $this->database->insert('users',$data);
    }
    public function saveInforChanged($data){        
        $id = $data['id'];
        $this->database->update('users',$data,"id='$id'");
    }
    public function delete($id){
        $where = "id = ".$id;        
        $whatNeed = array('role');
        $where = "id ="."'$id'";                              
        $role=$this->database->selectWhere('users',$whatNeed,$where);
        if($role['role']=='owner')
               return;
        else
            $this->database->delete('users',$where);
    }
    
}