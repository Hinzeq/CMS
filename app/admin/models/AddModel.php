<?php

class AddModel {

    // sprawdza czy wszystkie wymagane wartości są podane (istnieją i nie są puste)
    public static function checkIsset() {
        if(isset($_POST['url']) && $_POST['url'] != "" &&
            isset($_POST['meta_title']) &&
            isset($_POST['meta_desc']) &&
            isset($_POST['keywords']) &&
            isset($_POST['canonical']) &&
            isset($_POST['tekst']) && $_POST['url'] != "") {
                return true;
            }
        else {
            return false;
        }
    }

    public static function insert() {

        $QueryBuilder = new QueryBuilder(App::get('db_connect'));

        // sprawdza czy checbkox on
        if(isset($_POST['meta_index'])) {
            $_POST['meta_index'] = true;
        } else {
            $_POST['meta_index'] = false;
        }

        // sprawdza czy checbkox on
        if(isset($_POST['meta_follow'])) {
            $_POST['meta_follow'] = true;
        } else {
            $_POST['meta_follow'] = false;
        }

        
        $QueryBuilder->insert('strony', [
            'url' => $_POST['url'],
            'meta_title' => $_POST['meta_title'],
            'meta_desc' => $_POST['meta_desc'],
            'keywords' => $_POST['keywords'],
            'canonical' => $_POST['canonical'],
            'tekst' => $_POST['tekst'],
            'meta_index' => $_POST['meta_index'],
            'meta_follow' => $_POST['meta_follow']
        ]);
        
    }

}