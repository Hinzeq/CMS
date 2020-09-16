<?php

namespace App\Models;
use App\Core\App;
use App\Core\Database\{Connection, QueryBuilder};

$query = $QueryBuilder->selectAll('todos');
$nav = $QueryBuilder->selectAll('pages');
array_shift($nav);