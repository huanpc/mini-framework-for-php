<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Query extends Controller {
    
    function __construct() {
        parent::__construct();
        $this->database = new Database();
    }
    function index() {
        $user = 'huanpc';
        $pass = '12345678';      
        $str = "SELECT * FROM users WHERE user ='"
                ."$user' AND password ='$pass'";
                //. "AND password = ".$pass;
        $prepare = $this->database->prepare($str);
        $prepare->execute();
//        $result = $prepare->setFetchMode(PDO::FETCH_ASSOC);
        $result = $prepare->fetchAll();
//        foreach ($prepare as $k=>$v)
//            echo $k."=>".$v;
        print_r ($result);
        echo "<br/>".$prepare->rowCount();
    }
    

}