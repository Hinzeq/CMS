<?php

class IndexModel {

    public static function getAll() {
        $QueryBuilder = new QueryBuilder(App::get('db_connect'));
        return $QueryBuilder->selectAll('strony');
    }

}