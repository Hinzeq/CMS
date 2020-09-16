<?php

function dd($v) {
    echo '<pre>';
    var_dump($v);
    echo '</pre>';
}

namespace App\Core;
use App\Core\{App, Router};
use App\Core\Database\{Connection, QueryBuilder};
use App\Controllers;

require 'core/App.php';
require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

App::set('config', require 'config.php');
App::set('db_connect', Connection::connect(App::get('config')['database']));

$QueryBuilder = new QueryBuilder(App::get('db_connect'));

App::set('uri', trim($_SERVER['REQUEST_URI'], '/'));
$router = new Router;

require $router->direct(App::get('uri'));