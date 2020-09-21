<?php

namespace App\Controllers;
use App\Models\PagesModel;

class PagesController {

    public function render($name) {
        require 'app/models/PagesModel.php';
        //$query = PagesModel::query();
        $nav = PagesModel::nav();
        $page = PagesModel::page($name);
        
        array_shift($nav);
        require "app/views/page.php";
    }

}