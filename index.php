<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//instantiate Fat-Free
$f3 = Base::instance(); //static method

//define a default route
$f3->route('GET /', function (){
    echo "Week 5";

//    $view = new Template();
//    echo $view->render('views/home.html');
});

//run Fat-Free
$f3->run();

