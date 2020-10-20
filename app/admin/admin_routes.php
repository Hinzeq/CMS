<?php

$router = [
    'admin' => 'IndexController',
    'admin/add' => 'AddController',
    'admin/logout' => 'LogoutController',
    'admin/login' => 'LoginController',
    'admin/edit' => 'EditController',
    'admin/delete' => 'DeleteController',
    'admin/settings' => 'SettingsController'
];

$QueryBuilder = new QueryBuilder(App::get('db_connect'));
$query = $QueryBuilder->selectAll('strony');

// add urls from edit panel
foreach ($query as $rout) {
    $router['admin/edit?url='.$rout->url] = 'admin/edit?url='.$rout->url; 
}

// add urls from delete panel
foreach ($query as $rout) {
    $router['admin/delete?url='.$rout->url] = 'admin/delete?url='.$rout->url; 
}

return $router;