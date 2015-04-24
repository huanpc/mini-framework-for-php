<?php

//When you are logged in
class Dashboard extends Controller {

    function __construct($title) {
        parent::__construct($title);
//        Session::init();
//        $logged = Session::get('loggedIn');
//        if($logged ==false){
//            Session::destroy();
//            header('location: ./login');            
//            exit;
//        }
        Authenticate::handleLogin();
        $this->view->js = array('dashboard/js/default.js');
    }    
    function index() {        
        $this->view->render('dashboard/index');
        
    }
    function logout(){
        Session::destroy();
        header('location: ../login');
    }
    function xhrInsert(){
        $this->model->xhrInsert();
    }
}
