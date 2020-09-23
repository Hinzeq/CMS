<?php

class PagesModel {

    // public static function query() {
    //     $QueryBuilder = new QueryBuilder(App::get('db_connect'));
    //     return $QueryBuilder->selectAll('todos');
    // }

    public static function nav() {
        $QueryBuilder = new QueryBuilder(App::get('db_connect'));
        return $QueryBuilder->selectAll('pages');
    }

    public static function page($name) {
        $QueryBuilder = new QueryBuilder(App::get('db_connect'));
        return $QueryBuilder->select('pages', 'full_name', $name);
    }

}