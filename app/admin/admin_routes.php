<?php

$router = [
    'admin' => 'IndexController',
    'admin/add' => 'AddController',
    'admin/logout' => 'LogoutController',
    'admin/login' => 'LoginController',
    'admin/edit' => 'EditController',
    'admin/delete' => 'DeleteController',
    'admin/add_blog' => 'AddBlogController',
    'admin/settings' => 'SettingsController'
];

$QueryBuilder = new QueryBuilder(App::get('db_connect'));
$query = $QueryBuilder->selectAll('strony');

// dodaje adresy url z panelu edycji
foreach ($query as $rout) {
    $router['admin/edit?url='.$rout->url] = 'admin/edit?url='.$rout->url; 
    // 'admin/edit?url='.$rout->url = $router[$rout->url];
}

return $router;