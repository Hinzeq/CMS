<?php

$QueryBuilder = new QueryBuilder(App::get('db_connect'));
$query = $QueryBuilder->selectAll('strony');

// add friendly url to the array
foreach ($query as $rout) {
    $router[$rout->url] = $rout->id; 
}
return $router;