<?php
// turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// create an instance of the base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /' , function(){
    // fat free - taking the view page and rendering it in the browser
    $view = new Template();
    echo $view->render('/views/home.html');
});

// Run fat free
$f3->run();

// Define an order route
$f3->route('GET /order' , function(){
    echo "Order Route";
});

// Define an order2 route
$f3->route('GET /order2' , function(){
    echo "Order 2 Route";
});

// Define an order route
$f3->route('GET /summary' , function(){
    echo "summary";
});