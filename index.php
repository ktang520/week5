<?php
/*
 * Kasyn Tang
 * January 2024
 * http://ktang.greenriverdev.com/328/week5/
 * This is my Controller for the week5 app
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate Fat-Free Framework (F3)
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function () {

    // display a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Define a breakfast route
$f3->route('GET /week5', function () {
    echo "week5";

    // display a view page
    $view = new Template();
    echo $view->render('views/week_5.html');
});

// Run Fat-Free
$f3->run();