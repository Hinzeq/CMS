<?php

namespace App\Core;

class App {

    protected static $initiation = [];

    public static function set($key, $value) {
        static::$initiation[$key] = $value;
    }

    public static function get($key) {
        return static::$initiation[$key];
    }

}