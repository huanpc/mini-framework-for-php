<?php
class Error extends Controller{

    function __construct($title = '404 error') {
        parent::__construct($title);
        $this->view->msg = 'This page doesnt exists';
        
    }
    public function index() {
        $this->view->render('error/index');
    }
}