<?php

class AddModel {

    // check whether the required values ​​are entered
    public static function checkIsset() {
        if(isset($_POST['url']) && $_POST['url'] != "" &&
            isset($_POST['name']) && $_POST['name'] != "" &&
            isset($_POST['content']) && $_POST['content'] != "") {
                return true;
            }
        else {
            return false;
        }
    }

    public static function insert() {

        $QueryBuilder = new QueryBuilder(App::get('db_connect'));

        // chech checbkox on
        if(isset($_POST['meta_index'])) {
            $_POST['meta_index'] = true;
        } else {
            $_POST['meta_index'] = false;
        }

        // chech checbkox on
        if(isset($_POST['meta_follow'])) {
            $_POST['meta_follow'] = true;
        } else {
            $_POST['meta_follow'] = false;
        }
        
        $QueryBuilder->insert('strony', [
            'url' => $_POST['url'],
            'name' => $_POST['name'],
            'meta_title' => $_POST['meta_title'],
            'meta_desc' => $_POST['meta_desc'],
            'keywords' => $_POST['keywords'],
            'canonical' => $_POST['canonical'],
            'content' => $_POST['content'],
            'meta_index' => $_POST['meta_index'],
            'meta_follow' => $_POST['meta_follow']
        ]);
        
    }

}