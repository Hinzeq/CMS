<?php

$QueryBuilder = new QueryBuilder(App::get('db_connect'));
$query = $QueryBuilder->selectAll('pages');

foreach ($query as $rout) {
    $router[$rout->name] = $rout->full_name;
}
return $router;