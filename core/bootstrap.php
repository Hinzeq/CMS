<?php

function dd($v) {
    echo '<pre>';
    var_dump($v);
    echo '</pre>';
}

App::set('config', require 'config.php');
App::set('db_connect', Connection::connect(App::get('config')['database']));

App::set('uri', trim($_SERVER['REQUEST_URI'], '/'));
$router = new Router;
