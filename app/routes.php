<?php

$QueryBuilder = new QueryBuilder(App::get('db_connect'));
$query = $QueryBuilder->selectAll('strony');

foreach ($query as $rout) {
    $router[$rout->url] = $rout->id; 
}
return $router;