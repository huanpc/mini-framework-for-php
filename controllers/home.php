<?php
class Home extends Controller{
    function __construct($title) {
        parent::__construct($title);
        
        
    }
    public function other($arg = false){
        echo 'we are inside other';
        echo 'Optional: '.$arg;
    }
    public function index() {
        $this->view->render('home/home');
    }
}
