<?php

class PagesModel {

    // get navigation
    public static function nav() {
        $QueryBuilder = new QueryBuilder(App::get('db_connect'));
        return $QueryBuilder->selectAll('strony');
    }

    // get single page
    public static function page($name) {
        $QueryBuilder = new QueryBuilder(App::get('db_connect'));
        return $QueryBuilder->select('strony', 'id', $name);
    }

}