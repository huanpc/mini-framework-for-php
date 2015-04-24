<?php

//When you are logged in
class Account extends Controller {

    public function __construct($title) {
        parent::__construct($title);
//        Session::init();
//        $logged = Session::get('loggedIn');
//        $role = Session::get('role');
//        if($logged ==false||$role != 'owner'){
//            Session::destroy();
//            header('location: ./login');            
//            exit;
//        }     
            Authenticate::handleLogin();
    }
    
    public function index() {
        $this->view->accountList = $this->model->accountList();
        $this->view->render('account/index');
    }
    
    public function create(){
        $data = array();
        $data['user'] = $_POST['user'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];        
        //@TODO: Do your error checking;        
        $this->model->create($data);
        header('location: '.URL.'account');
    }
    public function edit($id){
        //fetch individual user
        $this->view->account = $this->model->getAccountInfo($id);
        $this->view->render('account/edit_form');
    }
    public function saveInfoChange($id){
        $data = array();        
        $data['id'] = $id;
        $data['user'] = $_POST['user'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];        
        //@TODO: Do your error checking;        
        $this->model->saveInforChanged($data);
        header('location: '.URL.'account');
    }
    public function delete($id){
        $this->model->delete($id);
        header('location: '.URL.'account');
    }
}
