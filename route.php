<?php
/**
 * Routing system
 */
$route = new Route();
// User define function
$route->add('/h',function(){
    echo 'hey this is home page';
});
// Routing controller

$route->add('/login','login');
$route->add('/account','account');
$route->add('/dashboard','dashboard');
$route->add('/error','error');
$route->add('/home','home');

//
$route->run();

