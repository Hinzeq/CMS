<?php

class PagesModel {

    public static function nav() {
        $QueryBuilder = new QueryBuilder(App::get('db_connect'));
        return $QueryBuilder->selectAll('pages');
    }

    public static function page($name) {
        $QueryBuilder = new QueryBuilder(App::get('db_connect'));
        return $QueryBuilder->select('pages', 'full_name', $name);
    }

    // public static function nav() {
    //     $QueryBuilder = new QueryBuilder(App::get('db_connect'));
    //     return $QueryBuilder->selectAll('strony');
    // }

}