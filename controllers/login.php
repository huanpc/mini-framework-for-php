<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login extends Controller {

    function __construct($title) {
        parent::__construct($title);
        
    }
    function index() {
        //echo Hash::create('md5', '12345678', HASH_KEY); 
        $this->view->render('login/index');
    }
    public function loginSubmit(){

        $this->model->checkUser();
        
    }

}
