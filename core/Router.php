<?php

namespace App\Core;

class Router {

    protected $routes = [];

    public function direct($uri) {
        $this->routes = require 'app/routes.php';
        $part = "app/controllers/";
        
        if(array_key_exists($uri, $this->routes))
            return $part.$this->routes[$uri];
        else
            return 'app/views/404.php';
    }

}