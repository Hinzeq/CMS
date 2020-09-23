<?php

require 'vendor/autoload.php'; // composer dump-autoload
require 'core/bootstrap.php';

$router->direct(App::get('uri'));