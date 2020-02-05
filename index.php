<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 2/5/2020
 * @version 1.0
 * index.php
 * GreenRiverDev
 */

//turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);


//Require the autoload file
require_once('vendor/autoload.php');
require('classes/Pet.php');

//session start
session_start();

//create instance of the base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function(){
    $pet1 = new Pet();
    $pet1->eat();

    //Call the talk method
//    $view = new Template();
////    echo $view->render('views/my-pets.html');
});

//run fat free
$f3->run();
