<?php

// in this class I set parameters like arrays
class App {

    protected static $initiation = [];

    public static function set($key, $value) {
        static::$initiation[$key] = $value;
    }

    public static function get($key) {
        return static::$initiation[$key];
    }

}