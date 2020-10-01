<?php

class Router {

    protected $routes = [];
    protected $exist = false;
    protected $admin_router = [];

    public function direct($uri) {
        
        // get panel admin views
        if(strstr($_SERVER['REQUEST_URI'], 'admin')) {

            $this->admin_router = require 'app/admin/admin_routes.php';
            
            if(array_key_exists($uri, $this->admin_router)) {
                $this->exist = true;

                $controller = $this->set($this->admin_router[$uri]);
                
                return $controller->render();
            }
        } 

        // get layout views
        else {
            $this->routes = require 'app/routes.php';
            
            if(array_key_exists($uri, $this->routes)) {
                $this->exist = true;

                $controller = new PagesController;

                return $controller->render($this->routes[$uri]);
            }
        }

        // 404 page
        if(!$this->exist) {
            require 'app/views/404.php';
        }

        
    }

    private function set($controller) {

        if ($controller == 'IndexController') return new IndexController;
        else if ($controller == 'AddController') return new AddController;
        else if ($controller == 'LogoutController') return new LogoutController;
        else if ($controller == 'LoginController') return new LoginController;
        else if ($controller == 'EditController') return new EditController;
        else if ($controller == 'DeleteController') return new DeleteController;
    }

}