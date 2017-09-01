<?php
/**
 * Created by PhpStorm.
 * User: haiaty
 * Date: 09/08/17
 * Time: 20.26
 */


function route_translated($locale, $key){
    
    $routes = require (resource_path("lang/$locale/routes.php"));

    return $routes[$key];
}