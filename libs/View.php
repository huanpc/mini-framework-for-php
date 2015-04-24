<?php
class View {

    function __construct() {
//        echo 'Base View';
    }
    public function render($name,$noInclude=false){
        if($noInclude){
            require 'views/'.$name.'.php';
        }else{
            require 'views/header.php';   
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        }
    }

}