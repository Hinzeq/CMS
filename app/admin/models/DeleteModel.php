<?php

class DeleteModel {

    public static function delete() {
        $QueryBuilder = new QueryBuilder(App::get('db_connect'));
        
        // Home page cannot be delete
        if($_GET['url'] == "") {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: http://localhost:8888/admin");
        }
        else {
            $QueryBuilder->delete('strony', 'url', $_GET['url']);
        }

    }

}