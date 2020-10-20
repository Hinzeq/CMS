<?php

class EditModel {

    public static function checkIsset() {

        if($_GET['url'] == '' && 
            isset($_POST['content']) && $_POST['content'] != "") {
                return true;
            }
        else if(isset($_POST['url']) && $_POST['url'] != "" &&
            isset($_POST['name']) && $_POST['name'] != "" &&
            isset($_POST['content']) && $_POST['content'] != "") {
                return true;
            }
        else {
            return false;
        }
    }

    public static function get($url) {
        $QueryBuilder = new QueryBuilder(App::get('db_connect'));        
        return $QueryBuilder->select('strony', 'url', $url);
    }

    public static function update($url) {

        $QueryBuilder = new QueryBuilder(App::get('db_connect'));

        // check checbkox on
        if(isset($_POST['meta_index'])) {
            $_POST['meta_index'] = true;
        } else {
            $_POST['meta_index'] = false;
        }
        
        // check checbkox on
        if(isset($_POST['meta_follow'])) {
            $_POST['meta_follow'] = true;
        } else {
            $_POST['meta_follow'] = false;
        }
        
        // protected Home page from incorrect data
        if($_GET['url'] == "") {
            $url = "";
            $_POST['url'] = "";
            $_POST['name'] = "Główna";
        } 

        $QueryBuilder->update('strony', [
            'url' => $_POST['url'],
            'name' => $_POST['name'],
            'meta_title' => $_POST['meta_title'],
            'meta_desc' => $_POST['meta_desc'],
            'keywords' => $_POST['keywords'],
            'canonical' => $_POST['canonical'],
            'content' => $_POST['content'],
            'meta_index' => $_POST['meta_index'],
            'meta_follow' => $_POST['meta_follow']
        ],
        $url);

        header("HTTP/1.1 301 Moved Permanently");
        header("Location: http://localhost:8888/admin");
        
    }

}