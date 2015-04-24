
<?php

require 'config.php';
require 'util/Authenticate.php';
//should move in init.php
//use an autoloader to load libs folder
function __autoload($class){
    require LIBS.$class.'.php';
}
require 'route.php';
//Load the Bootstrap!
//$boostrap = new Bootstrap();
//$boostrap ->init();

//$route = new Route();
//// User define function
//$route->add('/h',function(){
//    echo 'hey this is home page';
//});
//// Routing controller
//$route->add('/login','login');
//$route->add('/account','account');
//$route->add('/dashboard','dashboard');
//$route->add('/error','error');
//$route->add('/home','home');
//
//$route->run();
//Registry
//Registry::set($name, $object);
//Registry::get($name, $object);
?>
        
