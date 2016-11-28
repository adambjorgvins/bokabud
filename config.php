<?php
/**
 * Created by PhpStorm.
 * User: 1304982059
 * Date: 5.10.2016
 * Time: 09:25
 */
require('Model.php');
require('View.php');
require('Controller.php');
try{
    $model = new Model;
    $controller = new Controller($model);
    $view = new View($controller, $model);
} catch(Exception $e){
    die('Caught exception: '.  $e->getMessage(). "\n");
}

