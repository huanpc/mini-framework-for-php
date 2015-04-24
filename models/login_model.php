<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login_Model extends Model {

    function __construct() {
        parent::__construct();
    }
    public function checkUser(){
        $user = $_POST['user_name'];
        $password = Hash::create('md5', $_POST['pass_word'], HASH_KEY); 
        
        $query="SELECT * FROM users WHERE"
                ." user ='$user' AND password ='$password'";
        $pquery = $this->database->prepare($query);
        $pquery->execute();
        $data = $pquery->fetch();
        $count = $pquery->rowCount();
        if($count>0){
            //login
            Session::init();
            Session::set('role', $data['role']);
            Session::set("loggedIn",true);
            Session::set("user", $user);
            Session::set("user", $user);            
            header('location: ../dashboard');
            
        }else{
            header('location: ../login');
            //show an error
        }
    }

}