<?php

namespace App\Core;
use App\Controllers\PagesController;

class Router {

    protected $routes = [];

    public function direct($uri) {
        $this->routes = require 'app/routes.php';
        
        if(array_key_exists($uri, $this->routes)){
            $part = new PagesController;
            return $part->render($this->routes[$uri]);
        }
            
        else
            return 'app/views/404.php';
    }

}