<?php

namespace App\Core\Database;
use PDO;
use PDOException;

class Connection {

    public static function connect($config) {
        try{
            return new PDO(
                $config['connection'].";dbname=".
                $config['db_name'],
                $config['user_name']
            );
        } catch(PDOException $e) {
            die("Nie można nawiązać połączenia.<br/>Błąd: ".$e->getMessage());
        }
    }

}