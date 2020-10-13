<?php

class PagesController {

    public function render($name) {
        require 'app/models/PagesModel.php';
        
        $nav = PagesModel::nav();
        $page = PagesModel::page($name);
        
        array_shift($nav);
        require "app/views/page.php";
    }

}