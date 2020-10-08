<?php

class Connection {

    public static function connect($config) {
        try{
            return new PDO(
                $config['connection'].";dbname=".
                $config['db_name'],
                $config['user_name'],
                $config['password'],
                $config['options']
            );
        } catch(PDOException $e) {
            die("Nie można nawiązać połączenia.<br/>Błąd: ".$e->getMessage());
        }
    }

}