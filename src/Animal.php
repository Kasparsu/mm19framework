<?php
namespace App;

class Animal {
    public static $age;
    public $value;

    public static function getAge(){
        return self::$age;
    }
}

