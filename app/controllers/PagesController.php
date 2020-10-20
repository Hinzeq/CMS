<?php

class PagesController {

    public function render($name) {
        require 'app/models/PagesModel.php';
        
        $nav = PagesModel::nav();
        $page = PagesModel::page($name);

        // set index, follow
        ($page['meta_index'] == true) ? $index = 'index' : $index = 'noindex';
        ($page['meta_follow'] == true) ? $follow = 'follow' : $follow = 'nofollow';
        
        //set canonical
        ($page['canonical'] == "") ? $myurl = "http://localhost:8888".$_SERVER['REQUEST_URI'] : $myurl = $page['canonical'];
        
        array_shift($nav);
        require "app/views/page.php";
    }

}