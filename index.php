<?php
//this is my controller

//turn on error reporting always
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//instantiate Fat-Free
$f3 = Base::instance(); //static method
//java equivalent: Base f3 = new Base();g

//define a default route
$f3->route('GET /', function ($f3){

    //add key-value pairs to the F3 "hive"
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password1'));
    $f3->set('title', 'Working with Templates');

    //save variables
    $f3->set('temp', 67);
    $f3->set('color', 'purple');
    $f3->set('fruits',array('apple','oranges','banana'));
    $f3->set('vegetables',array('bokchoy','potatoes','carrots'));

    //display the view page
    $view = new Template();
    echo $view->render('views/info.html');

    //alternate syntax
//    echo Template::instance()->render('views/info.html');
});

//run Fat-Free
$f3->run();

